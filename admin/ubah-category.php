<?php 
 
    include 'includes/config.php';
    error_reporting(0);
            $id                 = $_POST['id'];
            $NamaKategori        = $_POST['KategoriNama'];
            $deskripsi          = $_POST['deskripsi'];
 
    //perintah sql untuk menyimpan ke database
    $sql = "UPDATE tblkategori SET KategoriNama ='$NamaKategori', deskripsi ='$deskripsi' WHERE id='$id'";
     
    $que = mysqli_query($con, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Categori berhasil di UPDATE');
                window.location='manage-categories.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal di UPDATE');
                window.location='manage-categories.php?id=$id';
            </script>
        ";
    }
    //penyimpanan
?>