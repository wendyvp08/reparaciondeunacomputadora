@extends('layouts.app')
@section('titulo','Guías')
@section('contenido')
<h1>Todas las guías</h1>
<table>
<thead><tr><th>Guía</th><th>Categoría</th><th>Nivel</th><th>Minutos</th><th></th></tr></thead>
<tbody>
@foreach($guias as $guia)
<tr>
<td>{{ $guia->titulo }}</td>
<td>{{ $guia->categoria->nombre }}</td>
<td>{{ $guia->nivel }}</td>
<td>{{ $guia->minutos }}</td>
<td><a href="{{ route('guias.ver',$guia->id) }}">Ver</a></td>
</tr>
@endforeach
</tbody>
</table>
@endsection