@extends('layouts.app')
@section('titulo','Reparaciones')
@section('contenido')
<h1>Principales reparaciones</h1>
<p>Elige la pieza que quieres cambiar.</p>
<ul>
<li><a href="{{ route('discoduro') }}">Cambio de disco duro</a></li>
<li><a href="{{ route('ram') }}">Cambio de memoria RAM</a></li>
<li><a href="{{ route('procesador') }}">Cambio de procesador</a></li>
<li><a href="{{ route('pastatermica') }}">Cambio de pasta térmica</a></li>
<li><a href="{{ route('fuente') }}">Fuente de poder</a></li>
<li><a href="{{ route('bateria') }}">Batería</a></li>
<li><a href="{{ route('pantalla') }}">Pantalla</a></li>
<li><a href="{{ route('teclado') }}">Teclado</a></li>
</ul>
@endsection