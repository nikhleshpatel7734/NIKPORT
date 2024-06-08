<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>nikhlesh portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/nikk.jpg" rel="icon" style="width:100vh;">
  <link href="assets/img/nik.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/styles.css" rel="stylesheet">
  <style>

    /* Disable text selection for the entire webpage */
body {
    -webkit-user-select: none; /* Safari */
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* IE 10+ */
    user-select: none; /* Standard syntax */
}

  </style>

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
$str="select * from about";
$res=mysqli_query($conn,$str);
while($r=mysqli_fetch_array($res)){
$name=$r['name'];
$position=$r['position'];
$shortde=$r['shortde'];
$birthday=$r['birthday'];
$website=$r['website'];
$phone=$r['phone'];
$city=$r['city'];
$age=$r['age'];
$qualification=$r['qualification'];
$email=$r['email'];
$freelance=$r['freelance'];
$cont=$r['cont'];

  ?>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?php echo $name ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span> <?php echo $position ?>  </span> from <?php echo  $city ?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
         
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="www.twitter.com" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="www.facebook.com" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="www.instagram.com" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="www.linkedin.com" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/niks.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $position ?></h3>
          <p class="fst-italic">
          <?php echo $shortde ?> 
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $birthday ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $website ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span> <?php echo $phone ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $city ?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $age ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $qualification ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span><?php echo $email ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo $freelance ?></span></li>
              </ul>
            </div>
          </div>
          <p>
          <?php echo $cont ?> 
        </p>
        </div>
      </div>

    </div><!-- End About Me -->
    <?php
}
?>
    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

  <!-- ======= Skills  ======= -->
<div class="skills container">
  <div class="section-title">
    <h2>Skills</h2>
  </div>
  <?php
  $str1 = "SELECT * FROM skills";
  $res1 = mysqli_query($conn, $str1);
  while ($r1 = mysqli_fetch_array($res1)) {
    $skname = $r1['skname'];
    $skval = $r1['skval'];
  ?>
    <div class="row skills-content">
      <div class="col-lg-6">
        <div class="progress">
          <span class="skill"><?php echo $skname ?> <i class="val"><?php echo $skval ?> </i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skval ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</div><!-- End Skills -->

    <!-- ======= Interests ======= 
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Lorem Ipsum</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Dolor Sitema</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Sed perspiciatis</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Magni Dolores</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Nemo Enim</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Eiusmod Tempor</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Midela Teren</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Pira Neve</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Dirada Pack</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Moton Ideal</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Verdo Park</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div>
      </div>

    </div> End Interests -->

    <!-- ======= Testimonials ======= 
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div> End testimonial item 

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div> 

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div> End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>
<?php
$str2 ="select *from about ";
$res2=mysqli_query($conn,$str2);
while($r2=mysqli_fetch_array($res2)){
?>
      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4><?php echo $r2['name'] ?></h4>
            <p><em><?php echo $r2['cont'] ?></em></p>
            <p>
            <ul>
              <li><?php echo $r2['city'] ?></li>
              <li><?php echo $r2['phone'] ?></li>
              <li><?php echo $r2['email'] ?></li>
              <li><?php echo $r2['website'] ?></li>
              
            </ul>
            </p>
          </div>
          <?php
}
?>
<h3 class="resume-title">Education</h3>
<?php
$st="select * from education ";
$rs=mysqli_query($conn,$st);
$counter=0;
while($re=mysqli_fetch_array($rs)){
  if($counter=1){
?>

          
          <div class="resume-item">
            <h4> <?php echo $re['dname'] ?> </h4>
            <h5><?php echo $re['year'] ?> </h5>
            <h6><?php echo $re['stream'] ?> </h6>
            <p><em><?php echo $re['instname'] ?></em></p>
            <p><?php echo $re['shortds'] ?></p>
          </div>
         <?php 
  }
  
   else{
    ?>
          <div class="resume-item">
            <h4><?php echo $re['dname'] ?></h4>
            <h5><?php echo $re['year'] ?></h5>
            <h6><?php echo $re['stream'] ?> </h6>
            <p><em><?php echo $re['instname'] ?></em></p>
            <p><?php echo $re['shortds'] ?></p>
          </div>
          
          <?php
  }
         $counter++;
}
?>
</div>

       
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <?php
$st1="select * from experience ";
$rs1=mysqli_query($conn,$st1);
$counter=0;
while($re1=mysqli_fetch_array($rs1)){
  if($counter=1){
?>
          <div class="resume-item">
            <h4><?php  echo $re1['role'] ?></h4>
            <h5><?php  echo $re1['exm'] ?></h5>
            <p><em><?php  echo $re1['cname'] ?> </em></p>
            <p>
            <ul>
              <li><?php  echo $re1['deshort'] ?></li>
              <li><?php  echo $re1['desh1'] ?></li>
              <li><?php  echo $re1['desh2'] ?></li>
            </ul>
            </p>
          </div>
          <?php 
  }
  
   else{
    ?>
          <div class="resume-item">
            <h4><?php  echo $re1['role'] ?></h4>
            <h5><?php  echo $re1['exm'] ?></h5>
            <p><em><?php  echo $re1['cname'] ?></em></p>
            <p>
            <ul>
              <li><?php  echo $re1['deshort'] ?></li>
              <li><?php  echo $re1['desh1'] ?></li>
              <li><?php  echo $re1['desh2'] ?></li>
            </ul>
            </p>
            <?php
  }
         $counter++;
}
?>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= 
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>My Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Lorem Ipsum</a></h4>
            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Sed ut perspiciatis</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Magni Dolores</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Nemo Enim</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Dele cardo</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="">Divera don</a></h4>
            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          </div>
        </div>

      </div>

    </div>
  </section> End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>Portfolio</h2>
            <p>My Works</p>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php
            $str13 = "SELECT * FROM projects";
            $res13 = mysqli_query($conn, $str13);

            while ($r13 = mysqli_fetch_array($res13)) {
            ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo strtolower($r13['category']); ?>">
                    <div class="portfolio-wrap">
                        <a href="portfolio-details.php?purl=<?php echo $r13['purl']; ?>">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($r13['pimag']); ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?php echo $r13['category']; ?></h4>
                               
                                <div class="portfolio-links">
                                  
                                    <a href="portfolio-details.php?purl=<?php echo $r13['purl']; ?>" class="portfolio-details-btn" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>
<?php
$st11="select * from about";
$rs11=mysqli_query($conn,$st11);
while($r11=mysqli_fetch_array($rs11)){
  ?>
      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?php echo $r11['city'] ?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="www.github.com" class="twitter"><i class="bi bi-github"></i></a>
              <a href="www.facebook.com" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="www.instagram.com" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="prnp9694@gmail.com" class="google-plus"><i class="bi bi-envelope-fill"></i></a>
              <a href="www.linkedin.com" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?php echo $r11['email'] ?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?php echo $phone ?></p>
          </div>
        </div>
      </div>
<?php
}
?>
<?php
if(isset($_POST['submit'])){
    // Check if the form is submitted
    $name = $_POST['coname'];
    $email = $_POST['cemail'];
    $subject = $_POST['csub'];
    $message = $_POST['cmess'];

    // Insert data into the database using prepared statement
    $sql = "INSERT INTO contact (coname, cemail, csub, cmess) VALUES ('$name','$email','$subject','$message')";
    $rse=mysqli_query($conn,$sql);
    if ($rse==true) {
        // Alert message for successful data insertion
        ?>
        <script>
          alert('Message sent successfully');
          window.location.href="index.php";
          exit();
        </script>
        <?php
    } else {
        // Alert message for error in data insertion
        echo 'error';
    }

    
}
?>
<style>

.cform-container input[type='text'],.cform-container input[type='email'],.cform-container input[type='submit'],.cform-container textarea{
  background: rgba(255, 255, 255, 0.08);
  color: white;
  
}
.cform-container input[type='text']::placeholder,
  .cform-container input[type='email']::placeholder,
  .cform-container input[type='submit'],
  .cform-container textarea::placeholder{
    color: white;
  }
  .cform-container input[type='submit']{
    border:1px solid;
    border-radius: 5px;
    width: 40%;
    padding: 12px;
    margin:12px;
  }
  .cform-container input[type='submit']:hover{
   background: #18d26e; 
  }
</style>
<!-- HTML form -->
<div class="cform-container">
<form action="" method="post" onsubmit="return confirm('Send message?')" >
    <div class="row">
        <div class="col-md-6 form-group">
            <input type="text" name="coname" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" name="cemail" class="form-control" placeholder="Your Email" required>
        </div>
    </div>
    <div class="form-group mt-3">
        <input type="text" name="csub" class="form-control" placeholder="Subject" required>
    </div>
    <div class="form-group mt-3">
        <textarea name="cmess" class="form-control" rows="5" placeholder="Message" required></textarea>
    </div>
    <div class="text-center">
        <input type="submit" name="submit"  value="Send Message">
    </div>
</form>
</div>


    
</div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="index.php">Nikhlesh</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>