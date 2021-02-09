<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>How Sweet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/user/img/favicon.png" rel="icon">
  <link href="assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/user/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/user/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/user/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/user/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/user/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: How Sweet - v2.2.0
  * Template URL: https://bootstrapmade.com/How Sweet-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
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
            <li>Explore</li>
          </ol>
          </div>
        </div>
    </section>

    <!-- ======= Content Section ======= -->
    <section id="content" class="content">
      <div class="container">
        <div class="row content-container">
        @foreach ($contents as $content)
          <div class="col-lg-4 col-md-6 content-item filter-app">
            <div class="content-wrap">
              <img src="{{ $content->gambar }}" class="img-fluid" alt="" style="height: 350px; object-fit: cover;">
              <div class="content-info" style="height: 350px; object-fit: cover;">
                
                <h4>{{ $content->judul }}</h4>
                
                <div class="content-links">
                  <a href="{{ route('detail', ['id' => $content->id]) }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Content Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Butterfly</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/user/vendor/jquery/jquery.min.js"></script>
  <script src="assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/user/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/user/vendor/php-email-form/validate.js"></script>
  <script src="assets/user/vendor/venobox/venobox.min.js"></script>
  <script src="assets/user/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/user/vendor/counterup/counterup.min.js"></script>
  <script src="assets/user/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/user/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/user/js/main.js"></script>

</body>

</html>