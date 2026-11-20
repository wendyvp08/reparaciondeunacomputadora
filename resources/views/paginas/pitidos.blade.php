@extends('layouts.app')
@section('titulo','Pitidos')
@section('contenido')
<h1>Códigos de pitidos de la BIOS</h1>
<p>Los códigos varían según el fabricante. Estos son los más comunes.</p>
<table>
<thead><tr><th>Pitidos</th><th>Significado</th></tr></thead>
<tbody>
<tr><td>1 corto</td><td>Arranque normal</td></tr>
<tr><td>Continuos</td><td>Problema de RAM o fuente</td></tr>
<tr><td>1 largo y 2 cortos</td><td>Falla de video</td></tr>
<tr><td>3 cortos</td><td>Error de memoria</td></tr>
</tbody>
</table>
@endsection