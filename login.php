<!DOCTYPE html>
<?php 
    session_start();
    include('config/config.php');
    error_reporting(0);
?>
<html lang="en">

<head>
  <title>LOG IN ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

        <!-- HEADER -->
        <?php include('include/header.php'); ?>

        <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="index.html">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">Login</span>
        </div>
        </div>

        <div class="site-section">
            <div class="container">


        <div class="container pt-5 mb-5">
            <div class="row mb-5 justify-content-center text-center">
            <h2 class="section-title-underline">
                <span>LOG IN ADMINISTRATOR</span>
            </h2>
        </div>

<!-- content -->
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form action="admin/cek_login.php" method="post">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" class="form-control form-control-lg">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" id="pword" class="form-control form-control-lg">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" align='center'>
                            <input type="submit" value="Log In" class="btn btn-primary btn-lg px-5">
                            <input type="reset" value="Reset" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
          </div>
        </div>
    </div>



  <!-- loader -->
  <!-- <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script> -->




  <script src="js/main.js"></script>

  <!-- Footer (BAWAH) -->
  <?php include('include/footer.php');?>
</body>

</html>