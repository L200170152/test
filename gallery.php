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
  
  <!-- <style>
    li{
      text-decoration:none;
      list-style:none;
      margin:5px 10px;
    }
    img{
      border:1px solid #666;
      margin: -6px 6px 6px -6px;
      padding:5px;
    }
  </style> -->


</head>

<body>

  <!-- HEADER -->
      <?php include('include/header.php');

        
            
      ?>
    
    <!--bar header  -->
      <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4">
          <div class="container">
          </div>
        </div> 
      <div class="custom-breadcrumns border-bottom">
        <div class="container">
          <a href="index.php">Home</a>
          <span class="mx-3 icon-keyboard_arrow_right"></span>
          <span class="current">Galeri</span>
        </div>
      </div> 

      <div class="container pt-5 mb-5">
        <div class="row mb-5 justify-content-center text-center">
          <h2 class="section-title-underline">
            <span>Galeri</span>
          </h2>
        </div>
        <div class="row text-center">
          <?php
            $batas   = 3;
            $halaman = @$_GET['halaman'];
                if(empty($halaman)){
                    $posisi  = 0;
                    $halaman = 1;
                }
                else{
                    $posisi  = ($halaman-1) * $batas;
                }
    
            $no = $posisi+1;
            $query=mysqli_query($con,"select * from gallery order by id desc limit $posisi,$batas");
            while($row=mysqli_fetch_array($query))  { ?>
                <div class="col-lg-12 mt-4">
                  <div class="card">
                    <div class="row">
                      <div class="col-lg-4">
                        <img src="admin/images/<?php echo $row['nama']; ?>" class="card-img-top" />
                      </div>
                      <div class="col-lg-8 text-left">
                        <div class="card-body">
                          <h2 class="card-title"><?php echo $row['judul']; ?></h2>
                          <p class="card-text"><?php echo $row['keterangan']; ?></p>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              <?php }
              $query2     = mysqli_query($con, "select * from gallery");
              $jmldata    = mysqli_num_rows($query2);
              $jmlhalaman = ceil($jmldata/$batas);
            ?>
            
        </div>
        <div class="row mt-5 justify-content-center">
          <div class="col-12">
            <ul class="pagination">
                <?php
                for($i=1;$i<=$jmlhalaman;$i++) {
                    if ($i != $halaman) {
                        echo "<li class='page-item'><a class='page-link' href='?halaman=$i'>$i</a></li>";
                    } else {
                        echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                    }
                }
                ?>
            </ul>
          </div>
        </div>
        <!-- /.container -->
      </div>
    </div>
  </div> 

<!-- Footer (BAWAH) -->
    <?php include('include/footer.php');?>

</body>

</html>