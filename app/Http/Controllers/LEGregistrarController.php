<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LEGDato;
use DB;

class LEGregistrarController extends Controller
{
    public function guardar(Request $request)
    {
      $datos = new LEGDato;
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

      //return $request->all();
    }
    public function guardarDos(Request $request)
    {
      $nombre = $request->name;
      $apPaterno = $request->apPaterno;
      $apMaterno = $request->apMaterno;
      $phone = $request->phone;
      $email = $request->email;
      $sex = $request->sex;
      $age = $request->age;
      $password = $request->password;

      DB::table('l_e_g_datos')->insert([
        'name'=>$nombre,
        'apPaterno'=>$apPaterno,
        'apMaterno'=>$apMaterno,
        'phone'=>$phone,
        'email'=>$email,
        'sex'=>$sex,
        'age'=>$age,
        'password'=>$password
      ]);
      return "Datos insertados Correctamente";
    }

    public function guardarTres(Request $request)
    {
      $datos = new LEGDato;
      $datos->fill($request->all());
      $datos->save();

      return "Datos ingresados Correctamente";
    }
}
