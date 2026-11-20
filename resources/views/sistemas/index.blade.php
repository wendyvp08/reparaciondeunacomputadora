@extends('layouts.app')
@section('titulo','Sistemas operativos')
@section('contenido')
<h1>Sistemas operativos disponibles</h1>
<table>
<thead><tr><th>Sistema</th><th>Familia</th><th>Versión</th><th>Tamaño</th><th></th></tr></thead>
<tbody>
@foreach($sistemas as $s)
<tr><td>{{ $s->nombre }}</td><td>{{ $s->familia }}</td><td>{{ $s->version }}</td><td>{{ $s->tamano }}</td>
<td><a href="{{ route('sistemas.ver',$s->id) }}">Detalle</a></td></tr>
@endforeach
</tbody>
</table>
<h2>Guías de descarga e instalación</h2>
<ul>
<li><a href="{{ route('windows') }}">Cómo descargar Windows</a></li>
<li><a href="{{ route('linux') }}">Cómo descargar Linux</a></li>
<li><a href="{{ route('usbbooteable') }}">Crear USB booteable</a></li>
<li><a href="{{ route('instalarwindows') }}">Instalar Windows</a></li>
<li><a href="{{ route('instalarlinux') }}">Instalar Linux</a></li>
<li><a href="{{ route('bios') }}">Entrar a la BIOS</a></li>
<li><a href="{{ route('particiones') }}">Particiones</a></li>
</ul>
@endsection