
@extends('layouts.app')
@section('titulo','BIOS')
@section('contenido')

<h1>Cómo entrar a la BIOS y al menú de arranque</h1>

<img class="imagen lado" src="{{ asset('imagenes/portada.svg') }}" alt="Ilustración">

<h2>¿Qué es la BIOS?</h2>
<p>
La BIOS es un sistema básico que se encuentra en la tarjeta madre
de una computadora. Se encarga de iniciar y revisar los componentes
del equipo antes de cargar el sistema operativo. En las computadoras
modernas también se utiliza UEFI, que es una versión más actual.
</p>

<h2>¿Para qué sirve la BIOS?</h2>
<ul>
<li>Configurar los componentes de la computadora.</li>
<li>Revisar el funcionamiento del hardware.</li>
<li>Modificar el orden de arranque.</li>
<li>Configurar la fecha y la hora.</li>
<li>Consultar información del procesador y la memoria RAM.</li>
<li>Administrar algunas opciones de seguridad.</li>
</ul>

<h2>¿Cómo entrar a la BIOS?</h2>
<p>
Para entrar a la BIOS, apaga o reinicia la computadora.
Cuando comience a encender, pulsa repetidamente la tecla
correspondiente a la marca del equipo. Debes hacerlo antes
de que aparezca el logotipo del sistema operativo.
</p>

<h2>Teclas para entrar a la BIOS y al menú de arranque</h2>

<table>
<thead>
<tr>
<th>Marca</th>
<th>BIOS</th>
<th>Menú de arranque</th>
</tr>
</thead>
<tbody>
<tr><td>HP</td><td><kbd>F10</kbd></td><td><kbd>Esc</kbd> y luego <kbd>F9</kbd></td></tr>
<tr><td>Dell</td><td><kbd>F2</kbd></td><td><kbd>F12</kbd></td></tr>
<tr><td>Lenovo</td><td><kbd>F1</kbd> o <kbd>F2</kbd></td><td><kbd>F12</kbd></td></tr>
<tr><td>Acer</td><td><kbd>F2</kbd></td><td><kbd>F12</kbd></td></tr>
<tr><td>Asus</td><td><kbd>F2</kbd> o <kbd>Supr</kbd></td><td><kbd>Esc</kbd> o <kbd>F8</kbd></td></tr>
</tbody>
</table>

<p>
Las teclas pueden cambiar dependiendo del modelo. En algunos
equipos es necesario utilizar la tecla <kbd>Fn</kbd> junto
con una tecla de función.
</p>

<h2>¿Qué es el menú de arranque?</h2>
<p>
Es una opción que permite seleccionar desde qué dispositivo
se iniciará la computadora, sin necesidad de cambiar
permanentemente la configuración de la BIOS.
</p>

<h2>Dispositivos de arranque</h2>
<ul>
<li>Disco duro o SSD.</li>
<li>Memoria USB.</li>
<li>Unidad de DVD, si está disponible.</li>
<li>Arranque mediante red.</li>
</ul>

<h2>Recomendaciones al utilizar la BIOS</h2>
<ul>
<li>No cambies configuraciones si no conoces su función.</li>
<li>Evita modificar opciones de seguridad sin autorización.</li>
<li>Guarda los cambios únicamente cuando estés seguro.</li>
<li>Consulta el manual del fabricante para conocer las opciones.</li>
<li>No interrumpas una actualización del firmware.</li>
</ul>

<h2>Conclusión</h2>
<p>
La BIOS es una parte fundamental de una computadora porque
permite revisar y configurar diferentes componentes del equipo.
Aprender a entrar a la BIOS y al menú de arranque facilita
las tareas de mantenimiento, diagnóstico e instalación
de sistemas operativos.
</p>

@endsection
