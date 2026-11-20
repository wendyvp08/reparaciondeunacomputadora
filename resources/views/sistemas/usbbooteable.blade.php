
@extends('layouts.app')
@section('titulo','USB booteable')
@section('contenido')

<h1>Crear una USB booteable</h1>

<img class="imagen lado" src="{{ asset('imagenes/usb.svg') }}" alt="Memoria USB">

<h2>¿Qué es una USB booteable?</h2>
<p>
Una USB booteable es una memoria que contiene los archivos
de instalación de un sistema operativo y permite arrancar
una computadora desde ella. Se utiliza principalmente para
instalar Windows, Linux, realizar reparaciones y recuperar
un sistema operativo.
</p>

<div class="limpiar"></div>

<h2>¿Para qué sirve?</h2>
<ul>
<li>Instalar un sistema operativo desde cero.</li>
<li>Reinstalar Windows o Linux.</li>
<li>Reparar problemas de inicio de una computadora.</li>
<li>Probar una distribución Linux sin instalarla.</li>
<li>Realizar tareas de mantenimiento del equipo.</li>
<li>Ejecutar herramientas de diagnóstico.</li>
</ul>

<h2>Materiales necesarios</h2>
<ul>
<li>Una memoria USB de 8 GB o más.</li>
<li>Una computadora con Windows.</li>
<li>Un archivo ISO del sistema operativo.</li>
<li>Un programa para crear la USB booteable.</li>
<li>Conexión a internet para descargar los archivos.</li>
</ul>

<div class="peligro">
<strong>Se borrará todo el contenido de la memoria.</strong>
Copia antes lo que necesites guardar y verifica que hayas
seleccionado la USB correcta.
</div>

<h2>Programas para crear una USB booteable</h2>
<table>
<thead>
<tr>
<th>Programa</th>
<th>Función</th>
<th>Sitio oficial</th>
</tr>
</thead>
<tbody>
<tr>
<td>Rufus</td>
<td>Crear USB de arranque fácilmente.</td>
<td>rufus.ie</td>
</tr>
<tr>
<td>Ventoy</td>
<td>Utilizar varias imágenes ISO en una USB.</td>
<td>ventoy.net</td>
</tr>
<tr>
<td>balenaEtcher</td>
<td>Grabar imágenes de sistemas operativos.</td>
<td>etcher.balena.io</td>
</tr>
</tbody>
</table>

<h2>Con Rufus (Windows)</h2>
<ol>
<li>Descarga Rufus desde su sitio oficial, rufus.ie.</li>
<li>Conecta una memoria USB de 8 GB o más.</li>
<li>Abre el programa Rufus.</li>
<li>En el apartado Dispositivo, selecciona tu memoria USB.</li>
<li>Pulsa <em>Seleccionar</em> y busca el archivo ISO del sistema operativo.</li>
<li>Comprueba las opciones de configuración.</li>
<li>Selecciona GPT para equipos modernos con UEFI o MBR para equipos antiguos con BIOS tradicional.</li>
<li>Pulsa el botón <em>Empezar</em>.</li>
<li>Confirma el aviso de eliminación de datos.</li>
<li>Espera a que el programa termine de copiar y preparar los archivos.</li>
<li>Cuando aparezca el estado de preparado, puedes retirar la memoria de forma segura.</li>
</ol>

<h2>¿Cuál esquema elegir?</h2>
<table>
<thead>
<tr>
<th>Esquema</th>
<th>Cuándo usarlo</th>
</tr>
</thead>
<tbody>
<tr>
<td>GPT con UEFI</td>
<td>Equipos modernos compatibles con UEFI.</td>
</tr>
<tr>
<td>MBR con BIOS</td>
<td>Equipos antiguos que utilizan BIOS tradicional.</td>
</tr>
</tbody>
</table>

<h2>¿Cómo comprobar que funciona?</h2>
<ol>
<li>Conecta la USB a la computadora donde deseas utilizarla.</li>
<li>Reinicia el equipo.</li>
<li>Entra al menú de arranque utilizando la tecla correspondiente.</li>
<li>Selecciona la memoria USB.</li>
<li>Comprueba que aparezca el menú de instalación del sistema operativo.</li>
</ol>

<h2>Ventajas de una USB booteable</h2>
<ul>
<li>Es fácil de transportar.</li>
<li>Permite instalar sistemas operativos sin utilizar DVD.</li>
<li>Facilita el mantenimiento de computadoras.</li>
<li>Se puede reutilizar después de formatearla.</li>
<li>Permite trabajar con diferentes herramientas de recuperación.</li>
</ul>

<div class="consejo">
<strong>Otra opción:</strong> Ventoy permite guardar varias ISO en la misma USB y elegir cuál arrancar. Es muy útil si instalas con frecuencia.
</div>

<h2>Recomendaciones</h2>
<ul>
<li>Descarga las imágenes ISO desde páginas oficiales.</li>
<li>Utiliza una memoria USB en buen estado.</li>
<li>No desconectes la memoria mientras se está preparando.</li>
<li>Comprueba que el esquema de partición sea compatible con el equipo.</li>
<li>Verifica que la memoria contenga el instalador antes de utilizarla.</li>
</ul>

<h2>Conclusión</h2>
<p>
Crear una USB booteable es un procedimiento importante
para instalar sistemas operativos y realizar mantenimiento
a una computadora. Programas como Rufus, Ventoy y
balenaEtcher facilitan este proceso y permiten preparar
una memoria de arranque de manera sencilla.
</p>

<p>
Siguiente:
<a href="{{ route('bios') }}">Entrar a la BIOS</a>
y luego
<a href="{{ route('instalarwindows') }}">Instalar Windows</a>
o
<a href="{{ route('instalarlinux') }}">Instalar Linux</a>.
</p>

@endsection
