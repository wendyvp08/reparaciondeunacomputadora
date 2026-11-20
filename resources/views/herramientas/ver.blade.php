@extends('layouts.app')
@section('titulo',$herramienta->nombre)
@section('contenido')
<h1>{{ $herramienta->nombre }}</h1>
<p>{{ $herramienta->descripcion }}</p>
<h2>Guías que la usan</h2>
<ul>
@foreach($herramienta->guias as $g)
<li><a href="{{ route('guias.ver',$g->id) }}">{{ $g->titulo }}</a></li>
@endforeach
</ul>
@endsection