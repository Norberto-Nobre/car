<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CustumerController extends Controller
{
    public function store(Request $request): RedirectResponse
    {

            $countryCode = $request->country_code; // ex: 244
            $phone = preg_replace('/\D/', '', $request->phone); // remove espaços e traços
            $fullPhone = '+' . $countryCode . $phone;

        // Criar cliente
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone' => "+244929372512",
            'address' => $request->address,
            'password' => "default", // ⚠️ depois podes mudar para bcrypt
            'date_of_birth' => $request->date_of_birth,
        ]);

        // Criar reserva
        $booking = Booking::create([
            'customer_id'      => $customer->id,
            'vehicle_id'       => $request->vehicle_id,
            'pickup_office_id' => $request->pickup_office_id,
            'return_office_id' => $request->return_office_id,
            'province_id'      => $request->province_id,
            'dias_province'    => $request->dias_province,
            'booking_code'     => rand(10, 99) . rand(10, 99),
            'start_date'       => $request->start_date,
            'end_date'         => $request->end_date,
            'status'           => "pendente",
            'days'             => $request->days,
            'daily_rate'       => $request->daily_rate,
            'total_amount'     => $request->total_amount,
        ]);

        // Enviar WhatsApp
        $msg = "Olá {$customer->name}, a sua reserva foi recebida com sucesso! ✅\n".
               "Código da reserva: {$booking->booking_code}\n".
               "Data de início: {$booking->start_date}\n".
               "Data de término: {$booking->end_date}\n".
               "Valor total: {$booking->total_amount} KZ\n".
               "Obrigado por escolher os nossos serviços.";

        $this->sendWhatsAppMessage($customer->phone, $msg);

        return redirect()->route('success', $booking->booking_code)
            ->with('success', 'Reserva realizada com sucesso! Verifique o seu Whatsapp: '.$customer->phone);
    }

    public function sendWhatsAppMessage($to, $message)
    {
        $token = env('WHATSAPP_TOKEN');
        $phoneId = env('WHATSAPP_PHONE_ID');
        
        

<<<<<<< HEAD
=======

>>>>>>> 0c0d639e2b3564b1ea7d456441852b969d6de45c
        $response = Http::withToken($token)->post("https://graph.facebook.com/v22.0/{$phoneId}/messages", [
            'messaging_product' => 'whatsapp',
            'to'   => $to,
            'type' => 'text',
            'text' => ['body' => $message],
        ]);
        
        // dd($response->json());

        return $response->json();
    }
}
