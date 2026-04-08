@extends('layouts.app')

@section('content')

<h2>Crear Usuario</h2>

<form action="{{ route('usuarios.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<button class="btn btn-success">
Guardar
</button>

</form>

@endsection