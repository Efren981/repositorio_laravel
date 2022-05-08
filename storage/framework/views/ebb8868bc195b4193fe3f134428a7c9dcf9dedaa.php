<?php $__env->startSection("reaction_type"); ?>
  active
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('content'); ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <link rel="stylesheet"href="<?php echo e(asset("css/bootstrap.min.css")); ?>">
    <link rel="stylesheet"href="<?php echo e(asset("css/style.css")); ?>">
    <script type="text/text/javascript"src="<?php echo e(asset("js/bootstrap.min.js")); ?>"></script>
  </head>
    <body>
      <div class="container">
        <h1 class="h1 alert alert-primary text-center">Reacciones</h1>

        <div class="row g-5 d-flex justify-content-center">
                      <div class="col">
                            <figure class="figure">
                              <img src="<?php echo e(asset("/images/noche.svg")); ?>" alt="ethe" class="figure-img img-fluid" style="width:200%">
                            </figure>
                      </div>
                     <div class="col-4">
                        <table class="table card" style="background: #e1e1e8">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class=" justify-content-center text-center">Reaccion</th>
                            <th scope="col" class=" justify-content-center text-center">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->index+1); ?></th>
                            <td><?php echo e($reaction->description); ?></td>
                            <td><a href="<?php echo e(route("tipos_reacciones.edit",$reaction->id)); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar reaccion"><span class="icon-compose">Editar</span></a></td>
                            <td><form action="<?php echo e(route("tipos_reacciones.destroy",$reaction->id)); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('delete'); ?>
                              <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta reaccion"><span class="icon-bin">Eliminar</span></button>
                            </form></td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                     </div>
                     <div class="col">
                       <div class="row">
                         <div class="col">
                           <a href="<?php echo e(url("tipos_reacciones/create")); ?>" class="btn btn-dark mb-4 text-white"data-toggle="tooltip" title="Insertar nueva reaccion"><span class="icon-pen"> Nuevo</span></a>
                         </div>
                       </div>
                     </div>
                   </div>
      </div>
    </body>
  </html>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/miPrimerWeb/resources/views/reactions/index.blade.php ENDPATH**/ ?>