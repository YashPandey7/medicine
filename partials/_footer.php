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
  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contact
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  +91 7458997701
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="images/email.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  yashdevesh10@gmail.com
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">';

            if(!$loggedin) {
              echo '
              <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.php"> About </a>
              </li>'
              ;}

              if($loggedin){
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
                  <a class="nav-link" href="./contact.php"> Contact Us </a>
                </li>';
              }

              echo '
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_news">
            <h4>
              newsletter
            </h4>
            <form action="">
              <input type="text" placeholder="Enter Your email">
              <div class="d-flex justify-content-center justify-content-end mt-3">
                <button>
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2022 All Rights Reserved. Design by <a href="https://yashpandey.netlify.app/" target="_blank" style="color:#008080;">Yash Pandey</a>.
    </p>
  </section>
  <!-- footer section -->
    ';
?>