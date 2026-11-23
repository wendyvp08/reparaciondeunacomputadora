

<?php $__env->startSection('titulo','Mantenimiento'); ?>
<?php $__env->startSection('contenido'); ?>

<h1>Mantenimiento preventivo</h1>

<img class="imagen lado" src="<?php echo e(asset('imagenes/mantenimiento.svg')); ?>" alt="Limpieza con aire comprimido">

<h2>¿Qué es el mantenimiento preventivo?</h2>
<p>
El mantenimiento preventivo es el cuidado que se da a una
computadora antes de que presente fallas. Consiste en realizar
limpiezas, revisiones y actualizaciones periódicas para conservar
el equipo en buenas condiciones y prolongar su vida útil.
</p>

<p>
El polvo y el calor son dos factores que pueden afectar
el funcionamiento de una computadora. La acumulación de polvo
puede obstruir los ventiladores, aumentar la temperatura
y provocar problemas en los componentes internos.
</p>

<div class="limpiar"></div>

<?php echo $__env->make('partials.ficha',['tiempo'=>'40 a 60 minutos','nivel'=>'Fácil','costo'=>'De 100 a 300 pesos en materiales','herramientas'=>'Aire comprimido, alcohol isopropílico, paño y desarmador'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<h2>Objetivos del mantenimiento preventivo</h2>
<ul>
<li>Evitar fallas en los componentes de la computadora.</li>
<li>Mejorar el funcionamiento del equipo.</li>
<li>Reducir la acumulación de polvo y suciedad.</li>
<li>Prevenir el sobrecalentamiento.</li>
<li>Proteger la información almacenada.</li>
<li>Prolongar la vida útil de los componentes.</li>
</ul>

<h2>Señales de que lo necesita</h2>
<ul>
<li>El ventilador suena fuerte o el equipo está caliente.</li>
<li>La computadora se pone lenta sin razón aparente.</li>
<li>Se apaga o se reinicia sola.</li>
<li>Hay polvo visible en las rejillas de ventilación.</li>
<li>Los programas tardan demasiado en abrir.</li>
<li>El equipo presenta problemas de funcionamiento.</li>
</ul>

<h2>Tipos de mantenimiento</h2>
<table>
<thead>
<tr>
<th>Tipo</th>
<th>Qué incluye</th>
<th>Guía</th>
</tr>
</thead>
<tbody>
<tr>
<td>Interno</td>
<td>Polvo, ventiladores, contactos y revisión de pasta térmica.</td>
<td><a href="<?php echo e(route('limpiezainterna')); ?>">Limpieza interna</a></td>
</tr>
<tr>
<td>Externo</td>
<td>Pantalla, teclado, gabinete y puertos.</td>
<td><a href="<?php echo e(route('limpiezaexterna')); ?>">Limpieza externa</a></td>
</tr>
<tr>
<td>Software</td>
<td>Actualizaciones, antivirus, espacio y respaldo.</td>
<td><a href="<?php echo e(route('mantenimientosoftware')); ?>">Mantenimiento de software</a></td>
</tr>
</tbody>
</table>

<h2>Herramientas necesarias</h2>
<ul>
<li><strong>Aire comprimido:</strong> ayuda a retirar el polvo de las zonas de ventilación.</li>
<li><strong>Alcohol isopropílico:</strong> se utiliza para la limpieza adecuada de determinados componentes electrónicos.</li>
<li><strong>Paño de microfibra:</strong> permite limpiar superficies y pantallas.</li>
<li><strong>Desarmadores:</strong> sirven para retirar tornillos durante las reparaciones.</li>
<li><strong>Brocha antiestática:</strong> ayuda a retirar el polvo de los componentes.</li>
<li><strong>Pulsera antiestática:</strong> ayuda a reducir el riesgo de descargas electrostáticas.</li>
</ul>

<h2>Procedimiento general</h2>
<ol>
<li>Apaga completamente la computadora.</li>
<li>Desconecta el cargador y los dispositivos externos.</li>
<li>Realiza una inspección visual del equipo.</li>
<li>Limpia cuidadosamente las superficies externas.</li>
<li>Revisa las entradas y salidas de ventilación.</li>
<li>Comprueba el estado de los componentes internos si es necesario.</li>
<li>Revisa las actualizaciones del sistema operativo.</li>
<li>Realiza un análisis de seguridad.</li>
<li>Comprueba que el equipo funcione correctamente.</li>
</ol>

<h2>Beneficios del mantenimiento preventivo</h2>
<ul>
<li>Ayuda a evitar reparaciones costosas.</li>
<li>Mejora la ventilación del equipo.</li>
<li>Permite detectar problemas a tiempo.</li>
<li>Ayuda a conservar los componentes.</li>
<li>Mejora la seguridad del sistema.</li>
<li>Favorece un funcionamiento estable.</li>
</ul>

<h2>Calendario y lista de revisión</h2>
<ul>
<li>
<a href="<?php echo e(route('calendario')); ?>">Calendario de mantenimiento</a>:
qué hacer cada semana, mes y año.
</li>
<li>
<a href="<?php echo e(route('checklist')); ?>">Lista de revisión</a>:
marca cada tarea al terminarla.
</li>
</ul>

<h2>Recomendaciones importantes</h2>
<ul>
<li>Realiza revisiones periódicas del equipo.</li>
<li>No utilices agua ni productos de limpieza domésticos sobre los componentes.</li>
<li>Evita aplicar aire comprimido directamente sobre ventiladores sin asegurarlos.</li>
<li>No manipules componentes internos con el equipo conectado.</li>
<li>Realiza copias de seguridad de tus archivos importantes.</li>
<li>Solicita ayuda técnica cuando no tengas experiencia en reparaciones internas.</li>
</ul>

<div class="consejo">
<strong>Consejo:</strong> Un mantenimiento periódico puede ayudar a prevenir daños causados por el polvo y el calor. La frecuencia dependerá del uso y del ambiente donde se encuentre la computadora.
</div>

<h2>Conclusión</h2>
<p>
El mantenimiento preventivo es fundamental para conservar
una computadora en buenas condiciones. Mediante la limpieza,
la revisión de componentes y las actualizaciones del sistema
se pueden prevenir fallas, mejorar el funcionamiento
y prolongar la vida útil del equipo.
</p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ReparacionDeUnaComputadora\resources\views/mantenimiento/index.blade.php ENDPATH**/ ?>