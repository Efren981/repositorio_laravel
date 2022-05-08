@extends('layouts.app')
@section("reaction_type")
  active
  @endsection

  @section('content')

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <link rel="stylesheet"href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet"href="{{asset("css/style.css")}}">
    <script type="text/text/javascript"src="{{asset("js/bootstrap.min.js")}}"></script>
  </head>
    <body>
      <div class="container">
        <h1 class="h1 alert alert-primary text-center">Reacciones</h1>

        <div class="row g-5 d-flex justify-content-center">
                      <div class="col">
                            <figure class="figure">
                              <img src="{{asset("/images/noche.svg")}}" alt="ethe" class="figure-img img-fluid" style="width:200%">
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
                        @foreach($datos as $reaction)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$reaction->description}}</td>
                            <td><a href="{{route("tipos_reacciones.edit",$reaction->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar reaccion"><span class="icon-compose">Editar</span></a></td>
                            <td><form action="{{route("tipos_reacciones.destroy",$reaction->id)}}" method="post">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta reaccion"><span class="icon-bin">Eliminar</span></button>
                            </form></td>
                        </tr>

                        @endforeach
                        </tbody>
                        </table>
                     </div>
                     <div class="col">
                       <div class="row">
                         <div class="col">
                           <a href="{{url("tipos_reacciones/create")}}" class="btn btn-dark mb-4 text-white"data-toggle="tooltip" title="Insertar nueva reaccion"><span class="icon-pen"> Nuevo</span></a>
                         </div>
                       </div>
                     </div>
                   </div>
      </div>
    </body>
  </html>


  @endsection
