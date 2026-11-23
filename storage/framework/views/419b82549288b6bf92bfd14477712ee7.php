
<?php $__env->startSection('titulo',$guia->titulo); ?>
<?php $__env->startSection('contenido'); ?>
<h1><?php echo e($guia->titulo); ?></h1>
<img class="imagen lado" src="<?php echo e(asset('imagenes/portada.svg')); ?>" alt="Ilustración">
<p><?php echo e($guia->resumen); ?></p>
<p>Categoría: <a href="<?php echo e(route('categorias.ver',$guia->categoria->id)); ?>"><?php echo e($guia->categoria->nombre); ?></a> | Nivel: <span><?php echo e($guia->nivel); ?></span> | Tiempo: <?php echo e($guia->minutos); ?> minutos</p>
<h2>Herramientas</h2>
<ul>
<?php $__currentLoopData = $guia->herramientas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><a href="<?php echo e(route('herramientas.ver',$h->id)); ?>"><?php echo e($h->nombre); ?></a></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<h2>Pasos</h2>
<ol>
<?php $__currentLoopData = $guia->pasos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($paso->instruccion); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
<p><a href="<?php echo e(route('guias.index')); ?>">Volver a guías</a></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\ReparacionDeUnaComputadora\resources\views/guias/ver.blade.php ENDPATH**/ ?>