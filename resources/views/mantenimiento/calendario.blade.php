@extends('layouts.app')
@section('titulo','Calendario')
@section('contenido')
<h1>Calendario de mantenimiento</h1>
<table>
<thead><tr><th>Frecuencia</th><th>Tarea</th></tr></thead>
<tbody>
<tr><td>Cada semana</td><td>Limpiar teclado y pantalla</td></tr>
<tr><td>Cada mes</td><td>Actualizar sistema y antivirus</td></tr>
<tr><td>Cada 6 meses</td><td>Limpieza interna con aire comprimido</td></tr>
<tr><td>Cada 2 años</td><td>Cambiar pasta térmica</td></tr>
</tbody>
</table>
@endsection