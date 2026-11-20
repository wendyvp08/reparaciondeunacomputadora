@extends('layouts.app')
@section('titulo','Síntomas')
@section('contenido')
<h1>Síntomas comunes</h1>
<table>
<thead><tr><th>Síntoma</th><th>Causa probable</th><th>Solución</th></tr></thead>
<tbody>
<tr><td>No enciende</td><td>Fuente o cable</td><td>Probar otra fuente o cable</td></tr>
<tr><td>Se apaga solo</td><td>Sobrecalentamiento</td><td>Limpiar y cambiar pasta térmica</td></tr>
<tr><td>Pantalla negra</td><td>RAM mal asentada</td><td>Reinsertar o cambiar la RAM</td></tr>
<tr><td>Muy lento</td><td>Disco lleno o HDD viejo</td><td>Liberar espacio o instalar SSD</td></tr>
<tr><td>Ruido de clics</td><td>Disco dañado</td><td>Respaldar y cambiar el disco</td></tr>
</tbody>
</table>
@endsection