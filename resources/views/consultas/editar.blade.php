@extends('layouts.app')
@section('titulo','Editar consulta')
@section('contenido')
<h1>Editar consulta {{ $consulta->id }}</h1>
@if($errors->any())
<div class="error"><ul>
@foreach($errors->all() as $e)
<li>{{ $e }}</li>
@endforeach
</ul></div>
@endif
<form method="POST" action="{{ route('consultas.actualizar',$consulta->id) }}">
@csrf
@method('PUT')
<label>Nombre</label>
<input type="text" name="nombre" value="{{ old('nombre',$consulta->nombre) }}">
<label>Correo</label>
<input type="email" name="correo" value="{{ old('correo',$consulta->correo) }}">
<label>Categoría</label>
<select name="categoriaid">
@foreach($categorias as $c)
<option value="{{ $c->id }}" @selected(old('categoriaid',$consulta->categoriaid)==$c->id)>{{ $c->nombre }}</option>
@endforeach
</select>
<label>Equipo</label>
<input type="text" name="equipo" value="{{ old('equipo',$consulta->equipo) }}">
<label>Problema</label>
<textarea name="problema" rows="5">{{ old('problema',$consulta->problema) }}</textarea>
<label>Estado</label>
<select name="estado">
<option value="Pendiente" @selected($consulta->estado=='Pendiente')>Pendiente</option>
<option value="Atendida" @selected($consulta->estado=='Atendida')>Atendida</option>
</select>
<button type="submit">Guardar cambios</button>
</form>
@endsection