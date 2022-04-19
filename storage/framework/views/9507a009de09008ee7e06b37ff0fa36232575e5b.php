<!DOCTYPE html>
<html lang="in" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport"content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>REGISTRO DEL USUARIO</title>

  <link rel="stylesheet"href="<?php echo e(asset("css/bootstrap.min.css")); ?>">
  <link rel="stylesheet"href="<?php echo e(asset("css/style.css")); ?>">
  <script type="text/text/javascript"src="<?php echo e(asset("js/bootstrap.min.js")); ?>"></script>
</head>
<body class="bg-primary">
<main class="container justify-content-center p-5">

  <div class="row justify-content-center ">
    <div class="col-5 bg-white justify-content-center">

  <br>
  <div class="col-3 justify-content-center">
    <h1 >Registro</h1>
  </div>
  <div>
  <div class="row">
  <div class="col">
    <h5>Crea tu cuenta. Es gratis y solo toma un minuto</h5>
  </div>
  </div>

  <br>
  <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Nombre" aria-label="First name">
  </div>

  <div class="col">
    <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
  </div>
  </div>

  <br>
  <div class="col">
    <input type="email" class="form-control" placeholder="Email" aria-label="email">
  </div>

  <br>
  <div class="col">
    <input type="password" class="form-control" placeholder="Password" aria-label="password">
  </div>

  <br>
  <div class="col">
    <input type="password" class="form-control" placeholder="Confirmar Password" aria-label="Confirmar password">
  </div>

  <div class="form-check">
    <br>
    <input class="form-check-input" type="checkbox" value="" id="check_aceptar">
    <label class="form-check-label" for="check_aceptar">Acepto los Terminos de Uso & Politicas de Privacidad</label>
  </div>

  <br>
  <div class="d-grid gap-2">
    <button class="btn btn-success" type="submit">Registrar ahora</button>
  </div>
  <br>
</div>
</div>

</main>
</body>
<?php /**PATH /home/efren/Documentos/Proyectos_php/miPrimerWeb/resources/views/cris/reg.blade.php ENDPATH**/ ?>