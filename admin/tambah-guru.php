<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['level'])==0)
  { 
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nuptk=$_POST['nuptk'];
$mengampu=$_POST['mengampu'];
$status=1;
$query=mysqli_query($con,"insert into tblguru values('','$nip','$nama','$alamat','$nuptk','$mengampu')");
if($query)
{
$msg="Data guru ditambahkan ";
}
else{
$error="Ada yang salah. Coba lagi.";    
} 
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Newsportal | Add Category</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Tambah Guru</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Data Guru </a>
                                        </li>
                                        <li class="active">
                                            Tambah Guru
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Tambah Guru </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Berhasil!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh sorry!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>
                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" name="nip" method="post">
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">NIP</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="nip" required>
	                                                </div>
                                                </div>
                                                
                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Nama</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="nama" required>
	                                                </div>
	                                            </div>
	                                     
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Alamat</label>
	                                                <div class="col-md-10">
	                                                    <textarea class="form-control" rows="5" name="alamat" required></textarea>
	                                                </div>
                                                </div>
                                                
                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">NUPTK</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="nuptk" required>
	                                                </div>
                                                </div>
                                                
                                                <div class="form-group">
	                                                <label class="col-md-2 control-label">Mengampu</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="" name="mengampu" required>
	                                                </div>
	                                            </div>

                                            <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Submit
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>