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
        <?php
        include("db.php");
        if (isset($_POST["submit"])) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $email = $_POST["email"];
            $telefono = $_POST["telefono"];
            $contraseña = $_POST["contraseña"];
        }
        
        
        $sql = "INSERT INTO usuarios (nombre, apellido, email, telefono, contraseña, tipo_usuario) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $nombre, $apellido, $email, $telefono, $contraseña, 1);
            mysqli_stmt_execute($stmt);
        } else{
            die("Algo salió mal");
        }
?>





         <div class="formulario">
            <form action="register.php" method="post">
               <h2>Registrarse</h2>

               <div class="input-contenedor">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="nombre" required>
                  <label name="nombre">Nombre</label>
               </div>

               <div class="input-contenedor">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="apellido" required>
                  <label name="apellido">Apellido</label>
               </div>

               <div class="input-contenedor">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="email" required>
                  <label name="email">Email</label>
               </div>

               <div class="input-contenedor">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="telefono" required>
                  <label name="telefono">Teléfono</label>
               </div>

               <div class="input-contenedor">
                  <i class="fa-solid fa-lock"></i>
                  <input type="password" required>
                  <label name="contraseña">Contraseña</label>
               </div>

               <div>
                  <button type="submit">Registrarse</button>
                  
                  
               </div>
            </div>
         </div>
</section>
</body>
</html>