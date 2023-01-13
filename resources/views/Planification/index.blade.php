<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <style>
        td{
            font-size: 25px;
        }
        th{
            font-size: 30px;
        }
        .añadirAño{
            margin-left: 500px;
        }
        .añadirCurso{
            margin-left: 500px;
        }
    </style>
</head>

<body style="background-color:#DEF5E5;">
    <!--Barra de navegación-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">App</a>
          
          

          <div class="d-flex">
            <div class="collapse navbar-collapse ml-auto" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item"><span></span>
                    <div class="logout">
                        <a href="/logout">
                          <button style="background-color:rgb(32, 30, 30)" ><i class="bi bi-box-arrow-right" href="#"></i></button>
                        </a>  
                        
                      </div>
                  </li> 
                </ul>
              </div>
          </div>
        </div>
      </nav>

      @auth

    <!--Contenido-->
    <div class="row">
        
      {{-- @if (!empty($planifications))
          <h2>No hay planificación.</h2>
          <h3>Pulse el botón para añadir una.</h3>
          <a href="{{route('planifications.crearPlanificacion',$course)}}" class="btn btn-primary">Crear planificación.</a>
      @else --}}
          <!--Cursos-->
          <div class="col-sm">
              <h1>Planificación del curso {{$planifications->first()->course()->get()->first()->name}}</h1>
              <div class="container">
                          @foreach($planifications as $planification)
                          <div class="card" style="width:400px">
                              <img class="card-img-top" src="{{ asset('img/planificacion.png') }}" alt="Card image" style="width:100%">
                              <div class="card-body">
                                <h4 class="card-title">{{$planification->course()->get()->first()->name}}</h4>
                                <p class="card-text">Aquí puede acceder a los días.</p>
                                <a href="{{route('planifications.show',$planification)}}" class="btn btn-primary">Acceder</a>
                                <form method="POST" action="{{route('planifications.destroy',$planification)}}">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                      </svg>
                                      Eliminar
                                  </button>
                                </form>
                              </div>
                            </div>
                          @endforeach
                      
                  </div>
                  
              </div>
          </div>

        {{-- @endif --}}

        <!--En blanco-->
        <div class="col-sm"></div>
    </div>
      
      
      
   @endauth

   @guest
    <div class="container">
      <h1>Debes iniciar sesión</h1>
   @endguest
    
</body>
</html>