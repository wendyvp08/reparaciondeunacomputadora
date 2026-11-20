
@extends('layouts.app')
@section('titulo','Instalar Linux')
@section('contenido')

<h1>Instalar Linux paso a paso</h1>

<img class="imagen lado" src="{{ asset('imagenes/linux.svg') }}" alt="Ilustración">

<h2>¿Qué es Linux?</h2>
<p>
Linux es un sistema operativo de código abierto que permite
utilizar una computadora para realizar diferentes actividades,
como navegar por internet, trabajar, estudiar, programar
y administrar archivos. Existen diferentes distribuciones,
como Ubuntu, Linux Mint y Debian.
</p>

<h2>¿Qué se necesita para instalar Linux?</h2>
<ul>
<li>Una computadora compatible.</li>
<li>Una memoria USB de 8 GB o más.</li>
<li>Una imagen ISO de una distribución Linux.</li>
<li>Un programa para crear una USB de arranque.</li>
<li>Conexión a internet para descargar actualizaciones.</li>
<li>Espacio disponible en el disco duro.</li>
</ul>

<h2>Preparación antes de instalar</h2>
<p>
Antes de comenzar, descarga la distribución Linux que deseas
utilizar y prepara una memoria USB de arranque. También es
importante realizar una copia de seguridad de tus documentos,
fotografías y archivos importantes.
</p>

<h2>Instalación de Linux paso a paso</h2>
<ol>
<li>Conecta la memoria USB de instalación a la computadora.</li>
<li>Reinicia el equipo y entra al menú de arranque.</li>
<li>Selecciona la memoria USB como dispositivo de inicio.</li>
<li>Espera a que aparezca la pantalla de inicio de Linux.</li>
<li>Elige la opción <em>Probar Linux</em> para comprobar que todo funcione correctamente.</li>
<li>Haz clic en el icono o botón <strong>Instalar</strong>.</li>
<li>Selecciona el idioma que deseas utilizar.</li>
<li>Configura la distribución del teclado y la conexión a internet.</li>
<li>Revisa las opciones de instalación y selecciona el tipo de particionado adecuado.</li>
<li>Crea tu usuario, nombre del equipo y contraseña.</li>
<li>Confirma la configuración y espera a que finalice la instalación.</li>
<li>Retira la memoria USB cuando el instalador lo indique y reinicia la computadora.</li>
</ol>

<h2>Tipos de instalación</h2>
<ul>
<li><strong>Borrar disco:</strong> utiliza el disco seleccionado para instalar Linux y elimina los datos que contiene.</li>
<li><strong>Instalar junto a Windows:</strong> permite conservar ambos sistemas operativos si existe espacio suficiente y se configura correctamente.</li>
<li><strong>Particionado manual:</strong> permite organizar las particiones del disco de forma personalizada.</li>
</ul>

<h2>¿Qué hacer después de instalar Linux?</h2>
<ul>
<li>Comprueba que el sistema inicie correctamente.</li>
<li>Conéctate a una red de internet.</li>
<li>Instala las actualizaciones disponibles.</li>
<li>Comprueba el funcionamiento del sonido y la pantalla.</li>
<li>Instala los programas que necesites.</li>
<li>Configura tus preferencias personales.</li>
</ul>

<h2>Ventajas de utilizar Linux</h2>
<ul>
<li>Es de código abierto.</li>
<li>Cuenta con diferentes distribuciones gratuitas.</li>
<li>Permite personalizar el entorno de trabajo.</li>
<li>Ofrece herramientas para programación y desarrollo.</li>
<li>Puede funcionar en diferentes tipos de computadoras.</li>
<li>Cuenta con una amplia comunidad de usuarios.</li>
</ul>

<h2>Recomendaciones</h2>
<ul>
<li>Realiza una copia de seguridad antes de instalar.</li>
<li>Verifica que tu computadora sea compatible.</li>
<li>Descarga Linux desde su página oficial.</li>
<li>No desconectes la computadora durante la instalación.</li>
<li>Lee cuidadosamente las opciones antes de modificar las particiones.</li>
</ul>

<h2>Conclusión</h2>
<p>
Linux es una alternativa a otros sistemas operativos que ofrece
libertad, personalización y diferentes herramientas.
Su instalación permite aprovechar una computadora para
realizar actividades escolares, laborales y personales.
Es importante seguir cada paso y proteger los archivos
antes de comenzar el proceso.
</p>

@endsection
