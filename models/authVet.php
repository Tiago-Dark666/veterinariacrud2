<?php
    require_once "conexion.php";

    class authLibro extends DatabaseConnection {
        public function registrar($nameVet,$lastnameVet,$passwordVet,$ciudadVet,$especializacionVet,$tienda) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO vetuser (nameVet, lastnameVet, passwordVet, ciudadVet, especializacionVet, tienda) VALUES (?, ?, ?, ? , ? , ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssssss', $nameVet,$lastnameVet,$passwordVet,$ciudadVet,$especializacionVet,$tienda);
            return $query->execute();
        }
    }
?>