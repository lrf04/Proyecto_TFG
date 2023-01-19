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
        

        <!--Cursos-->
        <div class="col-sm">
            <h1>Periodos</h1>
            <div class="container">
               <div class="añadirCurso">
                    <a href="{{route('periods.crearPeriodos',$periods->first())}}"><button type="button" class="btn btn-success">Añadir periodo</button></a>
                </div>

                {{-- Tabla cursos --}}
                <div class="container1">       
                    <table class="table table-hover">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>Hora</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($periods as $period)
                        <tr>
                            <td>{{$period->id}}</td>
                            <td>{{$period->time}}</td>
                            <td><form method="POST" action="{{route('periods.destroy',$period)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                    Eliminar
                                </button>
                              </form>
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