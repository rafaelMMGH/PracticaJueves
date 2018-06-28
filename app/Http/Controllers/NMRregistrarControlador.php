<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NMRDato;
use DB;
class NMRregistrarControlador extends Controller
{
    public function guardar(Request $request)
    {
    	$dato= new NMRDato;
    	$dato->name=$request->name;
    	$dato->apPaterno=$request->apPaterno;
        $dato->apMaterno=$request->apMaterno;
        $dato->phone=$request->phone;
        $dato->email=$request->email;
        $dato->sex=$request->sex;
        $dato->age=$request->age;
        $dato->password=$request->password;
        $dato->save();
    	return "datos guardados ";
    }
    public function otraopcion(Request $request)
    {
    	
    	$name=$request->name;
    	$apPaterno=$request->apPaterno;
        $apMaterno=$request->apMaterno;
        $phone=$request->phone;
        $email=$request->email;
        $sex=$request->sex;
        $age=$request->age;
        $password=$request->password;
        
        DB::table('n_m_r_datos')->insert([
        		'name'=>$name,
        		'apPaterno'=>$apPaterno,
        		'apMaterno'=>$apMaterno,
        		'phone'=>$phone,
        		'email'=>$email,
        		'sex'=>$sex,
        		'age'=>$age,
        		'password'=>$password

        	]);

    	return "datos guardados  correcta mente ";
    }

    public function otraopciontres(Request $request)
    {
    	$dato= new NMRDato;
        $dato->fill($request->all());
    	$dato->save();

    	return "datos guardados  correcta mente ";
    }
}
