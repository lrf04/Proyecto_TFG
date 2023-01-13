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
      <div class="container">
        <h1>Años</h1>
        <div class="añadirAño">
            <a href="{{route('academicCourses.create')}}"><button type="button" class="btn btn-success">Añadir año</button></a>
        </div>
        

        <div class="container1">       
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Nombre</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($academicCourses as $academicCourse)
                  <tr>
                    <td>{{$academicCourse->id}}</td>
                    <td>{{$academicCourse->name}}</td>
                    <td><a href="{{route('academicCourses.show',$academicCourse)}}"><button type="button" class="btn btn-success">Seleccionar</button></a></td>
                    <td>{{auth()->user()->id}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
      </div>
      
      
      
   @endauth

   @guest
    <div class="container">
      <h1>Debes iniciar sesión</h1>
   @endguest
    
</body>
</html>
