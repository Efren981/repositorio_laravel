<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport"content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro de usuario</title>
  <link rel="stylesheet"href="<?php echo e(asset("css/bootstrap.min.css")); ?>">
  <link rel="stylesheet"href="<?php echo e(asset("css/style.css")); ?>">
  <script type="text/text/javascript"src="<?php echo e(asset("js/bootstrap.min.js")); ?>"></script>
</head>
  <body class="bg-primary">
      <main class="container">
        <div class="row my-5">
          <div class="col"></div>
          <div class="col-10">
            <div class="card d-flex justify-content-center bg-white m-5 text-center">
                <div class="row my-5">
                  <div class="col">
                    <h1 >--------Registro--------</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h5>Crea tu cuenta. Es gratis y solo toma un minuto</h5>
                  </div>
                </div>
                <div class="row justify-content-evenly">
                  <div class="col-4 ">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" id="name" class="form-control">
                  </div>
                  <div class="col-4">
                    <label for="last_name" class="form-label">Apellidos</label>
                    <input type="text" id="last_name" class="form-control">
                  </div>
                </div>
                <div class="row ">
                  <div class="col">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" id="email" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" id="password" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="password_confirm" class="form-label">Confirmar contraseña</label>
                    <input type="password" id="password_confirm" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-check">
                      <br>
                      <input class="form-check-input" type="checkbox" value="" id="check_aceptar">
                      <label class="form-check-label" for="check_aceptar">
                          Acepto los terminos de uso & politicas de privacidad
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col"></div>
                  <div class="col-8">
                    <div class="d-grid gap-2">
                      <button class="btn btn-success" type="submit">Registrar ahora</button>
                      <br>
                    </div>
                  </div>
                  <div class="col"></div>
                </div>
            </div>
          </div>
          <div class="col"></div>
        </div>
      </main>
      <div class="row  ">
        <div class="col text-white justify-content-center d-flex">
          <h5>¿Ya tienes una cuenta? Registrarse</h5>
        </div>
      </div>

  </body>
</html>
<?php /**PATH /home/efren/Documentos/Proyectos_php/miPrimerWeb/resources/views/layouts/registro.blade.php ENDPATH**/ ?>