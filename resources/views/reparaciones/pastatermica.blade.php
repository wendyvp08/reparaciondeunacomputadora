@extends('layouts.app')
@section('titulo','Cambio de pasta térmica')
@section('contenido')
<h1>Cómo cambiar la pasta térmica</h1>
<img class="imagen lado" src="{{ asset('imagenes/pastatermica.svg') }}" alt="Pasta térmica">
<p>La pasta térmica es la capa que ayuda a pasar el calor del procesador al disipador. Con los años se seca y pierde efecto: el equipo se calienta, el ventilador suena fuerte y el rendimiento baja.</p>
<div class="limpiar"></div>
@include('partials.ficha',['tiempo'=>'20 a 30 minutos','nivel'=>'Intermedio','costo'=>'Pasta térmica: de 60 a 250 pesos','herramientas'=>'Desarmador, alcohol isopropílico, paño sin pelusa'])

<h2>Señales de que la necesitas</h2>
<ul>
<li>El equipo se apaga solo cuando trabaja o juega.</li>
<li>El ventilador suena muy fuerte todo el tiempo.</li>
<li>El procesador pasa de 85 grados bajo carga normal.</li>
<li>Han pasado más de 3 años desde el último cambio.</li>
</ul>

<h2>Cómo aplicarla</h2>
<table>
<thead><tr><th>Método</th><th>Cómo se hace</th><th>Recomendado para</th></tr></thead>
<tbody>
<tr><td>Punto central</td><td>Una gota del tamaño de un chícharo al centro</td><td>Casi todos los procesadores, el más fácil</td></tr>
<tr><td>Línea</td><td>Una línea delgada a lo largo del procesador</td><td>Procesadores rectangulares</td></tr>
<tr><td>Extendida</td><td>Se esparce con una tarjeta plástica</td><td>Solo si ya tienes experiencia</td></tr>
</tbody>
</table>

<h2>Paso a paso</h2>
<ol>
<li>Apaga el equipo y déjalo enfriar al menos 15 minutos.</li>
<li>Desconecta todo y abre el gabinete.</li>
<li>Retira el disipador girándolo suavemente para despegarlo.</li>
<li>Limpia el procesador y la base del disipador con alcohol isopropílico y un paño sin pelusa.</li>
<li>Espera un minuto a que el alcohol se evapore.</li>
<li>Coloca una gota del tamaño de un chícharo al centro del procesador.</li>
<li>Monta el disipador sin moverlo de lado y aprieta los tornillos en cruz, poco a poco.</li>
<li>Conecta el ventilador, cierra y enciende.</li>
<li>Con un programa como HWMonitor revisa las <a href="{{ route('temperaturas') }}">temperaturas</a>.</li>
</ol>

<div class="consejo">Si cambias el procesador, la pasta se cambia siempre. Es la parte más barata de toda la reparación.</div>

<h2>Errores comunes</h2>
<ul>
<li>Poner demasiada pasta: el exceso aísla el calor y ensucia la tarjeta.</li>
<li>Tocar la pasta con los dedos.</li>
<li>Olvidar quitar el plástico protector del disipador nuevo.</li>
<li>Apretar los tornillos de un solo lado.</li>
</ul>

<h2>Preguntas frecuentes</h2>
<details><summary>¿Sirve la pasta que viene en el disipador?</summary><p>Sí, pero una pasta de mejor calidad baja unos grados más.</p></details>
<details><summary>¿Cada cuánto se cambia?</summary><p>Cada 2 a 4 años, o antes si notas temperaturas altas.</p></details>
<p>Relacionado: <a href="{{ route('procesador') }}">cambio de procesador</a> | <a href="{{ route('limpiezainterna') }}">limpieza interna</a></p>
@endsection