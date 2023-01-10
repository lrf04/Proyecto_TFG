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

        
    
      <div class="container2 border border-dark">
        <h2>Introduce el año a añadir</h2>
        <form action="{{route('academicCourses.store')}}"
        method="POST">
            @csrf
            <div class="mb-3 mt-3">
              <input type="text" class="form-control" id="name" placeholder="Anio" name="name" value="name">
            </div>
            <button type="submit" class="btn btn-success">Añadir año</button>
          </form>

      </div>
      
      
      
   
    
</body>
</html>