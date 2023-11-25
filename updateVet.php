<body>
<?php include("./view/templates/header.php")?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
<?php
    require_once "models/conexion.php"; // Incluye el archivo de conexión
    $dbConnection = new DatabaseConnection();
    $conexion = $dbConnection->conectar();

    // Verifica si se ha enviado el formulario
    if (isset($_POST["bottonUpdateVet"])) {
        include "controller/updateVet.php"; // Incluye el controlador de actualización
    }
    
    $id_vet = $_GET['id'];
    $sql = $conexion->query("SELECT * FROM vetuser WHERE id_vet = $id_vet");
    $datos = $sql->fetch_object();
?>
<div class="card-body p-4 p-sm-5">
          <form  class="col-4 p-3 m-auto" method="post">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Modificar libro</h5>
            <div class="form-floating mb-3">
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
           
                  <div class="">
                    <button class="btn btn-primary" name="bottonUpdateVet" type="submit">Actualizar</button>
                  </div>
    
                </form>
              </div>
             </div>
 </body>
<!-- Aquí va el resto de tu código HTML y el formulario -->
<!-- Similar a lo que tenías antes, solo con el valor de los campos obtenido de $datos -->



<?php
    // Cierre de la conexión a la base de datos
    $conexion->close();
?>
