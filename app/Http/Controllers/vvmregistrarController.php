<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\vvmdato;

class vvmregistrarController extends Controller
{
	
	public function guardarUno(Request $request) {
		$datos = new vvmdato;
		
		$datos->name      =$request->name;
		$datos->apPaterno =$request->apPaterno;
		$datos->apMaterno =$request->apMaterno;
		$datos->phone     =$request->phone;
		$datos->email     =$request->email;
		$datos->sex       =$request->sex; 
		$datos->age       =$request->age;
		$datos->password  =$request->password;
						
		$datos->save();
		
		return "Datos guardados correctamente";
		//return $request->all();
	}

	public function guardarDos(Request $request) {
		$datos = new vvmdato;
		
		$name      =$request->name;
		$apPaterno =$request->apPaterno;
		$apMaterno =$request->apMaterno;
		$phone     =$request->phone;
		$email     =$request->email;
		$sex       =$request->sex; 
		$age       =$request->age;
		$password  =$request->password;
				
		DB::table('vvmdatos')->insert([
		   'name'     => $name,
		   'apPaterno'=> $apPaterno,
		   'apMaterno'=> $apMaterno,
		   'phone'    => $phone,
		   'email'    => $email,
		   'sex'      => $sex,
		   'age'      => $age,
		   'password' => $password
		]);
	}
	
	public function guardarTres(Request $request) {
		$datos = new vvmdato;
		
		$datos->fill($request->all());
		$datos->save();
		
		return "Datos guardados correctamente Tres";
	}
}
