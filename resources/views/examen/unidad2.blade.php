<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport"
      content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Examen de la unidad 2</title>
  <link rel="stylesheet"href="{{asset("css/bootstrap.min.css")}}">
  <link rel="stylesheet"href="{{asset("css/style.css")}}">
  <script type="text/text/javascript"src="{{asset("js/bootstrap.min.js")}}"></script>
</head>
  <body class="background">
    <div class="row">
        <div class="col d-flex justify-content-center text-white">
          <div class="card bg-danger mx-3 mt-5" style="height: 110rem;" >
              <h1 class="text-center mx-3 mt-1">ESTADOS UNIDOS MEXICANOS</h1> <br>
              <h3 class="text-center mt-1">REGISTRO CIVIL</h3>
              <div class="card background1 mx-2">
                <p class=" text-center mx-1">En el nombre del estado libre y soberano de Tabasco y como oficial 02 del registro <br>
                  civil en este municipio certifico que en el libro No.0002 de este registro civil  a mi cargo, <br>
                  en la foja 33823 se encuentra asentada el acta No.00245 y que con fecha de registro 00/00/0000 <br>
                  levantada por el C. oficial 02 del registro civil c. ---------- de la localidad de Villa de Tecolutilla del <br>
                  municipio de comalcalco del estado de tabasco, lo cual contiene los sigientes datos:
                </p>
              </div>
              <div class="card background1 mt-3 mx-2">
                <h4 class="text-center">Acta de Nacimiento</h4>
                <div class="row justify-content-center">
                  <div class="col">
                    <form action="">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                             <label for="nombre" class="form-label">Nombre</label>
                             <input type="text" id="nombre" class="form-control">
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                             <label for="ap" class="form-label text">Apellido Paterno</label>
                             <input type="text" id="ap" class="form-control">
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                             <label for="am" class="form-label">Apellido Materno</label>
                             <input type="text" id="am" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                             <label for="dia" class="form-label">Fecha</label>
                             <input type="date" id="dia" class="form-control">
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                             <label for="time1" class="form-label">Hora</label>
                             <input type="time" value="11:45:00" max="22:30:00" min="10:00:00" step="1" id="time1" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row mt-1">
                        <div class="col-6">
                          <label class="mb-1">Presentado  </label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="vivo" value="option1">
                            <label class="form-check-label" for="vivo">Vivo</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="muerto" value="option2">
                            <label class="form-check-label" for="muerto">Muerto</label>
                          </div>
                        </div>
                        <div class="col">
                          <label class="mb-1">Sexo  </label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="man" value="option3">
                            <label class="form-check-label" for="man">Hombre</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="woman" value="option4">
                            <label class="form-check-label" for="woman">Mujer</label>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-1">
                        <div class="col">
                          <div class="mb-3">
                             <label for="born" class="form-label text">Lugar de nacimiento</label>
                             <input type="text" id="born" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row justify-content-center">

                        <div class="col justify-content-center">
                          <label> Comparecio  </label>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">El padre</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">La madre</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio3" value="option1">
                            <label class="form-check-label" for="inlineRadio3">Ambos</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio4" value="option1">
                            <label class="form-check-label" for="inlineRadio4">Registrado</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio5" value="option1">
                            <label class="form-check-label" for="inlineRadio5">Persona distinta</label>
                          </div>
                        </div>
                      </div>
                      <div class="row"><h3 class="text-center">Padres</h3></div>
                      <div class="row">
                        <div class="col-6">
                          <div class="mb-3">
                             <label for="nom1" class="form-label text">Nombre</label>
                             <input type="text" id="nom1" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="e1" class="form-label text">Edad</label>
                             <input type="text" id="e1" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="n1" class="form-label text">Nacionalidad</label>
                             <input type="text" id="n1" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="mb-3">
                             <label for="nom2" class="form-label text">Nombre</label>
                             <input type="text" id="nom2" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="e2" class="form-label text">Edad</label>
                             <input type="text" id="e2" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="n2" class="form-label text">Nacionalidad</label>
                             <input type="text" id="n2" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row"><h3 class="text-center">Abuelos</h3></div>
                      <div class="row">
                        <div class="col-8">
                          <div class="mb-3">
                             <label for="nom3" class="form-label text">Abuelo Paterno</label>
                             <input type="text" id="nom3" class="form-control">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                             <label for="n3" class="form-label text">Nacionalidad</label>
                             <input type="text" id="n3" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-8">
                          <div class="mb-3">
                             <label for="nom4" class="form-label text">Abuela Paterna</label>
                             <input type="text" id="nom4" class="form-control">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                             <label for="n4" class="form-label text">Nacionalidad</label>
                             <input type="text" id="n4" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-8">
                          <div class="mb-3">
                             <label for="nom5" class="form-label text">Abuelo Materno</label>
                             <input type="text" id="nom5" class="form-control">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                             <label for="n5" class="form-label text">Nacionalidad</label>
                             <input type="text" id="n5" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-8">
                          <div class="mb-3">
                             <label for="nom6" class="form-label text">Abuela Materna</label>
                             <input type="text" id="nom6" class="form-control">
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                             <label for="n6" class="form-label text">Nacionalidad</label>
                             <input type="text" id="n5" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row"><h3 class="text-center">Testigos</h3></div>
                      <div class="row">
                        <div class="col-6">
                          <div class="mb-3">
                             <label for="nom7" class="form-label text">Nombre</label>
                             <input type="text" id="nom7" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="e7" class="form-label text">Edad</label>
                             <input type="text" id="e7" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="n7" class="form-label text">Nacionalidad</label>
                             <input type="text" id="n7" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="mb-3">
                             <label for="nom8" class="form-label text">Nombre</label>
                             <input type="text" id="nom8" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="e8" class="form-label text">Edad</label>
                             <input type="text" id="e8" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="n8" class="form-label text">Nacionalidad</label>
                             <input type="text" id="n8" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="mb-3">
                             <label for="certificado" class="form-label text">No. de dertificado de nacimiento</label>
                             <input type="text" id="certificado" class="form-control">
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="mb-3">
                             <label for="crip" class="form-label text">C.R.I.P</label>
                             <input type="text" id="crip" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row"><h3 class="text-center">Persona distinta de los padres que presenta el registro </h3></div>
                      <div class="row">
                        <div class="col-6">
                          <div class="mb-3">
                             <label for="nom9" class="form-label text">Nombre</label>
                             <input type="text" id="nom9" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="e9" class="form-label text">Edad</label>
                             <input type="text" id="e9" class="form-control">
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mb-3">
                             <label for="p1" class="form-label text">Parentesco</label>
                             <input type="text" id="p1" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class=" d-flex justify-content-center mb-5">
                        <button type="submit" class="btn btn-success"><span class="icon-floppy-disk"> Guardar</span></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
