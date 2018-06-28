<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LEGDato extends Model
{
    protected $fillable = ['name','apPaterno','apMaterno','phone','email','sex','age','password'];
}
