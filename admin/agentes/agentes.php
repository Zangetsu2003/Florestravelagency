<?php
include ("../../db.php");
if (isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contraseña = $_POST["contraseña"];

    $query = "INSERT INTO usuarios VALUES('','$nombre', '$telefono', '$apellido', '$email', '$contraseña', 3)";
    mysqli_query($conn, $query);
    header("Location: http://localhost/florestravelagency/admin/agentes/agentes.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/agentes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/sidebar.css">

    <title>Document</title>
</head>

<body id="top">
    <div>

    </div>
    <header class="header" data-header>
        <div class="header-top">
            <img class="header-top image" src="../../assets/images/logo.png">
        </div>

    </header>
    <div class="forms">
        <nav class="sidebar">
            <div class="sidebar-top-wrapper">
                <div class="sidebar-top">
                    <span class="hide company-name">
                        Administrador
                    </span>
                </div>
                <button class="expand-btn" type="button">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                        aria-labelledby="exp-btn" role="img">
                        <title id="exp-btn">Expand/Collapse Menu</title>
                        <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28"
                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <div class="sidebar-links">
                <ul>
                    <li>

                        <a href="../paquetes/paquetes_admin.php" title="Dashboard" class="tooltip">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-package"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                <path d="M12 12l8 -4.5" />
                                <path d="M12 12l0 9" />
                                <path d="M12 12l-8 -4.5" />
                                <path d="M16 5.25l-8 4.5" />
                            </svg>
                            <span class="link hide">Paquetes</span>
                            <span class="tooltip__content">Paquetes</span>
                        </a>
                    </li>

                    <li>
                        <a href="#market-overview" class="tooltip">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pins"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10.828 9.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z" />
                                <path d="M8 7l0 .01" />
                                <path d="M18.828 17.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z" />
                                <path d="M16 15l0 .01" />
                            </svg>
                            <span class="link hide">Destinos</span>
                            <span class="tooltip__content">Destinos</span>
                        </a>
                    </li>

                    <li>
                        <a href="#analytics" title="Analytics" class="tooltip">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-user"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 21h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4.5" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M19 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M22 22a2 2 0 0 0 -2 -2h-2a2 2 0 0 0 -2 2" />
                            </svg>
                            <span class="link hide">Reservaciones</span>
                            <span class="tooltip__content">Reservaciones</span>
                        </a>
                    </li>

                    <li>
                        <a href="agentes.html" title="Analytics" class="tooltip">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                            <span class="link hide">Agentes</span>
                            <span class="tooltip__content">Agentes</span>
                        </a>
                    </li>
            </div>

            <div class="sidebar__profile">
                <div class="avatar__wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="44"
                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                    <div class="online__status"></div>
                </div>
                <div class="avatar__name hide">
                    <div class="user-name">Usuario</div>
                    <div class="email">correo</div>
                </div>
                <a href="../../login.php" class="logout hide">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" aria-labelledby="logout-icon" role="img">
                        <title id="logout-icon">log out</title>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                        </path>
                        <path d="M9 12h12l-3 -3"></path>
                        <path d="M18 15l3 -3"></path>
                    </svg>
                </a>
            </div>
        </nav>
        <div class="contenido">
            <div style="display:flex;width:40%; gap:15px;flex-wrap:wrap;">
                <?php
                $query_agentes = "SELECT * FROM usuarios WHERE tipo_usuario=3";
                $result_agentes = mysqli_query($conn, $query_agentes);
                while ($row = mysqli_fetch_array($result_agentes)):
                    ?>
                    <div class="datos_agentes">
                        <div class="icono_agente">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="informacion">
                            <?php
                            echo 'Nombre: ' . $row["nombre"] . '<br>';
                            echo 'Apellido: ' . $row["apellido"] . '<br>';
                            echo 'Teléfono: ' . $row["telefono"] . '<br>';
                            echo 'Correo electrónico: ' . $row["email"] . '<br>';
                            ?>
                            <i style="padding:4px;" class="fa-solid fa-pen-to-square"></i>
                            <a style="color:white;" href="delete_agente.php?idUsuario=<?php echo $row['idUsuario'] ?>"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <button class="añadir_usuario" name="añadir_usuario" id="openModalBtn"><i
                    class="fa-solid fa-user-plus"></i>Añadir agente</button>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Registro de Agente</h2>
                    <form action="" method="POST">
                        <label for="nombre">Nombre de Agente:</label>
                        <input type="nombre" id="nombre" name="nombre" required>

                        <label for="telefono">Teléfono:</label>
                        <input type="telefono" id="telefono" name="telefono" required>

                        <label for="apellido">Apellido:</label>
                        <input type="apellido" id="apellido" name="apellido" required>

                        <label for="email">Correo electrónico:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="contraseña">Contraseña:</label>
                        <input type="contraseña" id="contraseña" name="contraseña" required>

                        <button type="submit" name="submit">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/sidebar.js"></script>
    <script src="https://kit.fontawesome.com/355f6127c2.js" crossorigin="anonymous"></script>
    <script src="../../assets/js/modal.js"></script>

</body>

</html>