
<?php require_once("view/templates/header.php")?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/37cc17c93d.js" crossorigin="anonymous"></script>
<div class="col-8 p-4">
<table class="table table-dark table-striped">
  <thead >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Especializacion</th>
      <th scope="col">Tienda</th>

    </tr>
  </thead>
  <tbody>
    <?php include "models/conexion.php";
    

    // Crear una instancia de conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'veterinariaphp');

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Realizar la consulta SQL
    $sql = $conexion->query("SELECT * FROM vetuser");

    if ($sql) {
        while ($datos = $sql->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $datos->id_vet . "</td>";
            echo "<td>" . $datos->nameVet. "</td>";
            echo "<td>" . $datos->lastnameVet . "</td>";
            echo "<td>" . $datos->passwordVet . "</td>";
            echo "<td>" . $datos->ciudadVet . "</td>";
            echo "<td>" . $datos->especializacionVet . "</td>";
            echo "<td>" . $datos->tienda . "</td>";

            echo "<td><a href='controller/borrarVet.php?id=".$datos->id_vet ."'><i class='fa-solid fa-trash'></i></a>";
            echo "<a href='updateVet.php?id=". $datos->id_vet ."'><i class='fa-solid fa-user-pen'></i></a></td>";
            echo "</tr>"; // Cierra la etiqueta <tr> para cada fila de datos
            echo "</tr>";
        }
    } else {
        echo "Error en la consulta: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
?>

  </tbody>
</table>
    
</div>