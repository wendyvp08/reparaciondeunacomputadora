@extends('layouts.app')
@section('titulo','Cambio de procesador')
@section('contenido')
<h1>Cambio de procesador</h1>
<img class="imagen lado" src="{{ asset('imagenes/procesador.svg') }}" alt="Procesador">
<p>El procesador (CPU) es el cerebro del equipo. Cambiarlo es la reparación más delicada, pero es posible en computadoras de escritorio. En la mayoría de las laptops el procesador está soldado y no se puede cambiar.</p>
<div class="limpiar"></div>
@include('partials.ficha',['tiempo'=>'45 a 60 minutos','nivel'=>'Difícil','costo'=>'Desde 1,500 pesos, según el modelo','herramientas'=>'Pulsera antiestática, pasta térmica, alcohol isopropílico'])

<div class="peligro"><strong>Primero verifica la compatibilidad.</strong> El procesador debe coincidir con el socket de la tarjeta madre y ser aceptado por su versión de BIOS. Revisa la lista de procesadores compatibles en la página del fabricante de tu tarjeta.</div>

<h2>Sockets comunes</h2>
<table>
<thead><tr><th>Marca</th><th>Socket</th><th>Nota</th></tr></thead>
<tbody>
<tr><td>Intel</td><td>LGA1200</td><td>Procesadores de décima y undécima generación</td></tr>
<tr><td>Intel</td><td>LGA1700</td><td>Doceava a catorceava generación</td></tr>
<tr><td>AMD</td><td>AM4</td><td>Ryzen 1000 a 5000</td></tr>
<tr><td>AMD</td><td>AM5</td><td>Ryzen 7000 en adelante, solo con RAM DDR5</td></tr>
</tbody>
</table>

<h2>Antes de empezar</h2>
<ul>
<li>Identifica tu tarjeta madre con el Administrador de tareas o con el manual.</li>
<li>Actualiza la BIOS si el procesador nuevo es de una generación posterior a la que soportaba tu versión.</li>
<li>Prepara una mesa limpia, con buena luz y sin alfombra.</li>
</ul>

<h2>Paso a paso</h2>
<ol>
<li>Apaga, desconecta y presiona el botón de encendido para descargar la energía.</li>
<li>Retira el ventilador o disipador con cuidado, girando suavemente para despegarlo.</li>
<li>Limpia la pasta vieja con alcohol isopropílico.</li>
<li>Levanta la palanca del socket.</li>
<li>Saca el procesador viejo sujetándolo por los bordes, sin tocar los contactos.</li>
<li>Coloca el nuevo alineando el <strong>triángulo dorado</strong> con la marca del socket. Debe caer solo, sin presionar.</li>
<li>Baja la palanca sin forzar.</li>
<li>Aplica <a href="{{ route('pastatermica') }}">pasta térmica</a> y monta el disipador, apretando los tornillos en cruz.</li>
<li>Conecta el cable del ventilador y enciende.</li>
<li>Entra a la BIOS, confirma que reconoce el procesador y revisa las <a href="{{ route('temperaturas') }}">temperaturas</a>.</li>
</ol>

<h2>Errores comunes</h2>
<div class="alerta">
<ul>
<li>Forzar el procesador: si no cae solo, está mal orientado.</li>
<li>Doblar los pines del socket (en AMD los pines están en el procesador).</li>
<li>Olvidar conectar el ventilador: el equipo se apaga por calor en segundos.</li>
<li>Reutilizar la pasta vieja.</li>
</ul>
</div>

<h2>Preguntas frecuentes</h2>
<details><summary>¿Puedo cambiar el procesador de una laptop?</summary><p>En la mayoría no, porque viene soldado a la tarjeta madre. Consulta el modelo exacto antes de comprar.</p></details>
<details><summary>¿El procesador nuevo trae ventilador?</summary><p>Algunos modelos sí y otros no. Revisa la descripción al comprar.</p></details>
@endsection