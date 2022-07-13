<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true)
{
    header("location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Medion</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>

.hero {
  width: 100%;
  height: 100vh;
  background: url(images/hero-bg.png) top center no-repeat;
  background-size: cover;
}
.hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  color: #012970;
}
.hero h2 {
  color: #444444;
  margin: 15px 0 0 0;
  font-size: 26px;
}
.hero .btn-get-started {
  margin-top: 30px;
  line-height: 0;
  padding: 15px 40px;
  border-radius: 4px;
  transition: 0.5s;
  color: #fff;
  background: #4154f1;
  box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
}
.hero .btn-get-started span {
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  font-size: 16px;
  letter-spacing: 1px;
}
.hero .btn-get-started i {
  margin-left: 5px;
  font-size: 18px;
  transition: 0.3s;
}
.hero .btn-get-started:hover i {
  transform: translateX(5px);
}
.hero .hero-img {
  text-align: right;
}
@media (min-width: 1024px) {
  .hero {
    background-attachment: fixed;
  }
}
@media (max-width: 991px) {
  .hero {
    height: auto;
    padding: 120px 0 60px 0;
  }
  .hero .hero-img {
    text-align: center;
    margin-top: 80px;
  }
  .hero .hero-img img {
    width: 80%;
  }
}
@media (max-width: 768px) {
  .hero {
    text-align: center;
  }
  .hero h1 {
    font-size: 32px;
  }
  .hero h2 {
    font-size: 24px;
  }
  .hero .hero-img img {
    width: 100%;
  }
}


  </style>

</head>
<body>
    
        
    <!-- Navbar -->
    <?php
        require 'partials/_nav.php'
    ?>    

    <section id="hero" class="hero d-flex align-items-center">

    <div class="container" style="background-attachment:fixed;">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Hi <?php echo $_SESSION['username']; ?>, <br>
            Welcome To Our
        Online Medicine</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">We offer industry expertise and an expanding portfolio of safe, effective products that improve quality, manage costs and reduce complexity</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="images/med.svg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

        <!-- Image -->
        <?php
            require 'partials/_content.php';
        ?>

    

        <!-- Aboutus  -->
        <?php
            require 'partials/_aboutus.php';
        ?>

        <!-- Client -->
        <?php
            require 'partials/_client.php';
        ?>

        <!-- Contact Us  -->
        <?php
            require 'partials/_contactus.php';
        ?>

    <!-- Footer -->
    <?php
        require 'partials/_footer.php'
    ?> 

</body>
</html>