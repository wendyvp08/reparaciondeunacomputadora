@extends('layouts.app')
@section('titulo','Cambio de RAM')
@section('contenido')
<h1>Cambio de memoria RAM</h1>
<img class="imagen lado" src="{{ asset('imagenes/ram.svg') }}" alt="Módulo de memoria RAM">
<p>La RAM es la memoria de trabajo del equipo: guarda los programas que estás usando. Si tu equipo se pone lento al abrir varias pestañas o programas a la vez, ampliar la RAM suele ser una solución barata y rápida.</p>
<div class="limpiar"></div>
@include('partials.ficha',['tiempo'=>'10 a 15 minutos','nivel'=>'Fácil','costo'=>'Módulo de 8 GB: de 500 a 900 pesos','herramientas'=>'Pulsera antiestática'])

<h2>Cuánta RAM necesitas</h2>
<table>
<thead><tr><th>Uso</th><th>RAM recomendada</th></tr></thead>
<tbody>
<tr><td>Navegar, ver videos, tareas escolares</td><td>8 GB</td></tr>
<tr><td>Varios programas a la vez, edición ligera</td><td>16 GB</td></tr>
<tr><td>Diseño, video, máquinas virtuales</td><td>32 GB o más</td></tr>
</tbody>
</table>

<h2>Compatibilidad: lo más importante</h2>
<table>
<thead><tr><th>Tipo</th><th>Uso común</th></tr></thead>
<tbody>
<tr><td>DDR3</td><td>Equipos antiguos</td></tr>
<tr><td>DDR4</td><td>Equipos de 2015 a 2021 aproximadamente</td></tr>
<tr><td>DDR5</td><td>Equipos recientes</td></tr>
</tbody>
</table>
<ul>
<li>Las laptops usan módulos pequeños llamados <strong>SODIMM</strong>. Las computadoras de escritorio usan módulos largos llamados <strong>DIMM</strong>.</li>
<li>Para saber el tipo y velocidad que tienes, abre el Administrador de tareas, pestaña Rendimiento, Memoria.</li>
<li>Es mejor instalar módulos iguales: así funcionan en doble canal y rinden más.</li>
<li>Revisa en el manual cuál es la capacidad máxima que acepta tu tarjeta madre.</li>
</ul>

<h2>Paso a paso</h2>
<ol>
<li>Apaga y desconecta el equipo. En laptop, retira también la batería.</li>
<li>Abre la tapa de la RAM o el gabinete.</li>
<li>Ponte la pulsera antiestática.</li>
<li>Abre las pestañas laterales del slot. En laptops, separa los clips metálicos.</li>
<li>Retira el módulo viejo sujetándolo por los bordes.</li>
<li>Alinea la muesca del módulo nuevo con la del slot.</li>
<li>Presiona parejo hasta escuchar un clic en las pestañas.</li>
<li>Cierra, enciende y verifica en el Administrador de tareas que aparece la nueva cantidad.</li>
</ol>

<div class="alerta"><strong>Si no da imagen después del cambio:</strong> apaga, retira el módulo y vuelve a colocarlo. Casi siempre está mal asentado. Si sigue igual, prueba cada módulo por separado y consulta la <a href="{{ route('pitidos') }}">tabla de pitidos</a>.</div>

<h2>Errores comunes</h2>
<ul>
<li>Comprar DDR4 para un equipo DDR3.</li>
<li>Tocar los contactos dorados con los dedos.</li>
<li>Mezclar velocidades distintas: el equipo funcionará a la más lenta.</li>
<li>No presionar hasta el clic final.</li>
</ul>
<p>Relacionado: <a href="{{ route('discoduro') }}">cambio de disco</a> | <a href="{{ route('diagnostico') }}">diagnóstico</a></p>
@endsection