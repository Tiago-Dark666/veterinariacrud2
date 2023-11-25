 <?php
   require_once "../models/authVet.php";

   $nameVet = $_POST['nameVet']; 
   $lastnameVet = $_POST['lastnameVet']; 
   $passwordVet = $_POST['passwordVet']; 
   $ciudadVet = $_POST['ciudadVet']; 
   $especializacionVet = $_POST['especializacionVet']; 
   $tienda = $_POST['tienda']; 
  

   $AuthLibro = new authLibro();

   if($AuthLibro->registrar($nameVet,$lastnameVet,$passwordVet,$ciudadVet,$especializacionVet,$tienda)){
        header("location:../Home.html");
   }else{
        echo "No se pudo registrar";
   }