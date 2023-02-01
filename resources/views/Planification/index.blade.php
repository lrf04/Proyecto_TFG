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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

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
        footer {
            
            bottom: 0;
            width: 100%;
            height: 60px;
            color: white;
            text-align: center;
            background-color: rgb(51,51,51);
            margin-top: auto;
        }
        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>

<body style="background-color:#DEF5E5;">
    <!--Barra de navegación-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('academicCourses.index')}}">Menú principal</a>
        
        

        <div class="d-flex">
          <div class="collapse navbar-collapse ml-auto" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item"><span></span>
                  <div class="logout">
                      
                      <a href="/logout" class="btn btn-dark" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                          <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                        Salir
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
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"> <a href="{{route('academicCourses.index')}}">Cursos académicos</a></li>
          <li class="breadcrumb-item"> <a href="{{route('academicCourses.show',$course->academicCourse)}}">Cursos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Planificación</li>
        </ol>
      </nav>
      
          <!--Cursos-->
          <div class="col-sm">
              <h1>Planificación del curso {{$course->name}}</h1>
              <div class="añadirCurso">
                <a href="{{route('planifications.crearPlanificacion',$course)}}" data-toggle="tooltip" title="Crear una nueva planificación" class="btn btn-success">Crear planificación.</a>
            </div>
              <div class="container">
                          @foreach($planifications as $planification)
                          <div class="card" style="width:400px">
                              <img class="card-img-top" src="{{ asset('img/planificacion.png') }}" alt="Card image" style="width:100%">
                              <div class="card-body">
                                <h4 class="card-title">{{$planification->course()->get()->first()->name}}</h4>
                                <p class="card-text">Aquí puede acceder a los días.</p>
                                <a href="{{route('planifications.show',$planification)}}" class="btn btn-primary" data-toggle="tooltip" title="Ver los días de la planificación">Acceder</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{$planification->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                  </svg> 
                                  Eliminar
                                </button> 
          
          
                                  <div class="modal" id="myModal{{$planification->id}}">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
          
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <h4 class="modal-title">¿Desea eliminar?</h4>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
          
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                          Si pulsa el siguiente botón, se eliminará la planificación. Si cierra esta ventana, no se eliminará.
                                        </div>
          
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                          <form method="POST" action="{{route('planifications.destroy',$planification)}}" data-toggle="tooltip" title="Eliminar esta planificación">
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
                                    </div>
                                  </div> 
                                
                                
                                

                                

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
      <h1>Debes <a href="/login">iniciar sesión</a></h1>
   @endguest
    
</body>

<footer>
  <p>Autor: Luis Ruiz Flores<br>
  <a href="mailto:luis.ruiz2@alu.uclm.es">luis.ruiz2@alu.uclm.es</a></p>
</footer>
</html>