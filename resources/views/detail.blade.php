<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Details - How Sweet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/user/img/favicon.png" rel="icon">
  <link href="../assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/user/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/user/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/user/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="../assets/user/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/user/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Butterfly - v2.2.0
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{route ('index') }}" class="logo mr-auto"><img src="../assets/user/img/logo.png" alt="" class="img-fluid"></a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>

      </nav>
    </div>
  </header><!-- End Header -->
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2></h2>
          <ol>
            <li><a href="{{route ('index') }}">Home</a></li>
            <li>Details</li>
          </ol>
          </div>
        </div>
    </section>
    <section id="content-details" class="content-details">
      <div class="container">
        <div class="content-details-container" style="text-align: center;">
          <img src="../{{ $content->gambar }}" class="img-fluid" alt="" style="height: 500px; width: 900px; object-fit: cover;">
        </div>

          <div class="content-description">
          <h2>{{ $content->judul }}</h2>

          <p>
            {!! nl2br(e($content->deskripsi)) !!}
          </p>

        </div>

      </div>
    </section><!-- End content Details Section -->
  </main>
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Butterfly</span></strong>
      </div>
    </div>
  </footer>

  <script src="../assets/user/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/user/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/user/vendor/php-email-form/validate.js"></script>
  <script src="../assets/user/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/user/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/user/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/user/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/user/js/main.js"></script>
</body>
</html>