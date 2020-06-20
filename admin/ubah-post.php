<?php 
 
    include 'includes/config.php';
    error_reporting(0);
    $id                   = $_POST['id'];
    $posttitle            =$_POST['judulpost'];
    $postdetails         =$_POST['detailpost'];
 
    //perintah sql untuk menyimpan ke database
    $sql = "UPDATE tblpost SET judulpost ='$posttitle', detailpost = '$postdetails' WHERE id='$id'";
     
    $que = mysqli_query($con, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('POST berhasil di UPDATE');
                window.location='manage-posts.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal di UPDATE');
                window.location='manage-posts.php?id=$id';
            </script>
        ";
    }
    //penyimpanan
?>