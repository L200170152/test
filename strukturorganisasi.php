<!DOCTYPE html>
<?php 
    include('config/config.php');
    error_reporting(0);
?>
<html lang="en">

<head>
  <title>SMAN 6 SURAKARTA</title>
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
    <?php include('include/header.php'); 
    $query = mysqli_query($con,"SELECT * FROM strukturorganisasi");
    while($row=mysqli_fetch_array($query))
    {
    ?>

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4">
        <div class="container">
        </div>
      </div> 

<!-- bar header -->
<div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Profil</span>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Struktur Organisasi</span>
      </div>
    </div>
<!-- content -->
<div class="container pt-5 mb-5">
            <div class="row">
              <div class="col-lg-4">
              <h2 class="section-title-underline">
            <span>Struktur Organisasi</span>
          </h2>
              </div>
              <div class="col-lg-4">
                <td><img src="images/<?php echo $row['nama']; ?>" title="gambar" width="350" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;"></td>
                <?php } ?>
              </div>
          </div>
          </div>

  <!-- Footer (BAWAH) -->
  <?php include('include/footer.php');?>
</body>

</html>