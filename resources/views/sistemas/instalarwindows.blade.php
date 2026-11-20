@extends('layouts.app')
@section('titulo','Instalar Windows')
@section('contenido')
<h1>Instalar Windows paso a paso</h1>
<img class="imagen lado" src="{{ asset('imagenes/instalador.svg') }}" alt="Instalador de Windows">
<p>Esta guía instala Windows 11 o Windows 10 desde cero con una memoria USB. Sirve para un disco nuevo o para dejar el equipo como recién salido de fábrica.</p>
<div class="limpiar"></div>
@include('partials.ficha',['tiempo'=>'45 a 90 minutos','nivel'=>'Intermedio','costo'=>'La instalación es gratuita; la licencia es aparte','herramientas'=>'USB booteable, conexión a internet'])

<div class="peligro"><strong>Instalar desde cero borra el disco elegido.</strong> Respalda tus archivos antes de seguir.</div>

<h2>Antes de empezar</h2>
<ul>
<li>Tener lista la <a href="{{ route('usbbooteable') }}">USB booteable</a> con la ISO de Windows.</li>
<li>Respaldar documentos, fotos y contraseñas en otro disco o en la nube.</li>
<li>Conectar la laptop al cargador durante todo el proceso.</li>
<li>Anotar la clave de licencia si tienes una.</li>
</ul>

<h2>Paso a paso con imágenes</h2>

@include('partials.paso',['numero'=>1,'titulo'=>'Respalda tu información','imagen'=>'usb','texto'=>'Copia a un disco externo o a la nube todo lo que no quieras perder: Documentos, Escritorio, Imágenes y descargas. Revisa que los archivos abran antes de continuar.'])

@include('partials.paso',['numero'=>2,'titulo'=>'Arranca desde la USB','imagen'=>'pantallabios','texto'=>'Conecta la USB, enciende el equipo y presiona repetidamente la tecla del menú de arranque de tu marca (consulta la <a href="'.route('bios').'">tabla de la BIOS</a>). En el menú, elige la opción que dice USB o el nombre de la memoria.','consejo'=>'Si el equipo arranca normal, reinicia y prueba otra vez: la tecla se presiona justo cuando aparece el logotipo.'])

@include('partials.paso',['numero'=>3,'titulo'=>'Elige idioma y teclado','imagen'=>'instalador','texto'=>'Selecciona Español como idioma, Español (México) como formato de hora y Latinoamericano como teclado. Pulsa Siguiente.'])

@include('partials.paso',['numero'=>4,'titulo'=>'Pulsa Instalar ahora','imagen'=>'instalador','texto'=>'Pulsa el botón Instalar ahora. Cuando pida la clave del producto, escríbela si la tienes, o elige No tengo clave de producto para activar después. Selecciona la edición (por ejemplo Windows 11 Home o Pro) que corresponda a tu licencia.'])

@include('partials.paso',['numero'=>5,'titulo'=>'Elige Instalación personalizada','imagen'=>'instalador','texto'=>'Acepta los términos y elige Personalizada: instalar solo Windows. La opción Actualizar sirve únicamente si ya tienes Windows funcionando y quieres conservar tus archivos.'])

@include('partials.paso',['numero'=>6,'titulo'=>'Selecciona el disco y la partición','imagen'=>'discoduro','texto'=>'Verás una lista de unidades. Si el disco es nuevo, aparecerá como Espacio sin asignar: selecciónalo y pulsa Siguiente. Si ya tenía sistema, elimina las particiones del disco completo para instalar limpio. Revisa la capacidad para no borrar el disco equivocado. Más información en <a href="'.route('particiones').'">particiones</a>.','consejo'=>'Si tienes dos discos conectados, desconecta el que no vas a usar antes de empezar.'])

@include('partials.paso',['numero'=>7,'titulo'=>'Espera la copia de archivos','imagen'=>'instalador','texto'=>'Windows copia sus archivos y reinicia varias veces. Este paso toma de 10 a 30 minutos. No apagues el equipo ni retires la USB todavía.'])

@include('partials.paso',['numero'=>8,'titulo'=>'Configura región, red y cuenta','imagen'=>'laptop','texto'=>'Elige México como región, conéctate a tu red Wi-Fi y crea tu cuenta. Windows 11 Home pide una cuenta de Microsoft; si prefieres cuenta local, puedes crearla sin conexión a internet.'])

@include('partials.paso',['numero'=>9,'titulo'=>'Actualiza e instala controladores','imagen'=>'laptop','texto'=>'Entra a Configuración, Windows Update y descarga todo lo pendiente. Después visita la página de tu fabricante (HP, Dell, Lenovo, Acer o Asus), busca el modelo exacto y descarga los controladores de video, red y sonido.'])

@include('partials.paso',['numero'=>10,'titulo'=>'Retira la USB y restaura tus archivos','imagen'=>'usb','texto'=>'Retira la memoria USB, reinicia una vez para comprobar que todo arranca bien y copia de vuelta tus archivos del respaldo. Instala tu antivirus y tus programas.'])

<h2>Si algo sale mal</h2>
<table>
<thead><tr><th>Problema</th><th>Causa probable</th><th>Qué hacer</th></tr></thead>
<tbody>
<tr><td>No aparece ningún disco</td><td>Falta el controlador de almacenamiento</td><td>Elige Cargar controlador y usa el del fabricante</td></tr>
<tr><td>El equipo no arranca desde la USB</td><td>Modo de arranque incorrecto</td><td>Revisa si la USB se creó en GPT o MBR según tu equipo</td></tr>
<tr><td>Dice "Este equipo no cumple los requisitos"</td><td>Falta TPM 2.0 o arranque seguro</td><td>Actívalos en la BIOS o instala Windows 10 o <a href="{{ route('linux') }}">Linux</a></td></tr>
<tr><td>Se reinicia en bucle</td><td>La USB sigue conectada y arranca otra vez</td><td>Retírala cuando el equipo reinicie por primera vez</td></tr>
</tbody>
</table>
@endsection