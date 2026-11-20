@extends('layouts.app')
@section('titulo','Acerca de')
@section('contenido')
<h1>Acerca de este sitio</h1>
<p>Proyecto creado por un equipo de tres personas para enseñar a reparar computadoras.</p>
<blockquote>Prevenir cuesta menos que reparar.</blockquote>
<p>Encontrarás <a href="{{ route('guias.index') }}">guías</a>, descargas de sistemas operativos y un formulario de ayuda técnica.</p>
@endsection