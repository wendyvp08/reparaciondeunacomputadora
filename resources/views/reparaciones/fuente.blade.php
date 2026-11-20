
@extends('layouts.app')
@section('titulo','Fuente de poder')
@section('contenido')

<h1>Fuente de poder de una computadora</h1>

<img class="imagen lado" src="{{ asset('imagenes/portada.svg') }}" alt="Ilustración de una fuente de poder">

<h2>¿Qué es una fuente de poder?</h2>
<p>
La fuente de poder es un componente fundamental de una computadora,
ya que se encarga de convertir la corriente eléctrica de la toma de
pared en diferentes voltajes que necesitan los componentes internos
para funcionar correctamente, como la tarjeta madre, el procesador,
los discos duros y los ventiladores.
</p>

<h2>¿Cuál es su función?</h2>
<p>
Su función principal es proporcionar energía eléctrica estable y
segura a todos los componentes de la computadora. También ayuda a
proteger el equipo frente a determinadas irregularidades eléctricas,
dependiendo de sus características y sistemas de protección.
</p>

<h2>Señales de que la fuente de poder está fallando</h2>
<ul>
    <li>La computadora no enciende al presionar el botón de encendido.</li>
    <li>El equipo se apaga inesperadamente mientras está funcionando.</li>
    <li>La computadora se reinicia constantemente.</li>
    <li>Se escuchan ruidos extraños provenientes de la fuente.</li>
    <li>Se percibe olor a quemado.</li>
    <li>El equipo presenta problemas de energía al ejecutar programas exigentes.</li>
    <li>Los ventiladores o componentes no reciben energía correctamente.</li>
</ul>

<h2>Herramientas necesarias</h2>
<ul>
    <li>Desarmador adecuado para los tornillos del gabinete.</li>
    <li>Una fuente de poder nueva y compatible.</li>
    <li>Bridas para organizar los cables.</li>
    <li>Un espacio limpio y bien iluminado.</li>
    <li>Manual de la computadora o del fabricante.</li>
</ul>

<h2>Pasos para revisar la fuente de poder</h2>
<ol>
    <li>Apaga la computadora completamente.</li>
    <li>Desconecta el cable de alimentación de la toma de corriente.</li>
    <li>Revisa que el cable de corriente no esté dañado.</li>
    <li>Comprueba que el regulador o multicontacto funcione correctamente.</li>
    <li>Verifica que el interruptor externo de la fuente esté en la posición correcta.</li>
    <li>Observa si existen señales externas de daño, como quemaduras o cables deteriorados.</li>
    <li>Si continúa sin encender, solicita una revisión técnica.</li>
</ol>

<h2>¿Cómo reemplazar una fuente de poder?</h2>
<ol>
    <li>Apaga y desconecta completamente la computadora.</li>
    <li>Retira la cubierta lateral del gabinete siguiendo las indicaciones del fabricante.</li>
    <li>Identifica los cables que conectan la fuente con los componentes.</li>
    <li>Solicita ayuda técnica para desconectar y retirar la fuente antigua si no tienes experiencia.</li>
    <li>Coloca una fuente nueva compatible con el gabinete y los componentes.</li>
    <li>Conecta los cables correspondientes siguiendo el manual del fabricante.</li>
    <li>Verifica que todas las conexiones estén correctamente colocadas.</li>
    <li>Coloca nuevamente la cubierta del gabinete.</li>
    <li>Conecta el cable de alimentación y comprueba que la computadora encienda correctamente.</li>
</ol>

<h2>Medidas de seguridad</h2>
<ul>
    <li>Desconecta la computadora de la corriente antes de revisarla.</li>
    <li>Nunca abras la carcasa de la fuente de poder.</li>
    <li>No introduzcas objetos metálicos en las rejillas de ventilación.</li>
    <li>No manipules cables dañados mientras estén conectados.</li>
    <li>Utiliza una fuente de poder de buena calidad y potencia adecuada.</li>
    <li>No mezcles cables modulares de diferentes fuentes, aunque parezcan iguales.</li>
    <li>Si percibes olor a quemado, deja de utilizar el equipo.</li>
</ul>

<h2>¿Qué hacer si la fuente de poder está dañada?</h2>
<p>
Si la fuente presenta fallas, ruidos inusuales, olor a quemado o deja
de suministrar energía correctamente, lo más recomendable es reemplazarla
por una nueva. No se recomienda repararla en casa, ya que puede contener
capacitores que conservan cargas eléctricas peligrosas incluso después
de desconectarla.
</p>

<p>
La fuente dañada debe llevarse a un centro especializado de reparación
o reciclaje de residuos electrónicos.
</p>

<h2>Recomendaciones para cuidar la fuente de poder</h2>
<ul>
    <li>Mantén limpio el interior del gabinete para evitar la acumulación de polvo.</li>
    <li>Evita bloquear las entradas y salidas de aire.</li>
    <li>Utiliza un regulador o sistema de alimentación ininterrumpida (UPS) adecuado.</li>
    <li>No sobrecargues la fuente con componentes que superen su capacidad.</li>
    <li>Compra fuentes de marcas confiables y con protecciones eléctricas.</li>
    <li>Revisa periódicamente el estado de los cables.</li>
</ul>

<h2>Conclusión</h2>
<p>
La fuente de poder es indispensable para el funcionamiento de una
computadora, ya que distribuye la energía necesaria a todos sus
componentes. Identificar sus fallas a tiempo ayuda a prevenir daños
en otras partes del equipo. Para mantener una computadora en buen
estado, es importante utilizar una fuente compatible, mantenerla
limpia y seguir las medidas de seguridad durante su revisión
o reemplazo.
</p>

@endsection
