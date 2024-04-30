<?php
include ('../../db.php');

if (isset($_GET['idusuario'])) {
    $idusuario = $_GET['idusuario'];
    $query = "DELETE FROM usuarios WHERE idusuario = '$idusuario'"; //eliminar lo que esté almacenado en el idusuario que me da la variable
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Fail"); //si no existe resultado mostrar mensaje fail
    }
    header("Location: http://localhost/florestravelagency/admin/agentes/agentes.php");
}