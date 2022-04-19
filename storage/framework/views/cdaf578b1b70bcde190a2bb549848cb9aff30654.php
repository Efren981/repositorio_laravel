<?php $__env->startSection("example_1_active"); ?>
  active
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
  Mensaje 1
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/miPrimerWeb/resources/views/layouts/example_1.blade.php ENDPATH**/ ?>