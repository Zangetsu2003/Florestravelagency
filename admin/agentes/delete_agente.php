<?php
include ('../../db.php');

if (isset($_GET['idUsuario'])) {
    $idusuario = $_GET['idUsuario'];
    $query = "DELETE FROM usuarios WHERE idUsuario = '$idUsuario'"; //eliminar lo que esté almacenado en el idusuario que me da la variable
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Fail"); //si no existe resultado mostrar mensaje fail
    }
    header("Location: http://localhost/florestravelagency/admin/agentes/agentes.php");
}