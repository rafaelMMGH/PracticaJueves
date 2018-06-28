<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fsrDato;  //  acceder a la tabla atravez del modelo rfsdato
use DB; //Necesario para la opcion guardarDos

class fsrregistrarController extends Controller
{
    //guarda los datos de la vista registro.blade.php en la tabla de la base de datos bdjueves
    public function guardar(request $request){
        //return "estamos apunto de regisgtrar datos";	
    	//return $request->all();
    	$datos= new fsrDato;

    	$datos->name= $request->name;
		$datos->apPaterno= $request->apPaterno;    	
		$datos->apMaterno= $request->apMaterno;
		$datos->phone= $request->phone;
		$datos->email= $request->email;
		$datos->sex= $request->sex;		
		$datos->age= $request->age;		
		$datos->password= $request->password;

		$datos->save();
		return "Datos guardados Correctamente!!!!";

    }

    //opcion de guardar cuando ya existe mi base de datos
   public function guardarDos(request $request){
        //return "estamos apunto de regisgtrar datos";	
    	//return $request->all();
    	$datos= new fsrDato;

    	$name= $request->name;
		$apPaterno= $request->apPaterno;    	
		$apMaterno= $request->apMaterno;
		$phone= $request->phone;
		$email= $request->email;
		$sex= $request->sex;		
		$age= $request->age;		
		$password= $request->password;
		
		DB::table('fsr_datos')->insert([
		'name'=>$name,
		'apPaterno'=>$apPaterno,
		'apMaterno'=>$apMaterno,
		'phone'=>$phone,
		'email'=>$email,
		'sex'=>$sex,
		'age'=>$age, 
		'password'=>$password
		]);

		return "Datos guardados Correctamente 2!!!!";

    }



 //opcion de guardar cuando ya existe mi base de datos
   public function guardarTres(request $request){
    	
    	$datos= new fsrDato;

    	$datos->fill($request->all());

    	$datos->save();

		return "Datos guardados Correctamente 3!!!!";

    }


}
