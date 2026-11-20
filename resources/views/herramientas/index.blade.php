@extends('layouts.app')
@section('titulo','Herramientas')
@section('contenido')
<h1>Herramientas necesarias</h1>
<img class="imagen lado" src="{{ asset('imagenes/herramientas.svg') }}" alt="Ilustración">
<table>
<thead><tr><th>Herramienta</th><th>Para qué sirve</th></tr></thead>
<tbody>
@foreach($herramientas as $h)
<tr><td><a href="{{ route('herramientas.ver',$h->id) }}">{{ $h->nombre }}</a></td><td>{{ $h->descripcion }}</td></tr>
@endforeach
</tbody>
</table>
@endsection