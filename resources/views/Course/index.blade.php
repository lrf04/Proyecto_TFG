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
        <!--Años-->
        <div class="col-sm">
            <div class="container">
                <h1>Años</h1>
                <div class="añadirAño">
                    <a href="{{route('academicCourses.create')}}"><button type="button" class="btn btn-success">Añadir año</button></a>
                </div>
                

                {{-- Tabla años --}}
                <div class="container1">       
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($academicCourses as $academicCourse)
                        <tr>
                            <td>{{$academicCourse->id}}</td>
                            <td>{{$academicCourse->name}}</td>
                            <td><a href="{{route('academicCourses.show',$academicCourse)}}"><button type="button" class="btn btn-success">Seleccionar</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--Cursos-->
        <div class="col-sm">
            <h1>Cursos</h1>
            <div class="container">
                <div class="añadirCurso">
                    <a href="{{route('courses.create')}}"><button type="button" class="btn btn-success">Añadir curso</button></a>
                </div>

                {{-- Tabla cursos --}}
                <div class="container1">       
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->name}}</td>
                            <td><a href="{{route('planifications.planificaciones',$course)}}"><button type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"></path>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                                </svg>
                                Planificación
                              </button></a>
                            </td>
                            <td>
                                <a href="{{route('subjects.asignaturas',$course)}}"><button type="button" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"></path>
                                    </svg>
                                    Asignaturas
                                  </button></a>
                            </td>
                            <td><a href="{{route('courses.show',$course)}}"><button type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"></path>
                                </svg>
                                Alumnos
                              </button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                
            </div>
        </div>

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