@extends('layouts.app')
@section('titulo','Categorías')
@section('contenido')
<h1>Categorías</h1>
@foreach($categorias as $c)
<article class="tarjeta">
<h3>{{ $c->nombre }}</h3>
<p>{{ $c->descripcion }}</p>
<small>{{ $c->guias_count }} guías</small><br>
<a href="{{ route('categorias.ver',$c->id) }}">Abrir</a>
</article>
@endforeach
@endsection