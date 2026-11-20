@extends('layouts.app')
@section('titulo','Gracias')
@section('contenido')
<h1>¡Gracias por tu consulta!</h1>
<p>Recibimos tu mensaje y te responderemos pronto.</p>
<p><a href="{{ route('consultas.index') }}">Ver todas las consultas</a> | <a href="{{ route('inicio') }}">Ir al inicio</a></p>
@endsection