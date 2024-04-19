

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flores Travel agency</title>

  <!--favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--css-->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--google fonts-->
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
            <p class="helpline-title">Para mas informacion</p>

            <p class="helpline-number">833 203 00 33</p>
          </div>

        </a>

        <a href="#" class="logo">
          <img src="./assets/images/logo.png" alt="Flores logo">
        </a>

        <div class="header-btn-group">

          <button class="search-btn" aria-label="Search">
            Iniciar sesion
          </button>
          
          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="index.html" class="logo">
              <img src="./assets/images/logo-blue.svg" alt="Tourly logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-nav-link>Inicio</a>
            </li>

            <li>
              <a href="paquetes.html" class="navbar-link" data-nav-link>paquetes</a>
            </li>

          </ul>

        </nav>

        <button class="btn btn-primary">Reserva Ya</button>

      </div>
    </div>

  </header>

  <main>
    <article>

      <!--#HERO-->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Recorre, explora, disfruta!</h2>

          <div class="btn-group">
            <button class="btn btn-secondary">Reserva ya</button>
          </div>

        </div>
      </section>

      <!--SEARCH SECTION-->

      <section class="tour-search">
        <div class="container">

          <form action="" class="tour-search-form">

            <div class="input-wrapper">
              <label for="destination" class="input-label">Destino</label>

              <input type="text" name="destination" id="destination" required placeholder="A donde quieres ir"
                class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="people" class="input-label">Viajeros</label>

              <input type="number" name="people" id="people" required placeholder="Cuantas personas" class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkin" class="input-label">Fecha de Salida</label>

              <input type="date" name="checkin" id="checkin" required class="input-field">
            </div>

            <div class="input-wrapper">
              <label for="checkout" class="input-label">Fecha de Regreso</label>

              <input type="date" name="checkout" id="checkout" required class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">Buscar</button>

          </form>

        </div>
      </section>

      <!---#POPULAR-->

      <section class="popular" id="destination">
        <div class="container">
          <h2 class="h2 section-title">Destinos populares</h2>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/popular-1.jpg" alt="San miguel, italy" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Italy</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Colosseum</a>
                  </h3>

                  <p class="card-text">
                    Mayor anfiteatro romano, con una estructura elíptica de 188 metros de longitud, 156 metros de ancho y 57 metros de altura.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/popular-2.jpg" alt="Burj khalifa, dubai" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Dubai</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Burj khalifa</a>
                  </h3>

                  <p class="card-text">
                    El edificio más alto del mundo y un auténtico icono global. Esta maravilla de la ingeniería representa el corazón y el alma de la ciudad.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Mexico</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">chichen itza</a>
                  </h3>

                  <p class="card-text">
                    Patrimonio de la Humanidad declarada por la UNESCO desde 1988 y Maravilla del Mundo desde 2007.
                  </p>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!--CONTACT-->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <h2 class="h2 section-title">Listo para conocer el mundo? Somos la mejor opcion!</h2>
          </div>

          <button class="btn btn-secondary">Contáctanos !</button>

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

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>