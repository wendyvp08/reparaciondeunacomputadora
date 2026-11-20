@extends('layouts.app')
@section('titulo','Temperaturas')
@section('contenido')
<h1>Temperaturas del procesador</h1>
<table>
<thead><tr><th>Estado</th><th>Rango</th><th>Qué hacer</th></tr></thead>
<tbody>
<tr><td>Reposo normal</td><td>30 a 50 grados</td><td>Nada</td></tr>
<tr><td>Carga normal</td><td>60 a 80 grados</td><td>Vigilar</td></tr>
<tr><td>Alta</td><td>85 a 95 grados</td><td>Limpiar y cambiar pasta</td></tr>
</tbody>
</table>
<p>Si se acerca a 100 grados, apaga el equipo. Revisa la guía de <a href="{{ route('pastatermica') }}">pasta térmica</a>.</p>
@endsection