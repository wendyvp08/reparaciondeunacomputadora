@extends('layouts.app')
@section('titulo',$guia->titulo)
@section('contenido')
<h1>{{ $guia->titulo }}</h1>
<img class="imagen lado" src="{{ asset('imagenes/portada.svg') }}" alt="Ilustración">
<p>{{ $guia->resumen }}</p>
<p>Categoría: <a href="{{ route('categorias.ver',$guia->categoria->id) }}">{{ $guia->categoria->nombre }}</a> | Nivel: <span>{{ $guia->nivel }}</span> | Tiempo: {{ $guia->minutos }} minutos</p>
<h2>Herramientas</h2>
<ul>
@foreach($guia->herramientas as $h)
<li><a href="{{ route('herramientas.ver',$h->id) }}">{{ $h->nombre }}</a></li>
@endforeach
</ul>
<h2>Pasos</h2>
<ol>
@foreach($guia->pasos as $paso)
<li>{{ $paso->instruccion }}</li>
@endforeach
</ol>
<p><a href="{{ route('guias.index') }}">Volver a guías</a></p>
@endsection