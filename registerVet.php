<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<?php include("./view/templates/header.php")?>
 <div class="container">
    <form action="controller/registrarVet.php" method="post" class="formulario">
                <h2>Registrar Usuario</h2>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nameVet" name="nameVet" placeholder="myusername" required autofocus>
                <label for="nameVet">Nombre</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lastnameVet" name="lastnameVet" placeholder="name@example.com">
                <label for="lastnameVet">Apellido</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="passwwordVet" name="passwordVet" placeholder="cra94example">
                <label for="passwordVet">Contraseña</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="ciudadVet" name="ciudadVet" placeholder="cra94example">
                <label for="ciudadVet">Ciudad</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="especializacionVet" name="especializacionVet" placeholder="cra94example">
                <label for="especializacionVet">Especializacion</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="tienda" name="tienda" placeholder="cra94example">
                <label for="tienda">Tienda</label>
              </div>
           
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
              </div>

                    <a href="main.php">Volver</a>

                 </div>
    </form>
</div> 
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>