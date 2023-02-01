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
        table{
            margin-top: 40px;
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

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"> <a href="{{route('academicCourses.index')}}">Cursos académicos</a></li>
          <li class="breadcrumb-item"> <a href="{{route('academicCourses.show',$course1->academicCourse)}}">Cursos</a></li>
          <li class="breadcrumb-item"> <a href="{{route('courses.show',$course1)}}">Alumnos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Importar curso</li>
        </ol>
      </nav>
      <h2>
        Selecciona el curso que deseas importar a {{$course1->name}}
      </h2>
      <div class="container1">       
        <table class="table table-hover">
        <thead>
            <tr>
            <th>Nombre</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->name}}</td>
                <td><a href="{{route('imports.importar',[$course,$course1])}}" data-toggle="tooltip" title="Importar este curso"><button type="button" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                        <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                        <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                      </svg>
                    Seleccionar
                  </button></a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
        </table>
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