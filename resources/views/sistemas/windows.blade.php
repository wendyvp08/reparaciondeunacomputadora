
@extends('layouts.app')
@section('titulo','Descargar Windows')
@section('contenido')

<h1>Cómo descargar Windows</h1>

<img class="imagen lado" src="{{ asset('imagenes/windows.svg') }}" alt="Windows">

<h2>¿Qué es Windows?</h2>
<p>
Windows es un sistema operativo desarrollado por Microsoft.
Permite utilizar una computadora para realizar actividades
como trabajar, estudiar, navegar por internet, instalar
programas, jugar y administrar archivos.
</p>

<p>
Microsoft ofrece la imagen de instalación (archivo ISO)
de Windows desde su página oficial. Es importante descargarla
desde una fuente confiable para evitar versiones modificadas
que puedan contener programas maliciosos.
</p>

<div class="limpiar"></div>

@include('partials.ficha',['tiempo'=>'30 a 60 minutos de descarga','nivel'=>'Fácil','costo'=>'La descarga es gratuita','herramientas'=>'USB de 8 GB o más y conexión estable'])

<h2>¿Qué es un archivo ISO?</h2>
<p>
Un archivo ISO es una imagen que contiene los archivos
necesarios para instalar un sistema operativo. Se puede
utilizar para crear una memoria USB booteable y comenzar
la instalación de Windows en una computadora.
</p>

<h2>Paso a paso para descargar Windows</h2>
<ol>
<li>Entra al sitio oficial de Microsoft.</li>
<li>Busca la sección de descarga de Windows 11.</li>
<li>Localiza la opción <em>Descargar imagen de disco (ISO)</em>.</li>
<li>Selecciona Windows 11 y pulsa Descargar.</li>
<li>Elige el idioma Español y confirma la selección.</li>
<li>Selecciona la versión de 64 bits cuando corresponda.</li>
<li>Descarga el archivo ISO y espera a que termine.</li>
<li>Guarda el archivo en una carpeta fácil de encontrar.</li>
<li>Comprueba que el archivo se haya descargado correctamente.</li>
</ol>

<h2>Requisitos de Windows 11</h2>
<table>
<thead>
<tr>
<th>Componente</th>
<th>Mínimo</th>
</tr>
</thead>
<tbody>
<tr><td>Procesador</td><td>1 GHz, 2 núcleos y compatible de 64 bits</td></tr>
<tr><td>RAM</td><td>4 GB</td></tr>
<tr><td>Almacenamiento</td><td>64 GB</td></tr>
<tr><td>Firmware</td><td>UEFI con arranque seguro compatible</td></tr>
<tr><td>Seguridad</td><td>TPM 2.0</td></tr>
<tr><td>Tarjeta gráfica</td><td>Compatible con DirectX 12</td></tr>
<tr><td>Pantalla</td><td>Más de 9 pulgadas y resolución HD</td></tr>
<tr><td>Internet</td><td>Necesario para algunas configuraciones y actualizaciones</td></tr>
</tbody>
</table>

<h2>Características de Windows</h2>
<ul>
<li>Interfaz gráfica fácil de utilizar.</li>
<li>Permite instalar diferentes programas y aplicaciones.</li>
<li>Cuenta con herramientas para administrar archivos.</li>
<li>Incluye funciones de seguridad.</li>
<li>Permite conectarse a redes e internet.</li>
<li>Es compatible con una gran variedad de dispositivos.</li>
</ul>

<h2>¿Qué hacer después de descargar Windows?</h2>
<ol>
<li>Localiza el archivo ISO en tu computadora.</li>
<li>Prepara una memoria USB booteable utilizando Rufus u otra herramienta compatible.</li>
<li>Conecta la memoria USB al equipo donde deseas instalar Windows.</li>
<li>Entra al menú de arranque de la computadora.</li>
<li>Selecciona la memoria USB.</li>
<li>Sigue las instrucciones del instalador de Windows.</li>
</ol>

<h2>¿Cómo comprobar que el archivo es original?</h2>
<p>
Descarga el archivo desde la página oficial de Microsoft.
También puedes comprobar su integridad comparando el código
SHA256 del archivo con el valor publicado por Microsoft,
cuando esté disponible.
</p>

<div class="alerta">
<strong>Sobre Windows 10:</strong>
Microsoft terminó su soporte estándar con actualizaciones
gratuitas de seguridad el 14 de octubre de 2025.
Si tu equipo cumple los requisitos, considera instalar
Windows 11.
</div>

<h2>Dudas frecuentes</h2>

<details>
<summary>¿Necesito una licencia?</summary>
<p>
Puedes descargar el instalador gratuitamente. Sin embargo,
para activar Windows necesitas una licencia digital o una
clave de producto válida. Sin activar, existen algunas
limitaciones de personalización.
</p>
</details>

<details>
<summary>¿Cómo sé que el archivo es original?</summary>
<p>
Descárgalo directamente del sitio oficial de Microsoft.
Puedes comprobar su integridad mediante el código SHA256.
</p>
</details>

<details>
<summary>¿Mi computadora necesita internet?</summary>
<p>
Se recomienda tener conexión a internet para descargar
actualizaciones y completar algunas configuraciones
durante la instalación.
</p>
</details>

<details>
<summary>¿Qué hago si mi equipo no cumple los requisitos?</summary>
<p>
Puedes revisar si es posible actualizar sus componentes
o probar una distribución ligera de
<a href="{{ route('linux') }}">Linux</a>.
</p>
</details>

<h2>Recomendaciones</h2>
<ul>
<li>Realiza una copia de seguridad de tus archivos.</li>
<li>Verifica los requisitos antes de instalar.</li>
<li>Descarga Windows desde la página oficial.</li>
<li>Utiliza una memoria USB en buen estado.</li>
<li>Mantén la computadora conectada a la corriente durante la instalación.</li>
<li>No interrumpas el proceso de instalación.</li>
</ul>

<h2>Conclusión</h2>
<p>
Descargar Windows es el primer paso para instalar este sistema
operativo en una computadora. Es importante verificar los
requisitos del equipo, descargar el archivo ISO original
y preparar correctamente una memoria USB booteable para
realizar la instalación.
</p>

<p>
Siguiente:
<a href="{{ route('usbbooteable') }}">Crear la USB booteable</a>.
</p>

@endsection
