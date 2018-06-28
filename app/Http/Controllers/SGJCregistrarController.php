<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SGJC_Dato;   // Permite acceder a la clase que se creo
use DB;


class SGJCregistrarController extends Controller
{
    // Este es el controlador que creo jesus carlos
    public function guardar(Request $request){
        $datos=new SGJC_Dato;
        $datos->name = $request -> name;
        $datos->aPaterno = $request -> aPaterno;
        $datos->aMaterno = $request -> aMaterno;
        $datos->telefono = $request -> telefono;
        $datos-> save();

       // return $request->all();  // Permite visualizar los datos que se estan enviando desde el formulario
    }

    public function guardar2(Request $request){
        $nombre=$request->name;
        $aPaterno=$request->aPaterno;
        $aMaterno=$request ->aMaterno;
        $telefono=$request ->telefono; 
        DB::table('s_g_j_c__datos')->insert([
            'name'=> $nombre,'aPaterno'=>$aPaterno,
            'aMaterno'=>$aMaterno,'telefono'=>$telefono]);
    }

    public function guardar3(Request $request){
        $datos = new SGJC_Dato;
        $datos-> fill($request->all());
        $datos->save();

    }
}
