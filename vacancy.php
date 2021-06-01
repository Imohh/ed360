<?php 
require 'examples/functions/functions.php';
session_start();

$temp = $_SESSION['user_id'];
session_destroy();
session_start();
$_SESSION['user_id'] = $temp;
ob_start(); 
// Establish Database Connection
$conn = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ED360 | Vacancy</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/icon.png" rel="icon">
  <link href="img/icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
s
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="index.php" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li class="drop-down active"><a href="#services">Services</a>
            <ul>
              <li><a href="recruit-teacher.php">Recruit Teacher</a></li>
              <li><a href="training.php">Training</a></li>
              <li class="active"><a href="vacancy.php">Vacancy</a></li>
              <!-- <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
          <li class="drop-down"> <button class="btn"><a href="examples/index.php">Sign In</a></button>
            <ul>
              <li><a href="examples/login.php">As Teacher</a></li>
              <li><a href="examples/login-2.php">As School Owner</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .main-nav -->
      <style>
        .main-nav button {
          background: #007bff;
          color: #fff;
          transition: 0.4s;
          border: none;
          cursor: pointer;
          padding: 0px 10px 0px 10px;
          border-radius: 5px;
          }
        .main-nav button a {
          color: #fff;
        }

        .main-nav button a:hover {
          color: #fff;
        }

        .main-nav button:hover {
          background: #1b48b0;
          color: #fff;
          transition: 0.4s;
        }
      </style>
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intros" class="clearfix">
    <div class="container">



      <div class="intro-info" align="center">
        <h2>Vacancy</h2>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">





<!-- NEW SECTION -->
<section id="train">
  <div class="container">
  <section class="customer-logos slider">
    <div class="slide"><img src="img/team-1.png"></div>
    <div class="slide"><img src="img/team-2.png"></div>
    <div class="slide"><img src="img/team-3.png"></div>
    <div class="slide"><img src="img/team-4.png"></div>
    <div class="slide"><img src="img/team-2.png"></div>
    <div class="slide"><img src="img/team-3.png"></div>
    <div class="slide"><img src="img/team-1.png"></div>
    <div class="slide"><img src="img/team-2.png"></div>
  </section>
</div>
</section>


    <!--==========================
  Vacancy Section
============================-->




<?php
  $query5 = "SELECT * FROM vacancy";
  $runquery5= mysqli_query($conn,$query5);
  while($data5=mysqli_fetch_array($runquery5)){
?>



<section class="vacancy" align="center">
  <div class="container">
    <img alt="Image placeholder" src="examples/assets/img/<?=$data5['projectpic']?>" height="400px" width="400px">
    <h4 title="<?=$data5['projectname']?>"><?=$data5['projectname']?></h4>

    <small title="<?=$data5['projectlink']?>"><?=$data5['projectlink']?></small>
                        
  <?php
    }
  ?>

  </div>
</section>

<style>
  .vacancy {

  }
</style>






<!-- NEWSLETTER -->
<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-4">
        <h3>Subscribe to our newsletter</h3>
        <p>Subscribe to get daily tips on teaching</p>
        <input type="text" name="newsletter"><a href="#about" class="btn-get-started scrollto">Subscribe</a>
      </div>
    </div>
  </div>
</section>



<style type="text/css">
  /* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
</style>








  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo1.png" width="40%">
            <p>We are a mission-driven education technology company. A global online teacher recruitment and training system. Our vision is to ensure every leaner experiences the power of a great teacher. Our plan is to make sure we use this means to empower young aspiring teachers and also traib them on how to be better teachers. </p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About </a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>

          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Resources</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Ifako Gbagada <br>
              Lagos, 
              Nigeria <br>
              <strong>Phone:</strong> +2349036222167<br>
              <strong>Email:</strong> info@hireateacher.africa<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Learn More</h4>
            <ul>
              <li><a href="#">Become a partner</a></li>
              <li><a href="#">Get Help</a></li>
              <li><a href="#">Terms and Conditions</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>ED360</strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://instagram.com/oprime.ng" target="_blank">Oprime Technologies</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below if you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <script type="text/javascript">
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
  </script>





  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">




  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
