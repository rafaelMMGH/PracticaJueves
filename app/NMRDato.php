<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NMRDato extends Model
{
    protected $fillable=['name','apPaterno','apMaterno','phone','email','sex','age','password'];
}
