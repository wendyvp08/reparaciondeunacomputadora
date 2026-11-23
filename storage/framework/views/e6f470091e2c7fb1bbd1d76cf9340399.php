
<?php $__env->startSection('titulo','Reparaciones'); ?>
<?php $__env->startSection('contenido'); ?>
<h1>Principales reparaciones</h1>
<p>Elige la pieza que quieres cambiar.</p>
<ul>
<li><a href="<?php echo e(route('discoduro')); ?>">Cambio de disco duro</a></li>
<li><a href="<?php echo e(route('ram')); ?>">Cambio de memoria RAM</a></li>
<li><a href="<?php echo e(route('procesador')); ?>">Cambio de procesador</a></li>
<li><a href="<?php echo e(route('pastatermica')); ?>">Cambio de pasta térmica</a></li>
<li><a href="<?php echo e(route('fuente')); ?>">Fuente de poder</a></li>
<li><a href="<?php echo e(route('bateria')); ?>">Batería</a></li>
<li><a href="<?php echo e(route('pantalla')); ?>">Pantalla</a></li>
<li><a href="<?php echo e(route('teclado')); ?>">Teclado</a></li>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ReparacionDeUnaComputadora\resources\views/reparaciones/index.blade.php ENDPATH**/ ?>