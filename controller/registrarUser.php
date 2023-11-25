<?php
   require_once "../models/auth.php";

   $nameUser = $_POST['nameUser']; 
   $lastname = $_POST['lastname']; 
   $passwordUser = $_POST['passwordUser']; 
   $email = $_POST['email']; 
  

   $Auth = new auth();

   if($Auth->registrar($nameUser,$lastname,$passwordUser,$email)){
        header("location:../view/productoPrueba/index.html");
   }else{
        echo "No se pudo registrar";
   }