@extends('layouts.app')
@section('titulo',$categoria->nombre)
@section('contenido')
<h1>{{ $categoria->nombre }}</h1>
<p>{{ $categoria->descripcion }}</p>
<ul>
@foreach($categoria->guias as $g)
<li><a href="{{ route('guias.ver',$g->id) }}">{{ $g->titulo }}</a></li>
@endforeach
</ul>
<p><a href="{{ route('categorias.index') }}">Volver</a></p>
@endsection