<?php 
    include 'includes/config.php';
    error_reporting(0);
    $id  = $_GET['id'];
    $sql = "DELETE FROM tblpost WHERE id ='$id'";
    $que = mysqli_query($con, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah dihapus');
                window.location='manage-posts.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal dihapus');
                window.location='manage-posts.php';
            </script>
        ";
    }
 
?>