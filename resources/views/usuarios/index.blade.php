@extends('layouts.app')

@section('content')

<a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">
Nuevo Usuario
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>Acciones</th>
</tr>

@foreach($usuarios as $usuario)

<tr>
<td>{{ $usuario->id }}</td>
<td>{{ $usuario->nombre }}</td>
<td>{{ $usuario->email }}</td>

<td>

<a href="{{ route('usuarios.show',$usuario) }}" class="btn btn-info">
Ver
</a>

<a href="{{ route('usuarios.edit',$usuario) }}" class="btn btn-warning">
Editar
</a>

<form action="{{ route('usuarios.destroy',$usuario) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger">
Eliminar
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection