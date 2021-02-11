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

    public function modelos($marca=""){
        $modelos = array(
            array('codigo' =>46,'modelo'=>"AGILE",'descripcion'=>"AGILE"),
            array('codigo' =>47,'modelo'=>"ASTRA",'descripcion'=>"ASTRA"),

        );
        return response()->json($modelos);
          
    }

    public function anios($marca="",$modelo=""){
        $anios = array(
            array('codigo' =>"2010",'descripcion'=>"2010"),
            array('codigo' =>"2016",'descripcion'=>"2016"),

        );

        return response()->json($anios);
           
    }



    public function subModelos($marca="",$modelo="",$anio=""){
        $submodelos = array(
            array(
                'codigo' =>10,
                'version'=>"AGILE 1.4 LS L/14",
                'codigoInfoAuto'=>120462,
                'codigoMarca'=>12,
                'codigoModelo'=>462,
                'codigoSubModelo'=>1,
                'sumaAsegurada'=>"165.000,00"
            ),
            array(
                'codigo' =>10,
                'version'=>"AGILE 1.4 LT L/14",
                'codigoInfoAuto'=>120462,
                'codigoMarca'=>12,
                'codigoModelo'=>463,
                'codigoSubModelo'=>1,
                'sumaAsegurada'=>"185.000,00"
            ),

        );
        return response()->json($submodelos);
           
    }

    
    public function tipoPersona(){
        $tipo_persona = array(
            array('codigo' =>1,'descripcion'=>"Persona fisica"),
            array('codigo' =>2,'descripcion'=>"Persona jurídica"),

        );

        return response()->json($tipo_persona);
           
    }

    public function codigoPostal($rama="",$localidad="CAPITAL FEDERAL"){
        $codigo_postal = array(
            array('codigoRama' =>4,'codigoPostal'=>"1186",'subCodigoPostal'=>1,'localidad'=>'Capital Federal'),
            array('codigoRama' =>4,'codigoPostal'=>"3600",'subCodigoPostal'=>1,'localidad'=>'Formosa'),
        );

        return response()->json($codigo_postal);           
    }

    public function modoFacturacion($rama="",$plan_comercial=""){
        $modo_facturacion = array(
            array('codigo' =>"01",'descripcion'=>"ANUAL CON REFACTURACION MENSUAL",'codigoRama'=>4,'planComercial'=>'GALE'),
            array('codigo' =>"02",'descripcion'=>"ANUAL UN SOLO PAGO",'codigoRama'=>4,'planComercial'=>'GALE'),
        );
        return response()->json($modo_facturacion);           
    }

    public function condicionPago($rama="",$modo_facturacion=""){
        $condiciones = array(
            array('codigo' =>"001",'descripcion'=>"1 CUOTA",'codigoRama'=>4,'modoFacturacion'=>'01'),
            array('codigo' =>"002",'descripcion'=>"2 CUOTA",'codigoRama'=>4,'modoFacturacion'=>'01'),
        );
        return response()->json($condiciones);           
    }

    public function formaPago($rama="",$modo_facturacion="",$plan_comercial=""){
        $formas = array(
            array('codigo' =>"4",'descripcion'=>"CBU",'planComercial'=>'GALE','modoFacturacion'=>'01','codigoRama'=>4),
            array('codigo' =>"3",'descripcion'=>"TARJETA DE CREDITO",'planComercial'=>'GALE','modoFacturacion'=>'01','codigoRama'=>4),

        );
        return response()->json($formas);           
    }

    public function equipoRastreo(){
        $equipos = array(
            array('codigo' =>"041",'descripcion'=>"ITURAN DE ARGENTINA"),
            array('codigo' =>"028",'descripcion'=>"LO JACK")
        );
        return response()->json($equipos);           
    }

    public function clausulas(){
        $equipos = array(
            array('codigo' =>"10",'descripcion'=>"CLAUSULA DE AJUSTE AUTOMATICO 10%"),
            array('codigo' =>"20",'descripcion'=>"CLAUSULA DE AJUSTE AUTOMATICO 20%"),
            array('codigo' =>"30",'descripcion'=>"CLAUSULA DE AJUSTE AUTOMATICO 30%"),
           
        );
        return response()->json($equipos);           
    }


}
