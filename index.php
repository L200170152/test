<!DOCTYPE html>
<html lang="en">

<?php 
session_start();
include('config/config.php');
error_reporting(0);

?>

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

  <body>
    <!-- Header -->
    <?php include('include/header.php');?>
    
    <!-- FOTO BERANDA SLIDE SHOW -->

    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/hd1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h2><b>SMA NEGERI 6 SURAKARTA</b></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/dok2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h2><b>BERPRESTASI DALAM MUTU</b></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/dok5.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h2><b>UNGGUL DALAM BAHASA</b></h2>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/dok4.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h2><b>SANTUN DALAM BERBUDAYA</b></h2>
            </div>
          </div>
        </div>
      </div>

    </div>
      
  <!-- BAGIAN PENGUMUMAN (BERANDA) -->  
    <div class="news-updates">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="section-heading">
              <p class="text-black">INFORMASI & PENGUMUMAN</p>
            </div>
            <div class="row">
              <?php 
                $batas   =4;
                $halaman = @$_GET['halaman'];
                    if(empty($halaman)){
                        $posisi  = 0;
                        $halaman = 1;
                    }
                    else{
                        $posisi  = ($halaman-1) * $batas;
                    }
        
                $no = $posisi+1;
                $query="select tblpost.id as pid, tblpost.judulpost as posttitle, tblpost.imagepost, tblkategori.KategoriNama as category, 
                tblkategori.id as cid, 
                tblpost.detailpost as postdetails, tblpost.PostingDate as postingdate, tblpost.urlpost as url 
                from tblpost left join tblkategori on tblkategori.id=tblpost.CategoryId where tblpost.Is_Active=1 order by tblpost.id desc 
                LIMIT $posisi,$batas";
                $result= mysqli_query($con,$query);
                while ($row=mysqli_fetch_array($result)) {
              ?>
              <div class="col-lg-6">
                <div class="post-entry-big">
                  <div class="post-content">
                    <div class="card mb-4">
                      <img class="card-img-top img-responsive" style="height:300px;" src="admin/postimages/<?php echo htmlentities($row['imagepost']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                      <div class="card-body">
                        <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
                        <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </p>
                        <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
                      </div>
                      <div class="card-footer text-muted">
                        Posted on <?php echo htmlentities($row['postingdate']);?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
                } 
                
                $query2     = mysqli_query($con, "select * from tblpost");
                $jmldata    = mysqli_num_rows($query2);
                $jmlhalaman = ceil($jmldata/$batas);
              ?>
              
              
            </div>
            <div class="text-center">
              <ul class="pagination">
                  <?php
                  for($i=1;$i<=$jmlhalaman;$i++) {
                      if ($i != $halaman) {
                          echo "<li class='page-item'><a class='page-link' href='index.php?halaman=$i'>$i</a></li>";
                      } else {
                          echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                      }
                  }
                  ?>
              </ul>
            </div>
          </div>

        <!-- SIDEBAR KATEGORI DAN RECENT NEWS -->
          <div class="col-lg-3">
          <div class="card my-4">
            <h5 class="card-header">Berita Terbaru</h5>
            <div class="card-body">
                <ul class="mb-0">
                    <?php
                      $query="select tblpost.id as pid, tblpost.judulpost as posttitle from tblpost left join tblkategori on tblkategori.id=tblpost.CategoryId 
                      order by tblpost.id desc  limit 8";
                      $result= mysqli_query($con,$query);
                      while ($row=mysqli_fetch_array($result)) {
                    ?>
                    <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
                    <?php 
                    } 
                    ?>
                </ul>
            </div>
          </div>
        </div>
        </div>
      </div>
      </div>
      </div>

      <!-- Footer -->
      <?php include('include/footer.php');?>

  </body>
</html>