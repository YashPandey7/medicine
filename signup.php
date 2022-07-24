<?php
$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/_database.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    //$exists = false;
    //check whether this username exists
    $existsql = "SELECT * FROM `signup` WHERE username = '$username'";
    $result = mysqli_query($conn, $existsql);
    $numexistrows = mysqli_num_rows($result);

    if($numexistrows > 0 )
    {
        //$exists = true;
        $showerror = "Username already Exists";
    }
    else
    {  
        if(($password == $cpassword))
        {
            $hash = password_hash($password , PASSWORD_DEFAULT);
            $sql = "INSERT INTO `signup` (`username`, `password`, `Date & Time`) VALUES ('$username', '$hash', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                $showalert = true;
                header("location:login.php");
            }
        }
        else
        {
            $showerror="Password do not match"; 
        }
    }
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
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
 

        <?php
            require 'partials/_nav.php';
        ?> 
    
    <?php
      if($showalert)
      {
          echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your account is created successfully.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button> 
      </div>';
      }
  
      if($showerror)
      {
          echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error! </strong>'. $showerror.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button> 
      </div>';
      }
    ?>

    <br><br><br>

  <!-- SignUp page -->
  <section >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/signup.svg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="padding-top:35px;">
        
      <form action="signup.php" method="post">
          <div class="d-flex flex-row align-items-center  justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3 display-4 " >Register Now</p>
          </div><br>

          <!-- Username input -->
          <div class="form-outline mb-4 " style="margin-top:25px;">
            <input type="text" id="form3Example3" class="form-control form-control-md" name="username"
              placeholder="Enter a username" />
              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
              <label class="form-label" for="form3Example3">Username</label>
          </div>

          

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-md"
              placeholder="Enter password" name="password" />
              <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
              <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-md"
              placeholder="Confirm password" name="cpassword" />
              <i class="fas fa-key fa-lg me-3 fa-fw"></i>
              <label class="form-label" for="form3Example4">Confirm Password</label>
          </div>

          

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Have an account already? <a href="login.php"
                class="link-danger">Log in</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section> <br><br><br>


    <?php
        require 'partials/_footer.php';
    ?> 


<!-- Bootstrap -->
<!-- Bootstrap Links-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>
</html>