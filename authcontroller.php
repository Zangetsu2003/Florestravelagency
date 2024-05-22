<?php
if(!isset($_SESSION)){ 
   session_start();
  } 

include ("db.php");
if (isset($_POST["submit"])) {
   $email = $_POST["email"];
   $contraseña = $_POST["contraseña"];
   $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
   $row = mysqli_fetch_assoc($result);
   if (mysqli_num_rows($result) > 0) {
      if ($contraseña == $row["contraseña"]) {
         $_SESSION["login"] = true;
         $_SESSION["email"] = $email;
         $_SESSION["idusuario"] = $row["idusuario"];
         $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
         $_SESSION['nombre'] = $row['nombre'];

         switch (intval($_SESSION['tipo_usuario'])) {
            case 1:
               header("location:index.php");
               break;
            case 2:
               header("location:admin/paquetes/paquetes_admin.php");
               break;

         }
      } else {
         echo
            "<script> alert('Contraseña incorrecta'); </script>";
      }
   } else {
      echo
         "<script> alert('Email incorrecto'); </script>";
   }

}
?>