<?php
    require_once "conexion.php";

    class actualizar extends DatabaseConnection{
        public function update($nombre,$apellido,$direccion,$telefono,$email,$ciudad){
            $conexion = parent::conectar();
            $sql= "UPDATE autor SET (nombre,apellido,direccion,telefono,email,ciudad) VALUES (?,?,?,?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssssss',$nombre,$apellido,$direccion,$telefono,$email,$ciudad);
            return $query->execute(); 
        }
    }