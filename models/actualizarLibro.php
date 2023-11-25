<?php
    require_once "conexion.php";

    class actualizarLibro extends DatabaseConnection{
        public function update($nombreLibro, $autorLibro){
            $conexion = parent::conectar();
            $sql= "UPDATE libro SET (nombreLibro, autorLibro)VALUES (?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ss', $nombreLibro, $autorLibro);
            return $query->execute(); 
        }
    }