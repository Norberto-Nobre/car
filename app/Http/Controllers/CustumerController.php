<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Http;


class CustumerController extends Controller
{

    public function index(){

    }

    public function store(Request $request): RedirectResponse
    {
        $values['name'] = $request->name;
        $values['email'] = $request->email;
        $values['gender'] = $request->gender;
        $values['phone'] = $request->phone;
        $values['address'] = $request->address;
        $values['password'] = "default";
        $values['date_of_birth'] = $request->date_of_birth;

        $customer = Customer::create($values);
        $custumer_id = $customer->id;


        $data['customer_id'] = $custumer_id;
        $data['vehicle_id'] = $request->vehicle_id;
        $data['pickup_office_id'] = $request->pickup_office_id;
        $data['return_office_id'] = $request->return_office_id;
        $data['province_id'] = $request->province_id;
        $data['booking_code'] = rand(00,99).rand(00,99);
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['status'] = "pendente";
        $data['days'] = $request->days;
        $data['daily_rate'] = $request->daily_rate;
        $data['total_amount'] = $request->total_amount;

        $booking = Booking::create($data);

        // 🔹 Enviar WhatsApp ao cliente
        $msg = "Olá {$customer->name}, a sua reserva foi recebida com sucesso! ✅\n".
               "Código da reserva: {$booking->booking_code}\n".
               "Data de início: {$booking->start_date}\n".
               "Data de término: {$booking->end_date}\n".
               "Valor total: {$booking->total_amount} KZ\n".
               "Obrigado por escolher os nossos serviços.";

        $this->sendWhatsAppMessage($customer->phone, $msg);


        return redirect()->route('success', $booking->booking_code)
        ->with('success', 'Reserva realizada com sucesso! Verifique o seu Whatsapp: '.$values['phone'].'');
    }

     public function sendWhatsAppMessage($to, $message)
    {
        $token = env('WHATSAPP_TOKEN');
        $phoneId = env('WHATSAPP_PHONE_ID');

        $response = Http::withToken($token)->post("https://graph.facebook.com/v19.0/{$phoneId}/messages", [
            'messaging_product' => 'whatsapp',
            'to' => $to, // Ex: 244923456789
            'type' => 'text',
            'text' => [
                'body' => $message,
            ],
        ]);

        return $response->json(); // Para debug/log
    }

}


