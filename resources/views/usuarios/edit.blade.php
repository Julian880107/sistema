@extends('layouts.app')

@section('content')

<h2>Editar Usuario</h2>

<form action="{{ route('usuarios.update',$usuario) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" value="{{ $usuario->nombre }}" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" value="{{ $usuario->email }}" class="form-control">
</div>

<button class="btn btn-primary">
Actualizar
</button>

</form>

@endsection