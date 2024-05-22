<?php
session_start();
include ("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flores Travel agency</title>

  <!---favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!---css-->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!---google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!--#HEADER-->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+01123456790" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">Para mas información</p>

            <p class="helpline-number">833 203 00 33</p>
          </div>

        </a>

        <a href="index.html" class="logo">
          <img class="logoflores" src="./assets/images/logo.png" alt="Flores logo">
        </a>

        <div class="header-btn-group">

          <button id="myButton" class="search-btn" aria-label="Search">
          <?php if (isset($_SESSION['email'])): ?>
          <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</p>
          <a href="logout.php">Cerrar sesión</a>
          <?php else: ?>
          <p>Bienvenido!</p>
          <a href="login.php">Iniciar sesión</a>
          <?php endif; ?>
          </button>

          <script type="text/javascript">
            document.getElementById("myButton").onclick = function () {
            location.href = "login.php";
            };
            </script>

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>
  </header>

  <main>
    <article>
      <!--#PAQUETES-->

      <section class="package" id="package">
        <div class="container">
        
          <h2 class="h2 section-title">Conoce nuestros Paquetes 2024-2025</h2>

          <ul class="package-list">
          <?php
                $query_paquetes = "SELECT * FROM paquetes";
                $result_paquetes = mysqli_query($conn, $query_paquetes);
                while ($row = mysqli_fetch_array($result_paquetes)):
          ?>
            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="assets/images/<?php echo $row["imagen"]?>" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title"> <?php echo $row["nombre"]?> </h3>

                  <p class="card-text">
                    <?php echo $row["descripcion"]?>
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text"><?php echo $row["personas"]?></p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text"><?php echo $row["destino"]?></p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                  <?php echo $row["precio"]?>
                    <span>/ por persona</span>
                  </p>

                  <a href="checkout.php?id=<?php echo $row['idpaquete']; ?>"><button class="btn btn-secondary">Reservar Ahora</button></a>

                </div>

              </div>
            </li>
          </ul>
          <?php endwhile; ?>
          <button class="btn btn-primary">Ver todos los paquetes</button>

        </div>
      </section>

      <!--#CALL TO ACTION-->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <h2 class="h2 section-title">Listo para conocer el mundo? Somos la mejor opcion!</h2>
          </div>

          <button class="btn btn-secondary">Contactanos!</button>

        </div>
      </section>

    </article>
  </main>

  <!--#FOOTER-->

  <footer class="footer">
    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="">Flores Travel Agency</a>
        </p>
      </div>
    </div>

  </footer>

  <!---#GO TO TOP-->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!--custom js link-->
  <script src="./assets/js/script.js"></script>

  <!--ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>