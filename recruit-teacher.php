


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ED360 | Recruit Teachers</title>
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
              <li class="active"><a href="recruit-teacher.php">Recruit Teacher</a></li>
              <li><a href="training.php">Training</a></li>
              <li><a href="vacancy.php">Vacancy</a></li>
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
        <h2>Recruit Teacher</h2>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">



<section id="contact" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Search for Teachers</h3>
          <p>Recruit the best teacher for your school or Home Lessons</p>
        </header>





<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'ed360');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM users')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 10;

if ($stmt = $mysqli->prepare('SELECT * FROM users ORDER BY user_date DESC LIMIT ?,?'))
  //ORDER BY Date DESC, ID ASC
 {
  // Calculate the page to get the results we need from our table.
  $calc_page = ($page - 1) * $num_results_on_page;
  $stmt->bind_param('ii', $calc_page, $num_results_on_page);
  $stmt->execute(); 
  // Get the results...
  $result = $stmt->get_result();
  ?>


    

      <table class="table table-bordered">
        <tr>
          <th>Name</th>
          <th>Teaching experience</th>
          <th>Gender</th>
          <th>Hire Now</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
      <form>
        <tr>
          <td><?php echo $row['user_firstname']; ?> <?php echo $row['user_lastname']; ?></td>
          <td><?php echo $row['user_experience']; ?></td>
          <td><?php echo $row['user_gender']; ?></td>
          <td><button><a href="examples/login-2.php">Hire Now</a></button></td>
        </tr>
      </form>
        <?php endwhile; ?>
      </table>
      <?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
      <ul class="pagination">
        <?php if ($page > 1): ?>
        <li class="prev"><a href="recruit-teacher.php?page=<?php echo $page-1 ?>">Prev</a></li>
        <?php endif; ?>

        <?php if ($page > 5): ?>
        <li class="start"><a href="recruit-teacher.php?page=1">1</a></li>
        <li class="dots">...</li>
        <?php endif; ?>

        <?php if ($page-2 > 0): ?><li class="page"><a href="recruit-teacher.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
        <?php if ($page-1 > 0): ?><li class="page"><a href="recruit-teacher.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

        <li class="currentpage"><a href="recruit-teacher.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

        <?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="recruit-teacher.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
        <?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="recruit-teacher.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

        <?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
        <li class="dots">...</li>
        <li class="end"><a href="recruit-teacher.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
        <?php endif; ?>

        <?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
        <li class="next"><a href="recruit-teacher.php?page=<?php echo $page+1 ?>">Next</a></li>
        <?php endif; ?>
      </ul>
      <?php endif; ?>
    </div>
  </section>


  <?php
  $stmt->close();
}
?>



<style>
  .pagination .currentpage {
    background: #007bff;
    border-radius: 5px;
  }
  .pagination .currentpage a {
    color: #fff;
    padding: 10px 10px 10px 10px;
  }
  .pagination .page a {
    padding: 10px;
  }
  .pagination .dots {
    background: red;
  }
  .pagination .page {
    border: 2px solid #007bff;
    border-radius: 5px;
    margin-left: 5px;
    margin-right: 5px;
  }
  .pagination .next a {
    background: #007bff;
    border-radius: 5px;
    color: #fff;
    padding: 10px 20px 10px 20px;
  }
  .pagination .prev a {
    border-radius: 5px;
    background: #007bff;
    color: #fff;
    padding: 10px 20px 10px 20px;
  }
  tbody button {
    background: #007bff;
    color: #fff;
    transition: 0.4s;
    border: none;
    cursor: pointer;
    padding: 5px 20px 5px 20px;
    border-radius: 5px;
    }
  tbody button a {
    color: #fff;
  }

  tbody button a:hover {
    color: #fff;
  }
  
  tbody button:hover {
    background: #1b48b0;
    color: #fff;
    transition: 0.4s;
  }
  .form-button {
     margin: 0 auto;
  }
  .form-button button {
    background: #007bff;
    margin-top: 10px;
    margin-bottom: 50px;
    color: #fff;
    transition: 0.4s;
    }

   .form-button button:hover {
    background: #1b48b0;
    color: #fff;
    transition: 0.4s;
  }
</style>






<section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>How to recruit</h3>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-search"></i>
              <div class="card-body">
                <h5 class="card-title">Search</h5>
                <p class="card-text">Search for teacher by name or search with ease.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">View profile</h5>
                <p class="card-text">You get to see each teacher's profile with qualifications and also download their resume.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Recruit Teacher</h5>
                <p class="card-text">Proceed to recruiting the best according to your choice. </p>
              </div>
            </div>
          </div>

        </div> 

      </div>
    </section>








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
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
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
