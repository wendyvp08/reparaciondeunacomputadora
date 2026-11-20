@extends('layouts.app')
@section('titulo','Limpieza externa')
@section('contenido')
<h1>Limpieza externa</h1>
<img class="imagen lado" src="{{ asset('imagenes/mantenimiento.svg') }}" alt="Ilustración">
<ul>
<li>Pantalla: paño de microfibra ligeramente húmedo.</li>
<li>Teclado: aire comprimido y cotonetes con alcohol.</li>
<li>Gabinete: paño húmedo, nunca mojado.</li>
<li>Puertos: aire comprimido en ráfagas cortas.</li>
</ul>
<p>Nunca rocíes líquido directo sobre el equipo.</p>
@endsection