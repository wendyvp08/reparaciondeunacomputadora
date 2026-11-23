
<?php $__env->startSection('titulo','Inicio'); ?>
<?php $__env->startSection('contenido'); ?>
<?php
$imagenes = ['Hardware' => 'discoduro', 'Mantenimiento' => 'mantenimiento', 'Software' => 'windows'];
?>
<section class="hero">
<img src="<?php echo e(asset('imagenes/portada.svg')); ?>" alt="Computadora de escritorio">
<h1>Aprende a reparar tu computadora</h1>
<p>Guías paso a paso para cambiar piezas, dar mantenimiento e instalar Windows o Linux, explicadas para principiantes.</p>
<a class="boton" href="<?php echo e(route('guias.index')); ?>">Ver todas las guías</a>
<a class="boton" href="<?php echo e(route('seguridad')); ?>">Empezar con seguridad</a>
</section>

<div class="dato"><strong><?php echo e($totalguias); ?></strong><br>guías disponibles</div>
<div class="dato"><strong><?php echo e($totalsistemas); ?></strong><br>sistemas operativos</div>
<div class="dato"><strong><?php echo e($totalconsultas); ?></strong><br>consultas atendidas</div>
<div class="limpiar"></div>

<h2>Ruta recomendada para principiantes</h2>
<ol>
<li>Lee las <a href="<?php echo e(route('seguridad')); ?>">reglas de seguridad</a> antes de abrir cualquier equipo.</li>
<li>Aprende a <a href="<?php echo e(route('diagnostico')); ?>">diagnosticar la falla</a> para no cambiar piezas que están bien.</li>
<li>Haz un <a href="<?php echo e(route('mantenimiento')); ?>">mantenimiento preventivo</a>: resuelve muchos problemas sin gastar.</li>
<li>Si hace falta, sigue la guía de <a href="<?php echo e(route('reparaciones')); ?>">reparación</a> de la pieza.</li>
<li>Reinstala el sistema con la guía de <a href="<?php echo e(route('sistemas.index')); ?>">sistemas operativos</a>.</li>
</ol>

<h2>Guías recientes</h2>
<?php $__currentLoopData = $guias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="tarjeta">
<img src="<?php echo e(asset('imagenes/'.($imagenes[$guia->categoria->nombre] ?? 'portada').'.svg')); ?>" alt="<?php echo e($guia->titulo); ?>">
<div class="texto">
<h3><?php echo e($guia->titulo); ?></h3>
<p><?php echo e($guia->resumen); ?></p>
<small><?php echo e($guia->categoria->nombre); ?> | <?php echo e($guia->nivel); ?> | <?php echo e($guia->minutos); ?> minutos</small><br>
<a href="<?php echo e(route('guias.ver',$guia->id)); ?>">Ver guía completa</a>
</div>
</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="limpiar"></div>

<div class="consejo">
<strong>Regla de oro:</strong> antes de comprar una pieza, confirma el modelo exacto de tu equipo. Comprar una pieza incompatible es el error más caro y más común.
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ReparacionDeUnaComputadora\resources\views/inicio.blade.php ENDPATH**/ ?>