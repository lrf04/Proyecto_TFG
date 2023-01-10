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
          <a class="navbar-brand" href="#">App</a>
          <div class="collapse navbar-collapse mr-auto" id="collapsibleNavbar">
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

      @auth


      <div class="container mt-5">
        <div class="row">
            <div class="col-sm">
              <div>
                <div class="button">
                    <a href=""><button class="btn btn-primary" style="background-color:#8EC3B0;float: left;">Importar curso</button></a>
                </div>
              </div>
            </div>
            <div class="col-sm"></div>
            <div class="col-sm"></div>
            <div class="col-sm">
              {{-- Hay que añadir el curso a la ruta --}}
                <div>
                    <div class="button">
                      <a href="{{route('students.create')}}"><button type="button" class="btn btn-success">Añadir alumno</button></a>
                    </div>
                </div>
            </div>
        </div>

        <table class="table">
            <thead style="background-color:#9ED5C5">
              <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Descripcion</th>
                <th>TDAH</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->surname}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->description}}</td>
                        <td>{{$student->tdah}}</td>
                        <td><a href="{{route('students.show',$student)}}" class="btn btn-success" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                                </svg>
                                Configuraciones
                            </a>
                            <form method="POST" action="{{route('students.destroy',$student)}}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                  </svg>
                                  Eliminar
                              </button>

                            </form>
                            

                            {{-- <button class="btn btn-success" type="submit" onClick="deleteStudent()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                                Eliminar
                            </button> --}}
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
          
      </div>

     {{-- <form action="{{route('students.destroy',$student)}}" method="POST" id="formDeleteStudent">
        @csrf
        @method('DELETE')
     </form> 

      @push('js')
        <script>
            function deleteStudent(){
                form=document.getElementById('formDeleteStudent');
                form.submit();
            }
        </script>
      @endpush --}}

      
      
   @endauth

   @guest
    <div class="container">
      <h1>Debes iniciar sesión</h1>
   @endguest
    
</body>
</html>