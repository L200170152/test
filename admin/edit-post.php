
<?php
    include 'includes/config.php';
    error_reporting(0);
    $id  = $_GET['id'];
    $sql = "SELECT *FROM tblpost WHERE id='$id'";
    $que = mysqli_query($con, $sql);
 
    while ($data=mysqli_fetch_array($que)) 
    {
            $id                  =$data['id'];
            $posttitle           =$data['judulpost'];
            $catid               =$data['CategoryId'];
            $postdetails         =$data['detailpost'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>ADMIN | DASHBOARD</title>

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
                                    <h4 class="page-title">Edit POST</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Berita </a>
                                        </li>
                                        <li class="active">
                                            Edit POST
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
<div class="row">
    <div class="col-md-6">
        <form class="form-horizontal" action="ubah-post.php" method="post" enctype="multipart/form-data">
	        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo"$id"; ?>">
	            <label class="col-md-2 control-label">Judul Post :</label>
	                <div class="col-md-10">
                        <input type="text" name="judulpost" required="" value="<?php echo "$posttitle"; ?>">
                    </div>
            </div>
            <div class="form-group">
            <input type="hidden" name="id" value="<?php echo"$id"; ?>">
	            <label class="col-md-2 control-label">Deskripsi :</label>
	                <div class="col-md-10">
                        <textarea name="detailpost" required=""><?php echo "$postdetails"; ?></textarea>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">&nbsp;</label>
                    <div class="col-md-10">
                        <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" value="SIMPAN"> UPDATE </button>
                    </div>
            </div>
	    </form>
    </div>
</div>