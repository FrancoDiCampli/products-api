<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class DataController extends Controller
{

    public function marcas(){
        $marcas = array(
            array('codigo' =>"11",'descripcion'=>"CITROEN"),
            array('codigo' =>"12",'descripcion'=>"CHEVROLET"),

        );

        return response()->json($marcas);
           
    }


}
