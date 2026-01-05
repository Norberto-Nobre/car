<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use DateTime;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index(){

    }

    public function reserveData(Request $request)
    {
        $vehicle = $request->vehicle_slug;
        $values['vehicle_slug'] = $request->vehicle_slug;
        $values['pickup_location'] = $request->pickup_location;
        $values['dropoff_location'] = $request->dropoff_location;
        $values['pickup_date'] = $request->pickup_date;
        $values['pickup_time'] = $request->pickup_time;
        $values['dropoff_date'] = $request->dropoff_date;
        $values['dropoff_time'] = $request->dropoff_time;
        $values['out_of_province'] = $request->out_of_province;
        $values['destination_province'] = $request->destination_province;
        $values['dias_province'] = $request->dias_province;
        $data = $values;
        // Validação se a entrega é no escritorio ou não
       $local = is_numeric($values['pickup_location']) ? (int) $values['pickup_location'] : 0;

        // Pegando o nome do escritorio de retirada
        if (is_numeric($values['pickup_location'])) {
            $office = DB::table('offices')->where('id', $values['pickup_location'])->first();
            $pickupLocation = $office ? $office->name : 'Escritório não encontrado';
        } else {
            $pickupLocation = $values['pickup_location'];
        }

        // Pegando o nome do escritorio de entrega
        if (is_numeric($values['dropoff_location'])) {
            $office = DB::table('offices')->where('id', $values['dropoff_location'])->first();
            $dropoffLocation = $office ? $office->name : 'Escritório não encontrado';
        } else {
            $dropoffLocation = $values['dropoff_location'];
        }

        //Validação se selecionou a provincia ou não
        $taxaAbastecimento = 0;
        $taxaMotorista = 0;
        if(!empty($values['out_of_province']) && !empty($values['destination_province'])){
            $province = DB::table('provinces')
            ->where('id', $values['destination_province'])
            ->first();
    //     if ($province) {
    //     if ($request->has('refueling_tax')) {
    //         $taxaAbastecimento = $province->refueling_tax;
    //     }

    //     if ($request->has('driver_tax')) {
    //         $taxaMotorista = $province->driver_tax;
    //     }
    // }
        }else{
            $province = [0];
        }

        //Pegando a taxa da danos próprios
        if ($request->has('danos_proprio')) {
            $damageTax = DB::table('vehicles')
                ->where('slug', $values['vehicle_slug'])
                ->first();
            $damageTax = $damageTax ? $damageTax->damage_tax : 0;
        } else {
            $damageTax = 0;
        }
        // Contagem dos dias
        $dataEntrega = new DateTime($values['pickup_date']);
        $dataDevolucao = new DateTime($values['dropoff_date']);
        $days = $dataEntrega->diff($dataDevolucao);
        $days = $days->days;


        $result= DB::table('vehicles')
            ->join('vehicle_models','vehicles.vehicle_model_id','=','vehicle_models.id')
            ->join('categories','vehicle_models.category_id','=','categories.id')
            ->join('brands','vehicle_models.brand_id','=','brands.id')
            ->select('*','vehicles.id As vehicle_id','vehicles.image As vehicle_image','categories.id As category_id','categories.name As category_name','vehicle_models.id As vehicle_model_id','brands.id As brand_id','brands.name As brand_name','vehicle_models.name As model_name')
            ->where('vehicles.slug','like',"%{$vehicle}%")->get();
        $vehicle = $result[0];

        return view('reserva-detalhes',compact('data','vehicle','province','local', 'pickupLocation','dropoffLocation','days','taxaAbastecimento','taxaMotorista', 'damageTax'));
    }
}


