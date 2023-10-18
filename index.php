<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Miftah Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">miftahadha.ma@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+628956041505509</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://www.youtube.com/ChazMizer" class="youtube"><i class="bi bi-youtube"></i></a>
        <a href="https://github.com/Mynzuw" class="github"><i class="bi bi-github"></i></a>
        <a href="https://www.instagram.com/miftahadha/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/miftahadha" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.html">MIF<span>TAH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li><a class="nav-link scrollto" href="portfolio.php">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    
  </section><!-- End Hero Section -->

  <main id="main">

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Miftah Adha</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Designed by <a href="https://github.com/Mynzuw">Mynzuw</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
 
  </script>
  <script>
        function ambilDataDariAPI() {
         axios.get('home_api.php?id=1')
          .then(response =>{
              //definisikan constanta data 
              const data = response.data;
              //manipulasi html untuk menampilkan data home
              const home = document.getElementById('hero');
              const homeDiv = document.createElement('div');
              homeDiv.className='col-sm-12';
              homeDiv.innerHTML=`
              <div class="hero-content" data-aos="fade-up">
                <h2>Miftah <span>Adha</span><br>Web Developer</h2>
                <div>
                  <a href="about.php" class="btn-get-started scrollto">Get Started</a>
                  <a href="portfolio.php" class="btn-projects scrollto">My Projects</a>
                </div>
              </div>

              <div class="hero-slider swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>               
                </div>
              </div>

              `;
              home.appendChild(homeDiv);
          })

          .catch(error => {
                console.error('Error:', error);
            });
        }
        ambilDataDariAPI();
  </script>

</body>

</html>