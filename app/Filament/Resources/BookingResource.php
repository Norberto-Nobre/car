<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Http\Controllers\CustumerController;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function getNavigationBadge(): ?string
    {
        return Booking::count() > 0 ? (string) Booking::count() : null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('customer_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('vehicle_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pickup_office_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('return_office_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('province_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('booking_code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('start_date')
                    ->required(),
                Forms\Components\DateTimePicker::make('end_date')
                    ->required(),
                Forms\Components\TextInput::make('subtotal_amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('discount_amount')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('total_amount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('daily_rate')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('days')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('vehicle.vehicleModel.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('pickupOffice.name')
                    ->sortable()
                    ->getStateUsing(fn ($record) => optional($record->pickupOffice)->name . ' (' . $record->pickup_office_id . ')'),
                Tables\Columns\TextColumn::make('returnOffice.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('province.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('booking_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('daily_rate')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('days')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->icon(fn (string $state): string => match ($state) {
                        'pendente'  => 'heroicon-o-clock',        // ícone de relógio
                        'aprovado'  => 'heroicon-o-check-circle', // ícone de aprovado
                        'cancelado' => 'heroicon-o-x-circle',     // ícone de cancelado
                        'expirado'  => 'heroicon-o-exclamation-circle', // ícone de aviso
                        default     => 'heroicon-o-question-mark-circle', // fallback
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'pendente'  => 'warning',
                        'aprovado'  => 'success',
                        'cancelado' => 'danger',
                        'expirado'  => 'gray',
                        default     => 'secondary',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                //
                Tables\Actions\Action::make('status')
                    ->label ('Aprovar')

                    ->form([
                    Forms\Components\Select::make('status')
                        ->label('Selecione o status do pagamento')
                        ->options([
                            'pendente' => 'pendente',
                            'aprovado' => 'aprovado',
                            'cancelado' => 'cancelado',
                            'expirado' => 'expirado',
                        ])
                        ->required(),
                ])

                    ->action(function (Booking $record, array $data) {
                        // Atualiza conforme seleção
                        $record->status = $data['status']; // se tiver coluna status no banco
                        $record->save();

                        // Envia WhatsApp só se aprovado
                        if ($data['status'] === 'aprovado' && $record->customer?->phone) {
                            app(CustumerController::class)
                                ->sendWhatsAppMessage(
                                    $record->customer->phone, // pega telefone do cliente
                                    "Sua reserva #{$record->booking_code} foi *APROVADA* ✅. Obrigado por reservar conosco!"
                                );
                        }

                       Notification::make()
                        ->title('Status da reserva: ' . ucfirst($data['status']))
                        ->success()
                        ->send();
                    })

                    ->color('success')
                    ->modalHeading('Aprovar Reserva')
                    ->modalButton('Confirmar')
                    ->visible(fn (Booking $record) => $record->status === 'pendente'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
