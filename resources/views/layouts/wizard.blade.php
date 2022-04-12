<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport"
      content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Asistente básico</title>
  <link rel="stylesheet"href="{{asset("css/bootstrap.min.css")}}">
  <link rel="stylesheet"href="{{asset("css/style.css")}}">
  <script type="text/text/javascript"src="{{asset("js/bootstrap.min.js")}}"></script>
</head>
  <body>
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card ">
          <form action="" >
            <div class="row">
              <div class="col"></div>
              <div class="btn-group btn-group-lg mt-4 "  role="group" style="width: 750px" >
                <button type="button" class="btn btn-primary"> Perfil </button>
                <button type="button" class="btn btn-white text-primary"> Direccion</button>
                <button type="button" class="btn btn-white text-primary"> Final</button>
              </div>
              <div class="col"></div>
            </div><br>
            <div class="row align-items-center">

              <div class="col-4 ">
                 <h6 >Nombre</h6>
              </div>
              <div class="col-8 form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">Nombre completo</label>
              </div>
            </div>
            <div class="row  align-items-center">
              <div class="col-4 ">
                 <h6>Correo electrónico</h6>
              </div>
              <div class="col-8 form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo electrónico</label>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-4">
                 <h6>Contraseña</h6>
              </div>
              <div class="col-8 form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">contraseña</label>
              </div>
            </div>
            <div class="row mx-5">
              <div class="col"></div>
              <div class="col">
                <button class="btn btn-primary" type="button" name="button">Anterior</button>
              </div>
              <div class="col"></div>
              <div class="col">
                <button class="btn btn-primary" type="button " name="button">Siguiente</button>
              </div>
                <div class="col"></div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-6">
          <div class="card d-flex justify-content-center">
            <div class="row">
              <div class="col"></div>
              <div class="btn-group btn-group-lg mt-4 "  role="group" style="width: 750px" >
                <button type="button" class="btn btn-white text-primary"> Perfil </button>
                <button type="button" class="btn btn-primary"> Direccion</button>
                <button type="button" class="btn btn-white text-primary"> Final</button>
              </div>
              <div class="col"></div>
            </div><br>
            <div class="row align-items-center">
              <br>
              <div class="col">
                <h6>Estado</h6>
              </div>
              <div class="col-8">
                  <label for="state" class="form-label"></label>
                  <select class="form-select" id="state">
                  <option selected>Elija</option>
                  <option value="1">México</option>
                  <option value="2">Michoacan</option>
                  <option value="1">Cuidad de México</option>
                </select>
              </div>
            </div>
            <div class="row align-items-center">
              <br>
              <div class="col">
                <h6>Dirección</h6>
              </div>
              <div class="col-8">
                <label for="exampleFormControlTextarea1"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-2">
                <button class="btn btn-primary" type="button" name="button">Primero</button>
              </div>
              <div class="col-2">
                <button class="btn btn-primary" type="button" name="button">Previo</button>
              </div>
              <div class="col-4">

              </div>
              <div class="col-2">
                <button class="btn btn-primary" type="button" name="button">Ultimo</button>
              </div>
              <div class="col-2">
                <button class="btn btn-primary" type="button" name="button">Siguiente</button>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
          <div class="card mt-5">
            <div class="row">
              <div class="col"></div>
              <div class="btn-group btn-group-lg mt-4 "  role="group" style="width: 750px" >
                <button type="button" class="btn btn-white text-primary"> Perfil </button>
                <button type="button" class="btn btn-white text-primary"> Direccion</button>
                <button type="button" class="btn btn-primary"> Final</button>
              </div>
              <div class="col"></div>
            </div><br>
              <div class="row">
                <div class="col">
                  <figure class="figure">
                      <img src="{{asset("/images/registro_exitoso.png")}}" alt="palomita" class="figure-img img-fluid" width="1000" height="300">
                  </figure>
                </div>
              </div>
              <div class="row text-center">
                <div class="col ">
                  <h6 class="text-muted">Lorem ipsum is simply dummy text of the printing</h6>
                </div>
              </div>
              <div class="row">
                <div class="col"></div>
                <div class="col">
                  <div class="form-check ">
                    <input class="form-check-input" type="checkbox" value="" id="check_aceptar">
                    <label class="form-check-label" for="check_aceptar">
                        Suscribirse al boletín informativo
                    </label>
                  </input>
                  </div>
                </div>
                <div class="col"></div>
              </div>
              <div class="row mx-5">
                <div class="col"></div>
                <div class="col">
                  <button class="btn btn-primary" type="button" name="button">Anterior</button>
                </div>
                <div class="col"></div>
                <div class="col">
                  <button class="btn btn-primary" type="button " name="button">Siguiente</button>
                </div>
                  <div class="col"></div>
              </div>
          </div>
      </div>
      <div class="col-6">
          <div class="card mt-5">
            <div class="row">
              <div class="col"></div>
              <div class="btn-group btn-group-lg mt-4 "  role="group" style="width: 750px" >
                <button type="button" class="btn btn-primary"> Perfil </button>
                <button type="button" class="btn btn-white text-primary"> Direccion</button>
                <button type="button" class="btn btn-white text-primary"> Final</button>
              </div>
              <div class="col"></div>
            </div><br>
                <div class="row align-items-center">

                  <div class="col-4 ">
                     <h6 >Nombre</h6>
                  </div>
                  <div class="col-8 form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="">
                    <label for="floatingInput">Nombre completo</label>
                  </div>
                </div>
                <div class="row  align-items-center">
                  <div class="col-4 ">
                     <h6>Correo electrónico</h6>
                  </div>
                  <div class="col-8 form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Correo electrónico</label>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-4">
                     <h6>Contraseña</h6>
                  </div>
                  <div class="col-8 form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">contraseña</label>
                  </div>
                </div>
                <div class="row mx-5">
                  <div class="col"></div>
                  <div class="col">
                    <button class="btn btn-primary" type="button" name="button">Anterior</button>
                  </div>
                  <div class="col"></div>
                  <div class="col">
                    <button class="btn btn-primary" type="button " name="button">Siguiente</button>
                  </div>
                    <div class="col"></div>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </body>
</html>
