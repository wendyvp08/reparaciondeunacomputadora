@extends('layouts.app')
@section('titulo','Contacto')
@section('contenido')
<h1>Contacto</h1>
<dl>
<dt>Correo</dt><dd>soporte@Cetis86.com</dd>
<dt>Horario</dt><dd>Lunes a viernes de 9 a 18 horas</dd>
<dt>Consultas</dt><dd><a href="{{ route('consultas.crear') }}">Envía tu problema aquí</a></dd>
</dl>
@endsection