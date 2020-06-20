<?php 
    include('config/config.php')
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
    <?php include('include/header.php');

$pagetype='contactus';
$query=mysqli_query($con,"select judulPage,description from tblpage where namaPage='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      
    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4">
        <div class="container">
        </div>
      </div> 
    
<!-- Content ( Visi dan Misi) -->

<div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="#">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Kontak</span>
      </div>
</div>

    <div class="container pt-5 mb-5">
            <div class="row">
              <div class="col-lg-4">
                <h2 class="section-title-underline">
                <span><?php echo htmlentities($row['judulPage'])?></span></h2>
              </div>
    <div class="col-lg-4">
        <p><?php echo $row['description'];?></p>
    </div>
    <div class="col-lg-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.228450978431!2d110.8294431143238!3d-7.550049376636318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1694befd5281%3A0xf9e7fefc6a5c4180!2sSMA%20Negeri%206%20Surakarta!5e0!3m2!1sid!2sid!4v1592206542928!5m2!1sid!2sid" 
          width="450" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
            </div>
<!-- /.row -->
<?php } ?>
<!-- /.container -->
            </div>

<!-- Footer (BAWAH) -->
    <?php include('include/footer.php');?>

</body>

</html>