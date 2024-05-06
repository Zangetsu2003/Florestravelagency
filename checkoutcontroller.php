<?php 
include ("db.php");

$idpaquete = $_GET['id'];

$query = "SELECT * FROM paquetes WHERE idpaquete = ${idpaquete}";
$result = mysqli_query($conn, $query);

$paquete = mysqli_fetch_assoc($result);

if (isset($_POST["submit"])){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $personas = $_POST["personas"];
    $fechasalida = $_POST["fechasalida"];
    $fecharegreso = $_POST["fecharegreso"];
 
    $query = "INSERT INTO reservaciones VALUES('','$nombre', '$email', '$celular','$personas', '$fechasalida', '$fecharegreso', '$idpaquete', 1)";
    mysqli_query($conn, $query);

    header("Location:confirmation.php");
 }
?>