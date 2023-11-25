<?php
    require_once "conexion.php";

    class auth extends DatabaseConnection{
        public function registrar($nameUser,$lastname,$passwordUser,$email){
            $conexion = parent::conectar();
            $sql = "INSERT INTO usuario (nameUser , lastname , passwordUser , email) VALUES (?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssss',$nameUser,$lastname,$passwordUser,$email);
            return $query->execute();
        }
    }