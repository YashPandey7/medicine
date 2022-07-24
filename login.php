<?php
$login = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/_database.php';
    $username = $_POST['username'];
    $password = $_POST['password'];


     // "SELECT * FROM `signup` WHERE username = '$username'"

      $sql = "SELECT * FROM `signup` WHERE username = '$username'";
      $result = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);

      if($num == 1)
      {
          while($row = mysqli_fetch_assoc($result))
          {
              if(password_verify($password , $row['password']))
              {
                $login = true;
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;
                header("location:welcome.php");
              }
              else{
                $showerror=true;
            }
          }
      }
        
      else{
            $showerror=true;
        }
}
?>


<!DOCTYPE html>
<html lang="en">
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
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
    }
  </style>
</head>
<body>
    
    <!-- Navbar -->
    <?php
        require 'partials/_nav.php';
    ?>
     


<?php
    if($login)
    {
        echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> 
    </div>';
    }

    if($showerror)
    {
        echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Invalid Credentials
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> 
    </div>';
    }

    ?>


    <!-- Login -->
    <br><br><br>
<section >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/login.svg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="padding-top:35px;">
        
      <form action="login.php" method="post">
          <div class="d-flex flex-row align-items-center  justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3 display-4 " >Sign in </p>
          </div><br>

          

          <!-- Username input -->
          <div class="form-outline mb-4 " style="margin-top:25px;">
            <input type="text" id="z" class="form-control form-control-md" name="username"
              placeholder="Enter a valid username" />
              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
              <label class="form-label" for="form3Example3">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name="password" />
              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
              <label class="form-label" for="form3Example4">Password</label>
          </div>

          

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<br><br><br>
    
    <!-- Footer -->
    <?php
        require 'partials/_footer.php'
    ?> 



    <!-- Bootstrap Links-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>