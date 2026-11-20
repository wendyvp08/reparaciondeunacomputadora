
@extends('layouts.app')
@section('titulo','Descargar Linux')
@section('contenido')

<h1>Cómo descargar Linux</h1>

<img class="imagen lado" src="{{ asset('imagenes/linux.svg') }}" alt="Linux">

<h2>¿Qué es Linux?</h2>
<p>
Linux es un sistema operativo gratuito y de código abierto.
Es una alternativa a Windows y permite realizar actividades
como navegar por internet, trabajar, estudiar, programar
y administrar archivos. Existen muchas versiones llamadas
<strong>distribuciones</strong>.
</p>

<p>
Una de sus ventajas es que algunas distribuciones pueden
funcionar en computadoras con recursos limitados, por lo
que son una buena opción para aprovechar equipos antiguos.
</p>

<div class="limpiar"></div>

<h2>Qué distribución elegir</h2>
<table>
<thead>
<tr>
<th>Distribución</th>
<th>Ideal para</th>
<th>RAM recomendada</th>
<th>Sitio</th>
</tr>
</thead>
<tbody>
<tr>
<td>Linux Mint</td>
<td>Principiantes, parecida a Windows</td>
<td>4 GB</td>
<td>linuxmint.com</td>
</tr>
<tr>
<td>Ubuntu</td>
<td>Uso general, mucha ayuda en internet</td>
<td>4 GB</td>
<td>ubuntu.com</td>
</tr>
<tr>
<td>Debian</td>
<td>Estabilidad y servidores</td>
<td>2 GB</td>
<td>debian.org</td>
</tr>
<tr>
<td>Fedora</td>
<td>Programas y tecnologías nuevas</td>
<td>4 GB</td>
<td>fedoraproject.org</td>
</tr>
</tbody>
</table>

<h2>Requisitos para descargar Linux</h2>
<ul>
<li>Una computadora con conexión a internet.</li>
<li>Espacio disponible en el disco duro.</li>
<li>Un navegador web para acceder al sitio oficial.</li>
<li>Conocer si el procesador es compatible con la versión elegida.</li>
<li>Una memoria USB de 8 GB o más para preparar la instalación.</li>
</ul>

<h2>Paso a paso para descargar Linux</h2>
<ol>
<li>Entra al sitio oficial de la distribución que elegiste.</li>
<li>Abre la sección <em>Download</em> o <em>Descargas</em>.</li>
<li>Selecciona la versión estable o LTS, si está disponible.</li>
<li>Comprueba que la versión sea compatible con tu computadora.</li>
<li>Selecciona la arquitectura adecuada, normalmente de 64 bits.</li>
<li>Haz clic en el botón de descarga.</li>
<li>Espera a que termine la descarga del archivo ISO.</li>
<li>Localiza el archivo descargado en la carpeta de descargas.</li>
<li>Compara el código SHA256 publicado en el sitio oficial con el de tu archivo para comprobar su integridad.</li>
</ol>

<h2>¿Qué es un archivo ISO?</h2>
<p>
Un archivo ISO es una imagen que contiene los archivos
necesarios para instalar un sistema operativo. En Linux,
este archivo se utiliza para preparar una memoria USB
de arranque e iniciar la instalación en una computadora.
</p>

<h2>¿Qué hacer después de descargar Linux?</h2>
<ul>
<li>Verificar que el archivo ISO se haya descargado correctamente.</li>
<li>Preparar una memoria USB booteable.</li>
<li>Reiniciar la computadora y seleccionar la USB desde el menú de arranque.</li>
<li>Probar Linux antes de instalarlo.</li>
<li>Seguir las instrucciones del instalador.</li>
</ul>

<div class="consejo">
Antes de instalarlo, puedes <strong>probarlo sin borrar nada</strong>:
arranca desde la USB y elige la opción de probar. Así podrás
comprobar si funciona correctamente en tu computadora.
</div>

<h2>Ventajas de descargar Linux</h2>
<ul>
<li>Es gratuito y de código abierto.</li>
<li>Cuenta con diferentes distribuciones.</li>
<li>Permite personalizar el sistema.</li>
<li>Ofrece herramientas para programación.</li>
<li>Puede aprovechar los recursos de diferentes computadoras.</li>
<li>Recibe actualizaciones de seguridad.</li>
</ul>

<h2>Dudas frecuentes</h2>

<details>
<summary>¿Puedo usar mis programas de Windows?</summary>
<p>
Muchos tienen versión para Linux. Otros tienen alternativas
gratuitas como LibreOffice y GIMP. Algunos programas de Windows
pueden necesitar herramientas adicionales para funcionar.
</p>
</details>

<details>
<summary>¿Puedo tener Windows y Linux juntos?</summary>
<p>
Sí, mediante una instalación de doble arranque.
Esto permite elegir qué sistema operativo iniciar.
Es importante respaldar los datos antes de modificar
las particiones del disco.
</p>
</details>

<details>
<summary>¿Linux tiene algún costo?</summary>
<p>
La mayoría de las distribuciones Linux se pueden descargar
y utilizar gratuitamente.
</p>
</details>

<details>
<summary>¿Qué distribución es mejor para principiantes?</summary>
<p>
Linux Mint y Ubuntu son buenas opciones para comenzar,
porque cuentan con entornos fáciles de utilizar
y documentación para aprender.
</p>
</details>

<h2>Conclusión</h2>
<p>
Descargar Linux es el primer paso para conocer y utilizar
un sistema operativo diferente. Elegir una distribución
compatible con la computadora y descargarla desde su sitio
oficial ayuda a realizar una instalación segura y correcta.
</p>

<p>
Siguiente: <a href="{{ route('usbbooteable') }}">Crear la USB booteable</a>.
</p>

@endsection
