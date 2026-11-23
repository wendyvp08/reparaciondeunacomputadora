
<?php $__env->startSection('titulo','Sistemas operativos'); ?>
<?php $__env->startSection('contenido'); ?>
<h1>Sistemas operativos disponibles</h1>
<table>
<thead><tr><th>Sistema</th><th>Familia</th><th>Versión</th><th>Tamaño</th><th></th></tr></thead>
<tbody>
<?php $__currentLoopData = $sistemas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr><td><?php echo e($s->nombre); ?></td><td><?php echo e($s->familia); ?></td><td><?php echo e($s->version); ?></td><td><?php echo e($s->tamano); ?></td>
<td><a href="<?php echo e(route('sistemas.ver',$s->id)); ?>">Detalle</a></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<h2>Guías de descarga e instalación</h2>
<ul>
<li><a href="<?php echo e(route('windows')); ?>">Cómo descargar Windows</a></li>
<li><a href="<?php echo e(route('linux')); ?>">Cómo descargar Linux</a></li>
<li><a href="<?php echo e(route('usbbooteable')); ?>">Crear USB booteable</a></li>
<li><a href="<?php echo e(route('instalarwindows')); ?>">Instalar Windows</a></li>
<li><a href="<?php echo e(route('instalarlinux')); ?>">Instalar Linux</a></li>
<li><a href="<?php echo e(route('bios')); ?>">Entrar a la BIOS</a></li>
<li><a href="<?php echo e(route('particiones')); ?>">Particiones</a></li>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ReparacionDeUnaComputadora\resources\views/sistemas/index.blade.php ENDPATH**/ ?>