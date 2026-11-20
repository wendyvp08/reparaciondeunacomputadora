@extends('layouts.app')
@section('titulo','Inicio')
@section('contenido')
@php
$imagenes = ['Hardware' => 'discoduro', 'Mantenimiento' => 'mantenimiento', 'Software' => 'windows'];
@endphp
<section class="hero">
<img src="{{ asset('imagenes/portada.svg') }}" alt="Computadora de escritorio">
<h1>Aprende a reparar tu computadora</h1>
<p>Guías paso a paso para cambiar piezas, dar mantenimiento e instalar Windows o Linux, explicadas para principiantes.</p>
<a class="boton" href="{{ route('guias.index') }}">Ver todas las guías</a>
<a class="boton" href="{{ route('seguridad') }}">Empezar con seguridad</a>
</section>

<div class="dato"><strong>{{ $totalguias }}</strong><br>guías disponibles</div>
<div class="dato"><strong>{{ $totalsistemas }}</strong><br>sistemas operativos</div>
<div class="dato"><strong>{{ $totalconsultas }}</strong><br>consultas atendidas</div>
<div class="limpiar"></div>

<h2>Ruta recomendada para principiantes</h2>
<ol>
<li>Lee las <a href="{{ route('seguridad') }}">reglas de seguridad</a> antes de abrir cualquier equipo.</li>
<li>Aprende a <a href="{{ route('diagnostico') }}">diagnosticar la falla</a> para no cambiar piezas que están bien.</li>
<li>Haz un <a href="{{ route('mantenimiento') }}">mantenimiento preventivo</a>: resuelve muchos problemas sin gastar.</li>
<li>Si hace falta, sigue la guía de <a href="{{ route('reparaciones') }}">reparación</a> de la pieza.</li>
<li>Reinstala el sistema con la guía de <a href="{{ route('sistemas.index') }}">sistemas operativos</a>.</li>
</ol>

<h2>Guías recientes</h2>
@foreach($guias as $guia)
<article class="tarjeta">
<img src="{{ asset('imagenes/'.($imagenes[$guia->categoria->nombre] ?? 'portada').'.svg') }}" alt="{{ $guia->titulo }}">
<div class="texto">
<h3>{{ $guia->titulo }}</h3>
<p>{{ $guia->resumen }}</p>
<small>{{ $guia->categoria->nombre }} | {{ $guia->nivel }} | {{ $guia->minutos }} minutos</small><br>
<a href="{{ route('guias.ver',$guia->id) }}">Ver guía completa</a>
</div>
</article>
@endforeach
<div class="limpiar"></div>

<div class="consejo">
<strong>Regla de oro:</strong> antes de comprar una pieza, confirma el modelo exacto de tu equipo. Comprar una pieza incompatible es el error más caro y más común.
</div>
@endsection