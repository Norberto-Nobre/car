<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

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

        return redirect()->route('success', $booking->booking_code)->with('success', 'Reserva realizada com sucesso! Verifique a sua conta de email: '.$values['email'].'');
    }
}


