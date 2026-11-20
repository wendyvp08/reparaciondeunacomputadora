@extends('layouts.app')
@section('titulo',$sistema->nombre)
@section('contenido')
<h1>{{ $sistema->nombre }}</h1>
<dl>
<dt>Familia</dt><dd>{{ $sistema->familia }}</dd>
<dt>Versión</dt><dd>{{ $sistema->version }}</dd>
<dt>Tamaño aproximado</dt><dd>{{ $sistema->tamano }}</dd>
<dt>Sitio oficial</dt><dd>{{ $sistema->sitio }}</dd>
</dl>
<p>Escribe el sitio en tu navegador y entra a la sección <strong>Descargas</strong>. Descarga siempre de la página oficial.</p>
<p><a href="{{ route('sistemas.index') }}">Volver</a></p>
@endsection