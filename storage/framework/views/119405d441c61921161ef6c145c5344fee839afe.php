<?php $__env->startSection("reaction_type"); ?>
  active
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
  <!DOCTYPE html>
  <div class="row mx-5 justify-content-center">
    <div class="col-6">
      <div class="card">
        <div class="card-title mt-4">
            <h4 class="alert alert-primary text-center mx-4">Cargar nueva reaccion</h4>
        </div>
        <form method="POST" action="<?php echo e(url("tipos_reacciones")); ?>">
          <?php echo csrf_field(); ?>
          <div class="row mx-5 d-flex justify-content-center">
            <div class="col-10">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="reaction" placeholder=".." name="description">
                <label for="reaction">Descripcion</label>
              </div>
            </div>
          </div>
          <div class="row my-5 d-flex justify-content-center">
              <div class="col-3"></div>
              <div class="col-3">
                <a href="<?php echo e(url("tipos_reacciones")); ?>" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</a>

              </div>
              <div class="col-3">
                <button class="btn btn-primary" type="submit" data-toggle="tooltip" title="Crear reaccion">Guardar</button>
              </div>
              <div class="col-3"></div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/miPrimerWeb/resources/views/reactions/create.blade.php ENDPATH**/ ?>