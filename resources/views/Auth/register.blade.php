<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous"/>
</head>

<body class="m-0 row justify-content-center background-color=green" style="background-color:#DEF5E5;">
    <div class="col-auto p-5">
        
            <h2 class="text-center">Bienvenido a tu app</h2>
            

            <h3 class="text-center">Registro de usuario</h3>

            <form action="/register" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" placeholder="Introduce email" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="username">Username *</label>
                    <input type="text" class="form-control" id="username" placeholder="Introduce nombre de usuario" name="username">
                </div>
                <div class="mb-3">
                    <label for="password">Contraseña *</label>
                    <input type="password" class="form-control" id="password" placeholder="Introduce contraseña" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation">Confirmar contraseña *</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirma contraseña" name="password_confirmation">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary" style="background-color:#8EC3B0;" value="Registrarse">Registrarse</button>
                </div>
                
            </form>
        

    </div>
    
</body>
</html>