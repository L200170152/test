<!DOCTYPE html>
<?php
error_reporting(0);
?>
<html lang="en">
<head>
  <title>SMAN 6 SURAKARTA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

    <?php include('include/header.php');?>
    

<!-- bar header -->
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4">
        <div class="container"></div>
        </div> 
        <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="index.php">Home</a>
                <span class="mx-3 icon-keyboard_arrow_right"></span>
                <span class="current">Profil</span>
                <span class="mx-3 icon-keyboard_arrow_right"></span>
                <span class="current">Data Guru</span>
        </div>
        </div>
        <div class="container pt-5 mb-5">
        <div class="row mb-5 justify-content-center text-center">
            <h2 class="section-title-underline">
                <span>Data Guru</span>
            </h2>
        </div>
  
  <!--Panel Form pencarian -->
  <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading"><b>Pencarian</b></div>
        <div class="panel-body mb-4">
          <form class="form-inline" action="#" method="get">
            <div class="form-group">
              <select class="form-control" id="Kolom" name="Kolom" required="">
                <?php
                  $kolom=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
                ?>
                <option value="namaguru" <?php if ($kolom=="namaguru") echo "selected"; ?>>Nama</option>
                <option value="nipguru" <?php if ($kolom=="nipguru") echo "selected";?>>NIP</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="KataKunci" name="KataKunci" placeholder="Kata kunci.." required="" 
              value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
            <a href="dataguru.php" class="btn btn-danger">Reset</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Tabel data Siswa -->
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>No.</th>
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
      include "config/config.php";
      error_reporting(0);
      $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
      
      $kolomCari= $_GET['Kolom'];
     
      $kolomKataKunci= $_GET['KataKunci']; 

      // Jumlah data per halaman
      $limit = 10;

      $limitStart = ($page - 1) * $limit;
      
      //kondisi jika parameter pencarian kosong
      if($kolomCari=="" && $kolomKataKunci==""){
        $SqlQuery = mysqli_query($con, "SELECT * FROM tblguru LIMIT ".$limitStart.",".$limit);
      }else{
        //kondisi jika parameter kolom pencarian diisi
        $SqlQuery = mysqli_query($con, "SELECT * FROM tblguru WHERE $kolomCari LIKE '%$kolomKataKunci%' LIMIT ".$limitStart.",".$limit);
      }
      
      $no = $limitStart + 1;
      
      while($row = mysqli_fetch_array($SqlQuery)){ 
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['nipguru']; ?></td>
          <td><?php echo $row['namaguru']; ?></td>
          <td><?php echo $row['alamatguru']; ?></td>
          <td><?php echo $row['NUPTK']; ?></td>
          <td><?php echo $row['mengampu']; ?></td>
          <td>
            <a class = "btn btn-primary btn-lg" href="dataguru.php?id=<?php echo $row['id']; ?>">Detail</a> |
          </td>
        </tr>
      <?php           
      }
      ?>
    </tbody>      
  </table>
  <div align="right">
    <ul class="pagination">
      <?php
        // Jika page = 1, maka LinkPrev disable
        if($page == 1){ 
      ?>        
        <!-- link Previous Page disable --> 
        <li class="disabled"><a href="#">Previous</a></li>
      <?php
        }
        else{ 
          $LinkPrev = ($page > 1)? $page - 1 : 1;  

          if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li><a href="dataguru.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
       <?php     
          }else{
        ?> 
          <li><a href="dataguru.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>">Previous</a></li>
         <?php
           } 
        }
      ?>

      <?php
        //kondisi jika parameter pencarian kosong
        if($kolomCari=="" && $kolomKataKunci==""){
          $SqlQuery = mysqli_query($con, "SELECT * FROM tblguru");
        }else{
          //kondisi jika parameter kolom pencarian diisi
          $SqlQuery = mysqli_query($con, "SELECT * FROM tblguru WHERE $kolomCari LIKE '%$kolomKataKunci%'");
        }     
      
        //Hitung semua jumlah data yang berada pada tabel Sisawa
        $JumlahData = mysqli_num_rows($SqlQuery);
        
        // Hitung jumlah halaman yang tersedia
        $jumlahPage = ceil($JumlahData / $limit); 
        
        // Jumlah link number 
        $jumlahNumber = 1; 

        // Untuk awal link number
        $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
        
        // Untuk akhir link number
        $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
        
        for($i = $startNumber; $i <= $endNumber; $i++){
          $linkActive = ($page == $i)? ' class="active"' : '';

          if($kolomCari=="" && $kolomKataKunci==""){
      ?>
          <li<?php echo $linkActive; ?>><a href="dataguru.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

      <?php
        }else{
          ?>
          <li<?php echo $linkActive; ?>><a href="dataguru.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php
        }
      }
      ?>
      
      <!-- link Next Page -->
      <?php       
       if($page == $jumlahPage){ 
      ?>
        <li class="disabled"><a href="#">Next</a></li>
      <?php
      }
      else{
        $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
       if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li><a href="dataguru.php?page=<?php echo $linkNext; ?>">Next</a></li>
       <?php     
          }else{
        ?> 
           <li><a href="dataguru.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>">Next</a></li>
      <?php
        }
      }
      ?>
    </ul>
  </div>
</div>

<!-- Modal start here -->
<div class="modal fade" id="guru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Data Guru</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php 
            $id = $_GET['id'];
            $query = "SELECT * FROM tblguru WHERE id='$id'";
            $run = mysqli_query($con, $query);
            $row = mysqli_fetch_array($run);
          ?>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="form-control-label">NIP Guru :</label>
                <label class="form-control-label" ><?php echo $row['nipguru'];?></label>
              </div>
              <div class="form-group">
                <label class="form-control-label">Nama Guru : </label>
                <label class="form-control-label" ><?php echo $row['namaguru'];?></label>
              </div>
              <div class="form-group">
                <label class="form-control-label">Alamat Guru : </label>
                <label class="form-control-label" ><?php echo $row['alamatguru'];?></label>
              </div>
              <div class="form-group">
                <label class="form-control-label">NUPTK Guru : </label>
                <label class="form-control-label" ><?php echo $row['NUPTK'];?></label>
              </div>
              <div class="form-group">
                <label class="form-control-label">Mengampu : </label>
                <label class="form-control-label" ><?php echo $row['mengampu'];?></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End of Modal -->
<?php 
  if($_GET['id']) {
    echo "
      <script>
        jQuery(document).ready(function () {
          jQuery('#guru').modal('show');   
        });
      </script>";
  }
?>
<script src="<?=$base_url;?>/assets/js/jquery-2.2.3.min.js"></script>
<script src="<?=$base_url;?>/assets/js/bootstrap.min.js"></script>

<!-- Ini merupakan script yang terpenting -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#show').on('show.bs.modal', function (e) {
            var getDetail = $(e.relatedTarget).data('id');
            /* fungsi AJAX untuk melakukan fetch data */
            $.ajax({
                type : 'post',
                url : 'detailguru.php',
                /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                data :  'getDetail='+ getDetail,
                /* memanggil fungsi getDetail dan mengirimkannya */
                success : function(data){
                $('.modal-data').html(data);
                /* menampilkan data dalam bentuk dokumen HTML */
                }
            });
         });
    });
  </script>

<?php include('include/footer.php');?>

</body>
</html>
