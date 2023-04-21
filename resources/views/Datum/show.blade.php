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
        .contenedor{
            display: flex;
            justify-content: center;
        }
        .size{
            width: 330px;
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

      <h2>Esta es la información de {{$student->name}} {{$student->surname}}</h2>

      <div class="contenedor">
        <div class="card" style="width:200px" style="text-align: center;">
          <img class="card-img-top" src="{{ asset('img/avatar.png') }}" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">{{$student->name}} {{$student->surname}}</h4>
            <p class="card-text">Edad:{{$student->age}}   <br>
              Descripción:{{$student->description}} <br>
              Hobbies:{{$student->hobbies}}</p>
          </div>
        </div>
      </div>

        

        <h2>Información del día:</h2>
        <table class="table">
            <thead style="background-color:#9ED5C5">
              <tr>
                <th>Fecha</th>
                <th>Configuración</th>
                <th>Puntuación</th>
                
              </tr>
            </thead>
            <tbody>
                <td>{{$datoBueno->fecha}}</td>
                <td>{{$datoBueno->configuration_id}}</td>
                <td>{{$datoBueno->puntuacion}}</td>
                
            </tbody>
          </table>

          <h3>Información de cada clase</h3>
          <table class="table">
            <thead style="background-color:#9ED5C5">
              <tr>
                <th>Asignatura</th>
                <th>Hora inicio</th>
                <th>Hora final</th>
                <th>Porcentaje tranquilo movimiento</th>
                <th>Porcentaje tranquilo ritmo</th>
                <th>Valoración</th>
                
                
              </tr>
            </thead>
            <tbody>
                @foreach($datosClase as $datoClase)
                  @php
                      $movimiento=($datoClase->total_calmado_movimiento/$datoClase->total_intervalos_movimiento)*100;
                      $ritmo=($datoClase->total_calmado_ritmo/$datoClase->total_intervalos_ritmo)*100;
                  @endphp

                <tr>
                    <th>{{$asignaturas[$loop->index]['name']}}</th>
                    <th>{{$periodos[$loop->index]['time']}}</th>
                    <th>{{$periodos[$loop->index]['timeFinish']}}</th>
                    <th>{{$movimiento}}</th>
                    <th>{{$ritmo}}</th>
                    <th><div class=size>
                      
                      @if ( $movimiento > 90 && $ritmo > 90 )
                        <img src="{{ asset('img/cinco.png') }}" style="width:40%">
                      

                      @elseif ( $movimiento > 70 && $ritmo > 70 )
                        <img src="{{ asset('img/cuatro.png') }}" style="width:40%">

                      @elseif ( $movimiento > 60 && $ritmo > 60 )
                        <img src="{{ asset('img/tres.png') }}" style="width:40%">

                      @elseif ( $movimiento > 50 && $ritmo > 50 )
                        <img src="{{ asset('img/dos.png') }}" style="width:40%">

                      @elseif ( $movimiento > 40 && $ritmo > 40 )
                        <img src="{{ asset('img/una.png') }}" style="width:40%">

                      @else
                        <img src="{{ asset('img"cero.png') }}" style="width:40%">
                      @endif
                    </div>
                    </th>
                    
                </tr>
                @endforeach
                
            </tbody>
          </table>

          <h3>Información del recreo</h3>
          <table class="table">
            <thead style="background-color:#9ED5C5">
              <tr>
                <th>Nombre</th>
                <th>Hora inicio</th>
                <th>Hora final</th>
                <th>Porcentaje movimiento</th>
                <th>Porcentaje quieto</th>
                <th>Pasos</th>
                
                
              </tr>
            </thead>
            <tbody>
                <tr>
                  <th>{{$periodoRecreo1->name}}</th>
                  <th>{{$periodoRecreo->time}}</th>
                  <th>{{$periodoRecreo->timeFinish}}</th>
                  <th>{{($datoRecreo->total_movimiento/$totalRecreo)*100}}</th>
                  <th>{{($datoRecreo->total_no_movimiento/$totalRecreo)*100}}</th>
                  <th>{{$datoRecreo->steps}}</th>
                </tr>
            </tbody>
          </table>








    



      
      
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