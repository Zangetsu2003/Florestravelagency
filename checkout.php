<?php 
include ("checkoutcontroller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="./assets/css/checkoutstyle.css">
</head>
<body>
    
    <div class="container">
        <div class="order-details">
            <h2>Tu reserva</h2>
            <div class="package">
                <img src="assets/images/<?php echo $paquete['imagen'] ?>" alt="Travel Package Image">
                <div class="package-details">
                    <h3><?php echo $paquete['nombre'] ?></h3>
                    <p>Precio: <?php echo $paquete['precio'] ?></p>
                </div>
            </div>
        </div>
        <div class="checkout-form">
            <h2>Tus datos</h2>
            <form method="post">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="celular"># Celular:</label>
                <input type="tel" id="celular" name="celular" required>
                <label for="personas"># de Personas:</label>
                <input type="number" id="personas" name="personas" required>
                <label for="fecha-salida">Fecha de Salida:</label>
                <input type="date" id="fechasalida" name="fechasalida" required>
                <label for="fecha-regreso">Fecha de Regreso:</label>
                <input type="date" id="fecharegreso" name="fecharegreso" required>
                <button type="submit" name="submit">Reservar</button>
            </form>
        </div>
    </div>
</body>
</html>