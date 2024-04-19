<?php
include("db.php");
if (isset($_POST["submit"])){
   $nombre = $_POST["nombre"];
   $telefono = $_POST["telefono"];
   $apellido = $_POST["apellido"];
   $email = $_POST["email"];
   $contraseña = $_POST["contraseña"];

   $query = "INSERT INTO usuarios VALUES('','$nombre', '$telefono', '$apellido', '$email', '$contraseña', 1)";
   mysqli_query($conn, $query);
   echo
   "<script> alert('¡Registro completado correctamente!'); </script>";
   header("login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Document</title>
</head>
<body>
<section>
      <div class="contenedor">
      
         <div class="formulario">
            <form action="" method="post">
               <h2>Registrarse</h2>

               <div class="input-contenedor">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="nombre" name="nombre" id="nombre"required>
                  <label for="nombre">Nombre</label>
               </div>

               <div class="input-contenedor">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="apellido" name="apellido" id="apellido" required>
                  <label for="apellido">Apellido</label>
               </div>

               <div class="input-contenedor">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="email" name="email" id="email" required>
                  <label for="email">Email</label>
               </div>

               <div class="input-contenedor">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="telefono" name="telefono" id="telefono" required>
                  <label for="telefono">Teléfono</label>
               </div>

               <div class="input-contenedor">
                  <i class="fa-solid fa-lock"></i>
                  <input type="contraseña" name="contraseña" id="contraseña" required>
                  <label for="contraseña">Contraseña</label>
               </div>

               <div>
                  <button type="submit" name="submit">Registrarse</button>
                  
                  
               </div>
            </div>
         </div>
</section>
</body>
</html>

