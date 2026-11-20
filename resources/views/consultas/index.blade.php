@extends('layouts.app')
@section('titulo','Consultas')
@section('contenido')
<h1>Consultas recibidas</h1>
<p><a class="boton" href="{{ route('consultas.crear') }}">Nueva consulta</a></p>
<table>
<thead><tr><th>Fecha</th><th>Nombre</th><th>Categoría</th><th>Equipo</th><th>Estado</th><th>Acciones</th></tr></thead>
<tbody>
@foreach($consultas as $c)
<tr>
<td>{{ $c->fecha }}</td>
<td>{{ $c->nombre }}</td>
<td>{{ $c->categoria->nombre }}</td>
<td>{{ $c->equipo }}</td>
<td>{{ $c->estado }}</td>
<td>
<a href="{{ route('consultas.ver',$c->id) }}">Ver</a> |
<a href="{{ route('consultas.editar',$c->id) }}">Editar</a>
<form method="POST" action="{{ route('consultas.eliminar',$c->id) }}">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection