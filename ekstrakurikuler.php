<?php 
    include('config/config.php');
    error_reporting(0);
?>
<html lang="en">

<head>
  <title>SMAN 6 SURAKARTA</title>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
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

<body>

<!-- HEADER -->
    <?php include('include/header.php');?>
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4">
        <div class="container"></div>
        </div> 
        <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="index.php">Home</a>
                <span class="mx-3 icon-keyboard_arrow_right"></span>
                <span class="current">Ekstrakurikuler</span>
        </div>
        </div>
        <div class="container pt-5 mb-5">
        <div class="row mb-10 justify-content-center text-center">
            <h2 class="section-title-underline">
                <span>Ekstrakurikuler</span>
            </h2>
        </div>

<!-- content -->
    <div class="site-section">
        <div class="container">
            <div class="row">
            <?php 
            $query = mysqli_query($con,"SELECT * FROM ekstrakurikuler");
            while($row = mysqli_fetch_array($query))
            {
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
               
                <div class="course-1-item">
                        
                        <figure class="thumnail">
                        <td><img src="images/<?php echo $row['nama']; ?>" width="339" height="200"></td>
                        
                        <div class="category"><h3><center> <td><?php echo $row['keterangan']; ?></td> </center></h3></div>  
                        </figure>
                </div>
                </div>
                <?php
            }
            ?>

            </div>
        </div>
    </div>
</div>

<!-- Footer (BAWAH) -->
    <?php include('include/footer.php');?>

</body>

</html>