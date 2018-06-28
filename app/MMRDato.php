<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MMRDato extends Model
{

	protected $table = 'MMRtable'

	protected $guarded=['created_at','updated_at'];

    protected $fillable =['name','apPaterno','apMaterno','phone','email','sex','age','password']; 
}
