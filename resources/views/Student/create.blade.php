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
</head>

<body style="background-color:#DEF5E5;">
    <!--Barra de navegación-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">App</a>

          <div class="collapse navbar-collapse mr-auto" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item"><span></span>
                <div class="logout">
                  <a href="elegirAño.html" class="nav-link">Menú principal</a>
                  </div>
              </li> 
            </ul>
          </div>
          
          

          <div class="d-flex">
            <div class="collapse navbar-collapse ml-auto" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item"><span></span>
                    <div class="logout">
                        <button style="background-color:rgb(32, 30, 30)" ><i class="bi bi-box-arrow-right" href="#"></i></button>
                      </div>
                  </li> 
                </ul>
              </div>
          </div>
        </div>
    </nav>

    
        <div class="mt-5 container">
            <form action="{{route('students.store')}}"
            method="POST">
            @csrf
                <div class="row">
                    <div class="col">
                        <h3>Datos</h3>
                        
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="nombre" name="name" value="name">
                            <label for="surname">Apellidos</label>
                            <input type="text" class="form-control" id="surname" placeholder="apellidos" name="surname" value="surname">
                            <label for="age">Edad</label>
                            <input type="text" class="form-control" id="age" placeholder="Edad" name="age" value="age">
                            <label for="tdah">TDAH</label>
                            <input type="number" class="form-control" id="tdah" placeholder="tdah" name="tdah" value="tdah">
                    </div>

                    <div class="col">
                        <h3>Información</h3>
                            <label for="description">Descripcion</label>
                            <input type="text" class="form-control" id="description" placeholder="Descripcion" name="description" value="description">
                            <label for="hobbies">Aficiones</label>
                            <input type="text" class="form-control" id="hobbies" placeholder="Aficiones" name="hobbies" value="hobbies">

                            <input type="hidden" class="form-control" id="course_id" placeholder="" name="course_id" value="">
                            <button type="submit" class="btn btn-success">Añadir alumno</button>

                    </div>

                {{--  <div class="col">
                        <h3>Amigos</h3>
                        <label>Seleccione los amigos(Presiona la tecla ctrl para seleccionar más de uno)</label>
                        <div>
                            <select class="selectpicker" multiple\  >
                                <option>Alumno 1</option>
                                <option>Alumno 2</option>
                                <option>Alumno 3</option>
                            </select>  
                        </div>
                    </div> --}}

                </div>
            </form>
        </div>
</body>
</html>