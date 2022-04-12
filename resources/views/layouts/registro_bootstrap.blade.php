<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport"
      content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Checkout Form</title>
  <link rel="stylesheet"href="{{asset("css/bootstrap.min.css")}}">
  <link rel="stylesheet"href="{{asset("css/style.css")}}">
  <script type="text/text/javascript"src="{{asset("js/bootstrap.min.js")}}"></script>
  <style>
  .card > div{
    background: rgb(255,255,255);
    padding: 20px;
    border: 0.5px solid #646464;
  }
  </style>
</head>
  <body>
      <main class="container">
        <div class="row ">
          <div class="col d-inline-flex justify-content-center mt-5">
            <figure class="figure">
              <img src="{{asset("/images/bootstrap.svg")}}" alt="ethe" class="figure-img img-fluid" width="150" height="150">
            </figure>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <h1>Formulario de pago</h1><br>
          </div>
        </div>

        <div class="row">
          <div class="col-12 d-flex align-items-center justify-content-center text-center">
              <p>
                <h5>A continuación se muestra un formulario de ejemplo creado con los controles de formulario de Bootstrap.Cada grupo de formulario
                  requerido tiene un estado de validación que se puede activar al intentar enviar el formulario sin completarlo.</h5>
              </p>
          </div>
        </div>
        <div class="row mt-5 mb-5">
          <div class="col-7">
            <div class="row">
              <div class="col-12">
                <h2>Dirección de Envio</h2>
              </div>
            </div>
            <form action="">
            <div class="row justify-content-around">
              <div class="col">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="col">
                <label for="last-name" class="form-label">Apellidos</label>
                <input type="text" id="last-name" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col">
                <br>
                <label for="username" class="form-label">Nombre de usuario</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">@</span>
                  <input type="text" id="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="email" class="form-label">Correo electrónico (Opcional)</label>
                <input type="email" id="email" class="form-control" placeholder="you@example.com" ></input>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="adress" class="form-label">Direccion</label>
                <input type="text" id="adress" class="form-control" placeholder="1234 Main St."></input>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="adress2" class="form-label">Direccion 2 (Opcional)</label>
                <input type="text" id="adress2" class="form-control" placeholder="Apartament or suite"></input>
              </div>
            </div>
            <div class="row justify-content-around">
              <div class="col">
                <label for="country" class="form-label">País</label>
                <select class="form-select" id="country">
                  <option selected>Elija</option>
                  <option value="1">México</option>
                  <option value="2">Estados Unidos</option>
                  <option value="3">Canadá</option>
                </select>
              </div>
              <div class="col">
                <label for="form-select" class="form-label">Estado</label>
                <select class="form-select" id="form-select">
                  <option selected>Elija</option>
                  <option value="1">Edo. Mex</option>
                  <option value="2">California</option>
                  <option value="3">Nunavut</option>
                </select>
              </div>
              <div class="col">
                <label for="cp" class="form-label">ZIP</label>
                <input type="text" id="cp" class="form-control"></input>
              </div>
            </div>
          </form>
          </div>
          <div class="col-5">
            <div class="row">
              <div class="col">
                <h3>Tu carrito</h3>
                <div class="d-flex card">
                    <div class="row align-items-center">
                      <div class="col-8 ">
                        <div class="row">
                          <div class="col">
                            <h4>Nombre del producto</h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <h5 class="text-muted">Breve descripción</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <h4 class="text-muted">$12</h4>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-8 ">
                        <div class="row">
                          <div class="col">
                            <h4>Segundo producto</h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <h5 class="text-muted">Breve descripción</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <h4 class="text-muted">$8</h4>
                      </div>
                    </div><div class="row align-items-center">
                      <div class="col-8 ">
                        <div class="row">
                          <div class="col">
                            <h4>Tercer artículo</h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <h5 class="text-muted">Breve descripción</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <h4 class="text-muted">$5</h4>
                      </div>
                    </div><div class="row align-items-center">
                      <div class="col-8 ">
                        <div class="row">
                          <div class="col">
                            <h4 class="text-success">Código promocional</h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <h5 class="text-success">2*1</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <h4 class="text-success">-$5</h4>
                      </div>
                    </div><div class="row align-items-center">
                      <div class="col-8 ">
                        <div class="row">
                          <div class="col">
                            <h4>Total (USD)</h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <h4>$20</h4>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                        <div class="input-group mb-3 input-group-lg">
                        <input type="text" class="form-control" placeholder="Código de promoción" aria-label="Recipient's username" >
                        <button class="btn btn-secondary text-white" type="button" id="button-addon2">Canjear</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
  </body>
</html>
