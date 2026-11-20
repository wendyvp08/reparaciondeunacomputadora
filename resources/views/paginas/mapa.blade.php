@extends('layouts.app')
@section('titulo','Mapa del sitio')
@section('contenido')
@php
$enlaces = [
 'inicio'=>'Inicio','acercade'=>'Acerca de','contacto'=>'Contacto','glosario'=>'Glosario','preguntas'=>'Preguntas',
 'seguridad'=>'Seguridad','diagnostico'=>'Diagnóstico','sintomas'=>'Síntomas','pitidos'=>'Pitidos','temperaturas'=>'Temperaturas',
 'repuestos'=>'Repuestos','terminos'=>'Términos','recursos'=>'Recursos','guias.index'=>'Guías','categorias.index'=>'Categorías','herramientas.index'=>'Herramientas','sistemas.index'=>'Sistemas',
 'windows'=>'Descargar Windows','linux'=>'Descargar Linux','usbbooteable'=>'USB booteable','instalarwindows'=>'Instalar Windows',
 'instalarlinux'=>'Instalar Linux','bios'=>'BIOS','particiones'=>'Particiones',
 'mantenimiento'=>'Mantenimiento','limpiezainterna'=>'Limpieza interna','limpiezaexterna'=>'Limpieza externa',
 'mantenimientosoftware'=>'Mantenimiento de software','calendario'=>'Calendario','checklist'=>'Lista de revisión',
 'reparaciones'=>'Reparaciones','discoduro'=>'Disco duro','ram'=>'RAM','procesador'=>'Procesador','pastatermica'=>'Pasta térmica',
 'fuente'=>'Fuente de poder','bateria'=>'Batería','pantalla'=>'Pantalla','teclado'=>'Teclado',
 'consultas.index'=>'Consultas','consultas.crear'=>'Nueva consulta'
];
@endphp
<h1>Mapa del sitio</h1>
<ul>
@foreach($enlaces as $ruta => $texto)
<li><a href="{{ route($ruta) }}">{{ $texto }}</a></li>
@endforeach
</ul>
@endsection