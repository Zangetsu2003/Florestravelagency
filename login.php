<?php
include("db.php");
if (isset($_POST["submit"])) {
   $email = $_POST["email"];
   $contraseña = $_POST["contraseña"];
   $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
   $row = mysqli_fetch_assoc($result);
   if (mysqli_num_rows($result) > 0){
      if ($contraseña == $row["contraseña"]) {
         $_SESSION["login"] = true;
         $_SESSION["idUsuario"] = $row["idUsuario"];
         header("Location: index.php");
      }else{
         echo
      "<script> alert('Contraseña incorrecta'); </script>";
      }
   }
   else{
      echo
   "<script> alert('Email incorrecto'); </script>";
   }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <script src="https://kit.fontawesome.com/4f2492603f.js" crossorigin="anonymous"></script>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="login.css">
   <title>Document</title>
</head>
<body>
   <section>
      <div class="contenedor">
         <div class="formulario">
            <form action="" method="post">
               <h2>Iniciar Sesió</h2>

               <div class="input-contenedor">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="email" name="email" id="email" required>
                  <label for="email">Email</label>
               </div>

               <div class="input-contenedor">
                  <i class="fa-solid fa-lock"></i>
                  <input type="contraseña" name="contraseña" id="contraseña" required>
                  <label for="#">Contraseña</label>
               </div>

               <div>
                  <button type="submit" name="submit">Acceder</button>
                  <div class="registrar">
                     <p><a href="register.php">Registrarse</a></p>
                  </div>
                  
               </div>
            </div>
         </div>
</section>


</body>
</html>