<?php 
    include 'includes/config.php';
    error_reporting(0);
    $id  = $_GET['rid'];
    $sql = "DELETE FROM tblguru WHERE id ='$id'";
    $que = mysqli_query($con, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah dihapus');
                window.location='daftar-guru.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal dihapus');
                window.location='daftar-guru.php';
            </script>
        ";
    }
 
?>