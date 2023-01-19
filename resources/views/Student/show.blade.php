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

      <div class="container mt-5">
        <div class="row">
            <div class="col-sm">
              
            </div>
            <div class="col-sm"></div>
            <div class="col-sm"></div>
            <div class="col-sm">


            {{-- @foreach($configurations as $configuration)
              {{$student_id = $configuration->student_id}}
            @endforeach --}}
                <div>
                    <div class="button">
                      <a href="{{route('configurations.create')}}"><button type="button" class="btn btn-success">Añadir configuracion</button></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <table class="table">
            <thead style="background-color:#9ED5C5">
              <tr>
                <th>Umbral ritmo cardiaco bajo</th>
                <th>Umbral ritmo cardiaco alto</th>
                <th>Tiempo monitorizacion</th>
                <th>Porcentaje movimiento</th>
                <th>Tiempo monitorizacion sin movimiento</th>
                <th>Porcentaje sin movimiento</th>
                <th>Ritmo elevado</th>
                <th>Ritmo bajo</th>
                <th>Movimiento bajo</th>
                <th>Movimiento alto</th>
                <th>Movimiento y ritmo altos</th>
                <th>Movimiento y ritmo bajos</th>
                <th>Ritmo alto y movimiento bajo</th>
                <th>Ritmo bajo y movimiento alto</th>
                <th>Sin movimiento</th>
                <th>Proximidad</th>
                <th>Tiempo</th>
                <th>Baja proximidad y ritmo alto</th>
                <th>Baja proximidad y ritmo bajo</th>
                <th>Proximidad alta y tiempo bajo</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($configurations as $configuration)
                    <tr>
                        <td>{{$configuration->lower_heart_rate}}</td>
                        <td>{{$configuration->higher_heart_rate}}</td>
                        <td>{{$configuration->movement_monitoring_time}}</td>
                        <td>{{$configuration->movement_percentage}}</td>
                        <td>{{$configuration->no_movement_monitoring_time}}</td>
                        <td>{{$configuration->no_movement_percentage}}</td>
                        <td>{{$configuration->higher_rate}}</td>
                        <td>{{$configuration->lower_rate}}</td>
                        <td>{{$configuration->lower_movement}}</td>
                        <td>{{$configuration->higher_movement}}</td>
                        <td>{{$configuration->higher_rate_movement}}</td>
                        <td>{{$configuration->lower_rate_movement}}</td>
                        <td>{{$configuration->higher_rate_lower_movement}}</td>
                        <td>{{$configuration->lower_rate_higher_movement}}</td>
                        <td>{{$configuration->no_movement}}</td>
                        <td>{{$configuration->proximity}}</td>
                        <td>{{$configuration->time}}</td>
                        <td>{{$configuration->lower_proximity_higher_rate}}</td>
                        <td>{{$configuration->lower_proximity_lower_rate}}</td>
                        <td>{{$configuration->higher_proximity_lower_time}}</td>
                        
                        <td><a href="{{route('configurations.edit',$configuration)}}" class="btn btn-success" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                                </svg>
                                Editar
                            </a>

                            <form method="POST" action="{{route('configurations.destroy',$configuration)}}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-success">
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
          </table> --}}
          <div style="display: none;">{{$contador=1}};</div>
          @foreach($configurations as $configuration)
          
            <div class="card" style="width:300px">
              <img class="card-img-top" src="{{ asset('img/configuracion.png') }}" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">Configuracion {{$contador}} </h4>
                <p class="card-text">Puedes editar o eliminar esta configuracion</p>
                
                <a href="{{route('configurations.edit',$configuration)}}" class="btn btn-primary" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                  </svg>
                  Editar
              </a>
              <form method="POST" action="{{route('configurations.destroy',$configuration)}}">
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
            <div style="display: none;">{{$contador=$contador+1}};</div>
          @endforeach
          
      </div>

     {{-- <form action="{{route('students.destroy',$student)}}" method="POST" id="formDeleteStudent">
        @csrf
        @method('DELETE')
     </form>  --}}

      

      @endauth

      @guest
    <div class="container">
      <h1>Debes iniciar sesión</h1>
   @endguest
      
   
    
</body>
</html>