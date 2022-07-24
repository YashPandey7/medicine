<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
  $loggedin = true;
}
else{
  $loggedin = false;
}

?>

<?php

    echo '
    <!-- header section strats -->
    
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">';

        if(!$loggedin){
        echo '
          <a class="navbar-brand" href="./index.php">
            <img src="images/logo.png" alt="">
            <span>
              Medion
            </span>
          </a>';
        }

        if($loggedin){
          echo '
            <a class="navbar-brand" href="./welcome.php">
              <img src="images/logo.png" alt="">
              <span>
                Medion
              </span>
            </a>';
          }
          

        echo'
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">';

              if(!$loggedin)
              {
                echo '
                <li class="nav-item active">
                  <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./about.php"> About </a>
                </li>';
              }

                if($loggedin)
                {
                  echo '
                  <li class="nav-item active">
                    <a class="nav-link" href="./welcome.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./login_about.php"> About </a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link" href="./medicine.php"> Medicine </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contact.php">Contact us</a>
                </li>
                  ';
                }
                
                
                echo '
              </ul>
              <form class="form-inline ">
                <input type="search" placeholder="Search">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>';
              
              if(!$loggedin)
                {
                  echo '
                  <div class="login_btn-contanier ml-0 ml-lg-5">
                  <a href="./login.php">
                    <img src="images/user.png" alt="">
                    <span>
                      Login
                    </span>
                  </a>
                  </div>
                  ';
                }

                if($loggedin)
                {
                  echo '
                  <div class="login_btn-contanier ml-0 ml-lg-5">
                    <img src="images/user.png" alt="">
                    <span style="color:white;">&nbsp;&nbsp;';
                    
                    echo $_SESSION['username']; 

                    echo '
                    </span>
                  </div>


                  <div class="login_btn-contanier ml-0 ml-lg-5">
                  <a href="./logout.php">
                    <span>
                      Logout
                    </span>
                  </a>
                  </div>
                  ';
                }
                

             echo ' 
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    ';

?>