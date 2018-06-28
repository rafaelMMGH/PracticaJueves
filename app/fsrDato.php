<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fsrDato extends Model
{
    //

    //agregada para poder usar la funcion guardarTres de fsrregistrarControoller
    //si se usa la funcion guardar o guardarDos estas lineas se deben comentar
	protected $fillable=['name','apPaterno','apMaterno','phone',
						'email','sex','age','password'];
}
