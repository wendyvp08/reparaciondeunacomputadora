@extends('layouts.app')
@section('titulo','Nueva consulta')
@section('contenido')
<h1>Solicitar ayuda técnica</h1>
@if($errors->any())
<div class="error"><ul>
@foreach($errors->all() as $e)
<li>{{ $e }}</li>
@endforeach
</ul></div>
@endif
<form method="POST" action="{{ route('consultas.guardar') }}">
@csrf
<label>Nombre</label>
<input type="text" name="nombre" value="{{ old('nombre') }}">
<label>Correo</label>
<input type="email" name="correo" value="{{ old('correo') }}">
<label>Categoría del problema</label>
<select name="categoriaid">
@foreach($categorias as $c)
<option value="{{ $c->id }}" @selected(old('categoriaid')==$c->id)>{{ $c->nombre }}</option>
@endforeach
</select>
<label>Equipo</label>
<input type="text" name="equipo" value="{{ old('equipo') }}" placeholder="Ejemplo: laptop HP 2018">
<label>Describe el problema</label>
<textarea name="problema" rows="5">{{ old('problema') }}</textarea>
<button type="submit">Enviar consulta</button>
</form>
@endsection