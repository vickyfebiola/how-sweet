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

      <a href="index.html" class="logo mr-auto"><img src="assets/user/img/logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">How Sweet</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route ('index') }}">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#content">Explore</a></li>
          <li><a href="#team">Team</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Creating dessert that make your stressed spilled</h1>
          <h2>Let's make it.</h2>
          <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/user/img/hero-img.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>How Sweet</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Content Section ======= -->
    <section id="content" class="content">
      <div class="container">

        <div class="section-title">
          <h2>Explore</h2>
          <p>Resep dessert sederhana ala rumahan yang mudah dan enak!</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="content-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Puding</li>
              <li data-filter=".filter-card">Cake</li>
              <li data-filter=".filter-web">Pastry</li>
            </ul>
          </div>
        </div>

        <div class="row content-container">
        @foreach ($contents as $content)
          <div class="col-lg-4 col-md-6 content-item filter-app">
            <div class="content-wrap">
              <img src="{{ $content->gambar }}" class="img-fluid" alt="" style="height: 300px; object-fit: cover;">
              <div class="content-info">
                
                <h4>{{ $content->judul }}</h4>
                <p>{{ $content->deskripsi }}</p>
                <div class="content-links">
                  <a href="{{ route('detail', ['id' => $content->id]) }}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        
        @foreach ($contents as $content)
          <div class="col-lg-4 col-md-6 content-item filter-card">
            <div class="content-wrap">
              <img src="{{ $content->gambar }}" class="img-fluid" alt="" style="height: 300px; object-fit: cover;">
              <div class="content-info">
                
                <h4>{{ $content->judul }}</h4>
                <p>{{ $content->deskripsi }}</p>
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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>

        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/user/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="#"><i class="icofont-instagram"></i></a>
                  <a href="#"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Abhitah Noviar</h4>
                <span>Member</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/user/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/haidar_dz/"><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/haidar-adiy-dzaky-1a255b170/"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Haidar 'Adiy Dzaky</h4>
                <span>Member</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/user/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/vicky.febiola/"><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/vickyfebiola/"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Vicky Febiola</h4>
                <span>Member</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>How Sweet</h3>
            <p>
              Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147 <br><br>
              <strong>Phone:</strong> (0281) 641629<br>
              <strong>Email:</strong> how-sweet@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Butterfly</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/How Sweet-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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