
@extends('layouts.app')
@section('titulo','Particiones')
@section('contenido')

<h1>Particiones del disco</h1>

<img class="imagen lado" src="{{ asset('imagenes/discoduro.svg') }}" alt="Ilustración">

<h2>¿Qué es una partición?</h2>
<p>
Una partición es una división lógica de un disco duro o SSD
que permite organizar el espacio de almacenamiento en
diferentes secciones independientes. Cada partición puede
utilizarse para guardar archivos, instalar sistemas operativos
o almacenar información personal.
</p>

<h2>¿Para qué sirven las particiones?</h2>
<ul>
<li>Organizar los archivos y documentos.</li>
<li>Separar el sistema operativo de los datos personales.</li>
<li>Instalar dos sistemas operativos en un mismo equipo.</li>
<li>Facilitar el mantenimiento del almacenamiento.</li>
<li>Administrar mejor el espacio disponible.</li>
</ul>

<h2>Tipos de tablas de particiones</h2>
<table>
<thead>
<tr>
<th>Estilo</th>
<th>Uso</th>
<th>Límite</th>
</tr>
</thead>
<tbody>
<tr>
<td>MBR</td>
<td>Equipos antiguos con BIOS</td>
<td>2 TB aproximadamente</td>
</tr>
<tr>
<td>GPT</td>
<td>Equipos modernos con UEFI</td>
<td>Capacidad muy grande</td>
</tr>
</tbody>
</table>

<h2>Características de MBR</h2>
<ul>
<li>Es un sistema antiguo de particionado.</li>
<li>Permite hasta cuatro particiones primarias.</li>
<li>Admite discos de hasta aproximadamente 2 TB con sectores de 512 bytes.</li>
<li>Se utiliza principalmente con sistemas BIOS tradicionales.</li>
</ul>

<h2>Características de GPT</h2>
<ul>
<li>Es un sistema moderno de particionado.</li>
<li>Permite crear más particiones que MBR.</li>
<li>Admite discos de gran capacidad.</li>
<li>Es compatible con equipos que utilizan UEFI.</li>
<li>Guarda copias de respaldo de la información de particionado.</li>
</ul>

<h2>Tipos de particiones</h2>
<ul>
<li><strong>Primaria:</strong> puede contener un sistema operativo o archivos.</li>
<li><strong>Extendida:</strong> permite crear particiones lógicas dentro de MBR.</li>
<li><strong>Lógica:</strong> se crea dentro de una partición extendida.</li>
<li><strong>EFI:</strong> almacena archivos necesarios para iniciar sistemas mediante UEFI.</li>
<li><strong>Swap:</strong> espacio que Linux puede utilizar como memoria de intercambio.</li>
</ul>

<h2>Ejemplo de distribución del disco</h2>
<p>
Una computadora con un disco de 500 GB puede organizarse
en diferentes particiones para separar el sistema operativo
de los documentos personales.
</p>

<table>
<thead>
<tr>
<th>Partición</th>
<th>Espacio</th>
<th>Función</th>
</tr>
</thead>
<tbody>
<tr>
<td>Sistema</td>
<td>100 GB</td>
<td>Archivos del sistema operativo y programas.</td>
</tr>
<tr>
<td>Datos</td>
<td>400 GB</td>
<td>Documentos, imágenes y archivos personales.</td>
</tr>
</tbody>
</table>

<h2>Recomendaciones</h2>
<ul>
<li>Realiza una copia de seguridad antes de modificar particiones.</li>
<li>Comprueba el espacio disponible en el disco.</li>
<li>Verifica si tu computadora utiliza BIOS o UEFI.</li>
<li>Selecciona el tipo de particionado compatible con tu equipo.</li>
<li>No elimines particiones sin conocer su función.</li>
<li>Consulta las recomendaciones de la distribución Linux que instalarás.</li>
</ul>

<h2>Importancia de las particiones</h2>
<p>
Las particiones permiten administrar de manera organizada
el almacenamiento de una computadora. También facilitan
la instalación de sistemas operativos y la separación
de archivos personales.
</p>

<pre>
Sugerencia: 100 GB para el sistema y el resto para datos.
</pre>

<h2>Conclusión</h2>
<p>
Conocer las particiones del disco es importante para realizar
instalaciones y mantenimiento de computadoras. Los formatos
MBR y GPT permiten organizar el almacenamiento dependiendo
de las características y necesidades del equipo.
</p>

@endsection
