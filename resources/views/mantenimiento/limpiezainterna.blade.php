@extends('layouts.app')
@section('titulo','Limpieza interna')
@section('contenido')
<h1>Limpieza interna</h1>
<img class="imagen lado" src="{{ asset('imagenes/mantenimiento.svg') }}" alt="Ilustración">
<p>Lee antes la guía de <a href="{{ route('seguridad') }}">seguridad</a>.</p>
<ol>
<li>Apaga, desconecta y abre el gabinete.</li>
<li>Sujeta las aspas del ventilador y sopla aire comprimido.</li>
<li>Limpia el disipador y las rejillas.</li>
<li>Retira la RAM y limpia sus contactos con alcohol isopropílico.</li>
<li>Revisa los cables y cierra el equipo.</li>
</ol>
<p><mark>No uses aspiradora común</mark>: genera estática.</p>
@endsection