@extends('layouts.app')
@section('titulo','Diagnóstico')
@section('contenido')
<h1>Cómo diagnosticar una falla</h1>
<ol>
<li>¿Enciende? Si no, revisa cable, fuente y botón.</li>
<li>¿Da imagen? Si no, prueba otro monitor o reinserta la RAM.</li>
<li>¿Escucha pitidos? Consulta la <a href="{{ route('pitidos') }}">tabla de pitidos</a>.</li>
<li>¿Arranca el sistema? Si no, revisa el disco.</li>
<li>¿Va lento? Revisa <a href="{{ route('temperaturas') }}">temperaturas</a> y espacio libre.</li>
</ol>
<p>Más ayuda en <a href="{{ route('sintomas') }}">síntomas comunes</a>.</p>
@endsection