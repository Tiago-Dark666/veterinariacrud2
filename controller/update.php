<?php
require_once "models/conexion.php";

if (isset($_POST["bottonUpdate"])) {
    $id_user = $_GET['id'];  // Cambiado a $_GET['id'] ya que estás obteniendo el ID desde la URL
    $nameUser = $_POST['nameUser']; 
    $lastname = $_POST['lastname']; 
    $passwordUser = $_POST['passwordUser']; 
    $email = $_POST['email']; 
    


    if (!empty($nameUser) && !empty($lastname) && !empty($passwordUser) && !empty($email) ) {
        $conexion = new DatabaseConnection();
        $db = $conexion->conectar();
        
        $sql = "UPDATE usuario SET  nameUser=?, lastname=?, passwordUser=?, email=? WHERE id_user=?";
        $query = $db->prepare($sql);
        $query->bind_param('ssssi', $nameUser, $lastname, $passwordUser, $email, $id_user);

        if ($query->execute()) {
            // Redirigir a la página principal u otra página de tu elección
            header("location: main.php");
            exit();
        } else {
            echo "Error al actualizar los datos: " . $query->error;
        }
    } else {
        echo "Campos vacíos";
    }
}
?>
