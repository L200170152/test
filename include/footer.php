<!DOCTYPE html>
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

 
 
 
 
 
 
 <!-- FOOTER (BAWAH) -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <p class="mb-4"><img src="images/logosma6.jpg" alt="Image" class="img-fluid"></p>
          <p> SMA Negeri 6 Surakarta berdiri pada tahun 1976 dengan nama Sekolah Menengah Persiapan Pembangunan (SMPP) Nomor 40 Surakarta. 
          </p>  
          <p><a href="about.html">Learn More</a></p>
        </div>
        <div class="col-lg-3">
          <h3 class="footer-heading"><span>Link Terkait</span></h3>
          <ul class="list-unstyled">
              <li><a href="https://www.kemdikbud.go.id/">Kementrian Pendidikan Republik Indonesia</a></li>
              <li><a href="https://jateng.siap-ppdb.com/">PPDB</a></li>
              <li><a href="https://dinaspendidikan.surakarta.go.id/">Dinas Pendidikan Surakarta</a></li>
              <li><a href="https://surakarta.go.id/">Info Surakarta</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
            <h3 class="footer-heading"><span>Berita Terbaru</span></h3>
            <ul class="list-unstyled">
            <?php
                    $query="select tblpost.id as pid,tblpost.judulpost as posttitle from tblpost left join tblkategori on tblkategori.id=tblpost.CategoryId 
                    limit 8";
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
        <div class="col-lg-3">
            <h3 class="footer-heading"><span>Kontak Kami</span></h3>
            <ul class="list-unstyled">
                <li>SMA NEGERI 6 SURAKARTA</li>
                <li>Jl. Mr. Sartono No.30, Nusukan, Kec. Banjarsari</li>
                <li>Kota Surakarta, Jawa Tengah 57136 </li>
                <li>Email : info@sman6surakarta.sch.id</li>
                <li>Phone : 0271- 853209</li>
            </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="copyright">
              <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SMAN 6 SURAKARTA </a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>

  <!-- <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div> -->

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
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
</html>