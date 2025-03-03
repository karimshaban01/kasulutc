<?php 
  include "../kasulutc_registration/pages/connection.php";

  $sql5 = "SELECT * FROM course WHERE level='SPECIAL DIPLOMA I'";
  $r5 = $conn->query($sql5);
  $sd1 = mysqli_num_rows($r5);

  $sql = "SELECT * FROM course WHERE level='SPECIAL DIPLOMA II'";
  $r = $conn->query($sql);
  $sd2 = mysqli_num_rows($r);

  $sql1 = "SELECT * FROM course WHERE level='SPECIAL DIPLOMA III'";
  $r1 = $conn->query($sql1);
  $sd3 = mysqli_num_rows($r1);

  $sql4 = "SELECT * FROM course WHERE level='DIPLOMA I'";
  $r4 = $conn->query($sql4);
  $d1 = mysqli_num_rows($r4);

  $sql2 = "SELECT * FROM course WHERE level='DIPLOMA II'";
  $r2 = $conn->query($sql2);
  $d2 = mysqli_num_rows($r2);

  $sql3 = "SELECT * FROM course WHERE level='GRADE A'";
  $r3 = $conn->query($sql3);
  $grda = mysqli_num_rows($r3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KTC-Registration system</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../kasulutc_registration/katc_logo.png" rel="icon">
  <link href="../kasulutc_registration/katc_logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="../kasulutc_registration/katc_logo.png" alt="">
        <h1 class="sitename">KTC REGISTRATION SYSTEM</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="./" class="active">Home<br></a></li>
          <li><a href="../kasulutc_registration/index.php">New registration</a></li>
          <li><a href="../kasulutc_registration/student.php">Update student information</a></li>
          
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="../excel.php">Export excel</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/world-dotted-map.png" alt="" class="hero-bg" data-aos="fade-in" height="100%">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <!-- <h2 data-aos="fade-up">Your Lightning Fast Delivery Partner</h2>
            <p data-aos="fade-up" data-aos-delay="100">Facere distinctio molestiae nisi fugit tenetur repellat non praesentium nesciunt optio quis sit odio nemo quisquam. eius quos reiciendis eum vel eum voluptatem eum maiores eaque id optio ullam occaecati odio est possimus vel reprehenderit</p>
 -->

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $grda; ?>" data-purecounter-duration="0" class="purecounter"><?php echo $grda; ?></span>
                  <p>Grade A</p>
                </div>
              </div><!-- End Stats Item -->


              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $sd1; ?>" data-purecounter-duration="0" class="purecounter"><?php echo $sd1; ?></span>
                  <p>Special Diploma I</p>
                </div>
              </div><!-- End Stats Item -->


              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $sd2; ?>" data-purecounter-duration="0" class="purecounter"><?php echo $sd2; ?></span>
                  <p>Special Diploma II</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $sd3; ?>" data-purecounter-duration="0" class="purecounter"><?php echo $sd3; ?></span>
                  <p>Special Diploma III</p>
                </div>
              </div><!-- End Stats Item -->


              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $d1; ?>" data-purecounter-duration="0" class="purecounter"><?php echo $d1; ?></span>
                  <p>Diploma I</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $d2; ?>" data-purecounter-duration="0" class="purecounter"><?php echo $d2; ?></span>
                  <p>Diploma II</p>
                </div>
              </div><!-- End Stats Item -->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
          </div>

        </div>
      </div>

    </section><!-- /Hero Section -->

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>