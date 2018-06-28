@extends('layouts.app')

@section('title', 'Sub - Registro ')

@section('content')

<form action="" method="post">
	<div class="row col-md-12">
	<label for="name" class="col-md-2">Nombre: </label>
	<input type="text" name="name" placeholder="Nombre" required="required" class="form-control col-md-7">		
	</div>
	<div class="row col-md-12">
		
	
	<label for="apaPterno" class="col-md-2">Apellido Paterno: </label>
	<input type="text" name="apPaterno" required="required" class="form-control col-md-7">
	</div>
	<div class="row col-md-12">
	<label for="apMaterno" class="col-md-2">Apellido Materno: </label>
	<input type="text" name="apMaterno" required="required" class="form-control col-md-7">
	</div>
	<div class="row col-md-12">
	<label for="phone" class="col-md-2">Telefono: </label>
	<input type="number" name="phone" required="required" class="form-control col-md-7">
	</div>
	<div class="row col-md-12">
	<label for="email" class="col-md-2">Email: </label>
	<input type="email" name="email" required="required" class="form-control col-md-7">
	</div>
	<div class="row col-md-12">
	<label for="sex" class="col-md-2">Sexo: </label>
	<input type="text" name="sex" required="required" class="form-control col-md-7">
	</div>
	<div class="row col-md-12">
	<label for="age" class="col-md-2">Edad: </label>
	<input type="text" name="age"
	required="required" class="form-control col-md-7">
	</div>
	<div class="row col-md-12">
	<label for="password" class="col-md-2">Contraseña: </label>
	<input type="password" name="password" required="required" class="form-control col-md-7">
	</div>
	<div class="row col-md-12 pull-right">
	<input type="submit" value="Registrar" class="btn btn-primary pull-right" >
</form>




@endsection
