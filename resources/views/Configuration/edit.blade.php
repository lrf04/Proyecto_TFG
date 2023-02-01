<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
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

      <h1>Configuración Alumno</h1>
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-6">
            <!--Umbrales-->
            <div class="umbrales">
              <h3>Umbrales</h3>
              <form action="{{route('configurations.update',$configuration)}}" 
                method="POST">

                @method('PUT')
                @csrf

                <div class="row">
                  <div class="col">
                    Ritmo cardíaco:
                  </div>
                  <div class="col">
                    <label for="lower_heart_rate">inferior:</label>
                    <input type="text" class="form-control" placeholder="ppm" name="lower_heart_rate" id="lower_heart_rate" value="{{old('lower_heart_rate',$configuration->lower_heart_rate)}}">
                  </div>
                  <div class="col">
                    <label for="higher_heart_rate">superior:</label>
                    <input type="text" class="form-control" placeholder="ppm" name="higher_heart_rate" id="higher_heart_rate" value="{{old('higher_heart_rate',$configuration->higher_heart_rate)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Movimiento:
                  </div>
                  <div class="col">
                    <label for="movement_monitoring_time">Tiempo monitorización:</label>
                    <input type="text" class="form-control" placeholder="min" name="movement_monitoring_time" id="movement_monitoring_time" value="{{old('movement_monitoring_time',$configuration->movement_monitoring_time)}}">
                  </div>
                  <div class="col">
                    <label for="movement_percentage">Porcentaje diferencia:</label>
                    <input type="text" class="form-control" placeholder="%" name="movement_percentage" id="movement_percentage" value="{{old('movement_percentage',$configuration->movement_percentage)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Sin movimiento:
                  </div>
                  <div class="col">
                    <label for="no_movement_monitoring_time">Tiempo monitorización:</label>
                    <input type="text" class="form-control" placeholder="min" name="no_movement_monitoring_time" id="no_movement_monitoring_time" value="{{old('no_movement_monitoring_time',$configuration->no_movement_monitoring_time)}}">
                  </div>
                  <div class="col">
                    <label for="no_movement_percentage">Porcentaje diferencia:</label>
                    <input type="text" class="form-control" placeholder="%" name="no_movement_percentage" id="no_movement_percentage" value="{{old('no_movement_percentage',$configuration->no_movement_percentage)}}">
                  </div>
                </div>
              

              

              
            </div>


            <!--Clase-->
            <div class="clase">
              <h3>Clase</h3>
              
                <div class="row">
                  <div class="col">
                    Ritmo alto:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="higher_rate" id="higher_rate" value="{{old('higher_rate',$configuration->higher_rate)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Ritmo bajo:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="lower_rate" id="lower_rate" value="{{old('lower_rate',$configuration->lower_rate)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Movimiento bajo:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="lower_movement" id="lower_movement" value="{{old('lower_movement',$configuration->lower_movement)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Movimiento alto:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="higher_movement" id="higher_movement" value="{{old('higher_movement',$configuration->higher_movement)}}">
                  </div>
                </div>
              

            </div>


            <!--Patio-->
            <div class="patio">
              <h3>Patio</h3>
              
                <div class="row">
                  <div class="col">
                    Proximidad y tiempo:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="metros" name="proximity" id="proximity" value="{{old('proximity',$configuration->proximity)}}">
                  </div>

                  <div class="col">
                    <input type="text" class="form-control" placeholder="segundos" name="time" id="time" value="{{old('time',$configuration->time)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Proximidad baja y ritmo alto:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="lower_proximity_higher_rate" id="lower_proximity_higher_rate" value="{{old('lower_proximity_higher_rate',$configuration->lower_proximity_higher_rate)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Proximidad baja y ritmo bajo:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="lower_proximity_lower_rate" id="lower_proximity_lower_rate" value="{{old('lower_proximity_lower_rate',$configuration->lower_proximity_lower_rate)}}">
                  </div>
                </div>

                
                <div class="row">
                  <div class="col">
                    Proximidad alta y tiempo bajo:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="higher_proximity_lower_time" id="higher_proximity_lower_time" value="{{old('higher_proximity_lower_time',$configuration->higher_proximity_lower_time)}}">
                  </div>
                </div>

                

                <!-- <div class="row">
                  <div class="col">
                    Proximidad baja y movimiento alto:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="respuestaMovimientoBajo">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Proximidad baja y movimiento bajo:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="respuestaMovimientoAlto">
                  </div>
                </div> -->
              

            </div>

            
            
          </div>

          <div class="col-sm-6">
            <div class="boton">
              <button type="submit" class="btn btn-success" data-toggle="tooltip" title="Confirmar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"></path>
                </svg>
                Guardar
              </button>
            </div>

            <!--Clase a la derecha-->
            <div class="claseDerecha">
              
                <div class="row">
                  <div class="col">
                    Ritmo y movimiento alto:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="higher_rate_movement" id="higher_rate_movement" value="{{old('higher_rate_movement',$configuration->higher_rate_movement)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Ritmo y movimiento bajo:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="lower_rate_movement" id="lower_rate_movement" value="{{old('lower_rate_movement',$configuration->lower_rate_movement)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Ritmo alto y movimiento bajo:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="higher_rate_lower_movement" id="higher_rate_lower_movement" value="{{old('higher_rate_lower_movement',$configuration->higher_rate_lower_movement)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Ritmo bajo y movimiento alto:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="lower_rate_higher_movement" id="lower_rate_higher_movement" value="{{old('lower_rate_higher_movement',$configuration->lower_rate_higher_movement)}}">
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Sin movimiento:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="no_movement" id="no_movement" value="{{old('no_movement',$configuration->no_movement)}}">
                  </div>
                </div>
              </form>
            </div>


            <!--Patio-->
            <!-- <div class="patioDerecha">
              <form>
                <div class="row">
                  <div class="col">
                    Proximidad alta y tiempo bajo:
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Introduce tu respuesta" name="respuestaProixmidadAltaTiempoBajo">
                  </div>
              </form>

            </div> -->

            

        </div>
      </div>

@endauth

@guest
    <div class="container">
      <h1>Debes <a href="/login">iniciar sesión</a></h1>
   @endguest




</body>

</html>