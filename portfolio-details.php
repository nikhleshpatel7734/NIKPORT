<?php 
include('config.php');

// Fetch project details based on purl
$purl = $_GET['purl'];
$str11 = "SELECT * FROM projects WHERE purl = '$purl'";
$res11 = mysqli_query($conn, $str11);
$r11 = mysqli_fetch_array($res11);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Head content here -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio- Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords"> 

  <!-- Favicons -->

  <link rel="shortcut icon" href="assets/img/nik.png" type="image/x-icon">
  
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
  <link href="assets/css/style.css" rel="stylesheet">
<style>
    .close-button {
    position: fixed; /* Position relative to the viewport */
    top: 10px; /* Adjust as needed */
    right: 35px; /* Adjust as needed */
    z-index: 9999; /* Ensure it's on top of other elements */
}
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

<main id="main">
    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="portfolio-title"><?php echo $r11['category']; ?></h2>
                    <a href="#" class="close-button" onclick="goToPortfolio()">
    <img src="assets/img/cross.png" style="height:35px; width:35px;" alt="Close">
</a>

                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="data:image/jpg;base64,<?php echo base64_encode($r11['pimag']); ?>" alt="<?php echo $r11['category']; ?>">
                            </div>
                            <!-- Add more swiper slides if needed -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4 portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong>: <?php echo $r11['category']; ?></li>
                        <li><strong>Date</strong>: <?php echo $r11['pdate']; ?></li>
                        <li><strong>Project URL</strong>: <a href="<?php echo $r11['purl']; ?>"><?php echo $r11['purl']; ?></a></li>
                    </ul>

                    <p><?php echo $r11['pdes']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Details -->
</main>

<!-- JavaScript imports and scripts here -->
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

    <script>
    function goToPortfolio() {
        window.location.href = 'index.php#portfolio';
    }
</script>


</body>
</html>



































