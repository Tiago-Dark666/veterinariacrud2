<?php
require_once "models/conexion.php";

if (isset($_POST["bottonUpdateVet"])) {
    $id_vet = $_GET['id'];
    $nameVet = $_POST['nameVet']; 
    $lastnameVet = $_POST['lastnameVet']; 
    $passwordVet = $_POST['passwordVet']; 
    $ciudadVet = $_POST['ciudadVet']; 
    $especializacionVet = $_POST['especializacionVet']; 
    $tienda = $_POST['tienda']; 
    if (!empty($nameVet) && !empty($lastnameVet ) && !empty($passwordVet ) && !empty($ciudadVet ) && !empty($especializacionVet ) && !empty($tienda )) {
        $conexion = new DatabaseConnection();
        $db = $conexion->conectar();
        
        $sql = "UPDATE vetuser SET nameVet=?, lastnameVet=?, passwordVet=?, ciudadVet=?, especializacionVet=?, tienda=? WHERE id_vet=?";
        $query = $db->prepare($sql);
        $query->bind_param('ssssssi', $nameVet,$lastnameVet,$passwordVet,$ciudadVet,$especializacionVet,$tienda, $id_vet);

        if ($query->execute()) {
           
            header("Location: ../Home.html");
            exit();
        } else {
            echo "Error al actualizar los datos: " . $query->error;
        }
    } else {
        echo "Campos vacíos";
    }
}
?>
