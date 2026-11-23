
<?php $__env->startSection('titulo','Guías'); ?>
<?php $__env->startSection('contenido'); ?>
<h1>Todas las guías</h1>
<table>
<thead><tr><th>Guía</th><th>Categoría</th><th>Nivel</th><th>Minutos</th><th></th></tr></thead>
<tbody>
<?php $__currentLoopData = $guias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($guia->titulo); ?></td>
<td><?php echo e($guia->categoria->nombre); ?></td>
<td><?php echo e($guia->nivel); ?></td>
<td><?php echo e($guia->minutos); ?></td>
<td><a href="<?php echo e(route('guias.ver',$guia->id)); ?>">Ver</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ReparacionDeUnaComputadora\resources\views/guias/index.blade.php ENDPATH**/ ?>