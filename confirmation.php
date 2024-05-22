<?php
include ("db.php");
$idreservacion = $_GET['id'];

$query_reservacion = "SELECT * FROM reservaciones WHERE id = $idreservacion";
$result_reservacion = mysqli_query($conn, $query_reservacion);
$rowreservacion = mysqli_fetch_array($result_reservacion);

$query_paquete = "SELECT * FROM paquetes WHERE idpaquete = {$rowreservacion["paqueteid"]}";
$result_paquete = mysqli_query($conn, $query_paquete);
$rowpaquete = mysqli_fetch_array($result_paquete);

$preciototal = $rowpaquete["personas"] * $rowpaquete["precio"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="assets/css/orderconfirmation.css">
</head> 
<body>
    <div class="container">
        <h1>Confirmacion de reserva</h1>
        <div class="order-details">
            <p><strong>Numero de reservacion:</strong><?php echo $rowreservacion["id"]?></p>
            <p><strong>Fecha de salida:</strong><?php echo $rowreservacion["fechasalida"]?></p>
            <p><strong>Paquete:</strong></p>
            <ul>
                <li><?php echo $rowpaquete["nombre"]?></li>
                
            </ul>
            <p><strong>Descripcion:</strong><?php echo $rowpaquete["descripcion"]?></p>
            <p><strong>Total: </strong>$<?php echo $preciototal?> USD</p>
        </div>
    </div>
</body>
</html>
