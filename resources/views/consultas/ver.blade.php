@extends('layouts.app')
@section('titulo','Consulta')
@section('contenido')
<h1>Consulta número {{ $consulta->id }}</h1>
<dl>
<dt>Nombre</dt><dd>{{ $consulta->nombre }}</dd>
<dt>Correo</dt><dd>{{ $consulta->correo }}</dd>
<dt>Categoría</dt><dd>{{ $consulta->categoria->nombre }}</dd>
<dt>Equipo</dt><dd>{{ $consulta->equipo }}</dd>
<dt>Problema</dt><dd>{{ $consulta->problema }}</dd>
<dt>Estado</dt><dd>{{ $consulta->estado }}</dd>
<dt>Fecha</dt><dd>{{ $consulta->fecha }}</dd>
</dl>
<p><a href="{{ route('consultas.index') }}">Volver</a></p>
@endsection