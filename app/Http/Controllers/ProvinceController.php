<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    public function taxas($id)
    {
        $province = DB::table('provinces')->where('id', $id)->first();

        if (!$province) {
            return response()->json([], 404);
        }

        return response()->json([
            'taxa_abastecimento' => $province->refueling_tax,
            'taxa_motorista'     => $province->driver_tax,
        ]);
    }
}
