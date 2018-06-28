<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MMRDato;
use DB;

class MMRregistrarController extends Controller
{
    public function guardar(Request $request){

    	$datos = new MMRDato;
    	$datos->name = $request->name;
    	$datos->apPaterno = $request->apPaterno;
    	$datos->apMaterno = $request->apMaterno;
    	$datos->phone = $request->phone;
    	$datos->email = $request->email;
    	$datos->sex = $request->sex;
    	$datos->age = $request->age;
    	$datos->password = $request->password;

    	$datos->save();

    	 return "Datos Guardados Correctamente";
	   	
    }

    public function guardarDos(Request $request){

    	$nombre = $request->name;
    	$apPaterno = $request->apPaterno;
    	$apMaterno = $request->apMaterno;
    	$phone = $request->phone;
    	$email = $request->email;
    	$sex = $request->sex;
    	$age = $request->age;
    	$password = $request->password;

    	DB::table('m_m_r_datos')->insert([
    		'name'=> $nombre,
    		'apPaterno'=>$apPaterno,
    		'apMaterno'=>$apMaterno,
    		'phone' => $phone,
    		'email' =>$email,
    		'sex' => $sex,
    		'age'=>$age,
    		'password' => $password
    	]);

    	return "Datos insertados correctamente";

    }

    public function guardarTres(Request $request){

    	$datos = new MMRDato;
    	$datos->fill($request->all());
    	$datos->save();

    	return "Datos guardados Correctamente 3";
    }
}
