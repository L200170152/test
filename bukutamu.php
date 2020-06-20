<!DOCTYPE html>
<?php 
    include('config/config.php');
    error_reporting(0);

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$sql = "insert into tblbukutamu(postId,name,email,comment) values('$postid','$name','$email','$comment')";
$query=mysqli_query($con, $sql);
if($query):
  echo "<script>alert('Terimakasih atas masukan anda. Semoga kami bisa lebih baik lagi ');</script>";
else :
 echo "<script>alert('Ada yang salah.');</script>";  

endif;
}
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
    
    <!--bar header  -->
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4">
        <div class="container">
        </div>
      </div> 
<div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Fitur</span>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Buku Tamu</span>
      </div>
    </div>


<!-- judul -->
    <div class="container pt-5 mb-5">
        <div class="row mb-10 justify-content-center text-center">
          <h2 class="section-title-underline">
            <span>Buku Tamu</span>
          </h2>
      </div>
<!-- content -->
            <div class="row justify-content-center">
            <div class="col-lg-8">
                <p>
                <div class="card-body">
                    <form name="Comment" method="post">
                        <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Masukkan nama anda" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email anda" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="comment" rows="3" placeholder="Tanggapan anda mengenai website ini atau SMAN 6 SURAKARTA" required></textarea>
                    </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
              </div>
            </div>
          </div> 
<!-- Footer (BAWAH) -->
    <?php include('include/footer.php');?>

</body>

</html>