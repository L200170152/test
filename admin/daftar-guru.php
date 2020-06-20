<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['level'])==0)
  { 
header('location:index.php');
}
else{

// Code for Forever deletionparmdel
// if($_GET['action']=='parmdel')
// {
   // $query = "DELETE FROM tblguru WHERE id='$id' ";
    // $hasil_query = mysqli_query($con, $query);
	// $delmsg="Data guru sudah dihapus";
//}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title> ADMIN | DAFTAR GURU</title>
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

            <!-- ========== Left Sidebar Start ========== -->
<?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Daftar Guru</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#"> Data Guru </a>
                                        </li>
                                        <li class="active">
                                           Daftar Guru
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
            <div class="row">
              <div class="col-md-8"></div>
              <div class="col-md-4 text-right">
                <form method="get" action="daftar-guru.php">
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="cari" placeholder="Cari">
                    </div>
                    <div class="col-sm-2">
                      <button type="submit" name="tombol" class="btn btn-primary">Cari</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="row">
            <div class="col-sm-6">  
                <?php if($msg){ ?>
                    <div class="alert alert-success" role="alert">
                        <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                    </div>
                <?php } ?>
                <?php if($delmsg){ ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?></div>
                <?php } ?>
            </div>


                                    <div class="row">
										<div class="col-md-12">
											<div class="demo-box m-t-20">    
												<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>NIP</th>
                                                                <th>Nama</th>
                                                                <th>Alamat</th>
                                                                <th>NUPTK</th>
                                                                <th>Mengampu</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

<?php
if($_GET['cari']) {
  $carian = $_GET['cari'];
  $query=mysqli_query($con,"SELECT * FROM tblguru WHERE namaguru LIKE '%$carian%' OR nipguru LIKE '%$carian%'");
} else {
  $query=mysqli_query($con,"SELECT * FROM tblguru");
}
$cnt=1;
while($row=mysqli_fetch_array($query))
{
            $id         = $row['id'];
            $nip        = $row['nipguru'];
            $nama       = $row['namaguru'];
            $alamat     = $row['alamatguru'];
            $NUPTK      = $row['NUPTK'];
            $mengampu   = $row['mengampu'];
?>

 <tr>
<th scope="row"><?php echo htmlentities($cnt);?></th>
<td><?php echo htmlentities($row['nipguru']);?></td>
<td><?php echo htmlentities($row['namaguru']);?></td>
<td><?php echo htmlentities($row['alamatguru']);?></td>
<td><?php echo htmlentities($row['NUPTK']);?></td>
<td><?php echo htmlentities($row['mengampu']);?></td>
<td><a href="edit-guru.php?id=<?php echo htmlentities($row['id']);?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
	&nbsp;<a href="hapus-guru.php?rid=<?php echo htmlentities($row['id']);?>"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
</tr>
<?php
$cnt++;
 } ?>

<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysql_query("select * from tblguru where namaguru like '%".$cari."%'");				
}else{
    $data = mysql_query("select * from tblguru");		
}
$no = 1;
while($d = mysql_fetch_array($data)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['namaguru']; ?></td>
</tr>
<?php } ?>

</tbody>
                                                  
                                                    </table>
                                                </div>




											</div>

										</div>

							
									</div>
                                    <!--- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
<?php include('includes/footer.php');?>
            </div>

        </div>
        <!-- END wrapper -->



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