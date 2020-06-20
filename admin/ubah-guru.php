<?php 
 
    include 'includes/config.php';
    error_reporting(0);
            $id         = $_POST['id'];
            $nip        = $_POST['nipguru'];
            $nama       = $_POST['namaguru'];
            $alamat     = $_POST['alamatguru'];
            $NUPTK      = $_POST['NUPTK'];
            $mengampu   = $_POST['mengampu'];
 
    //perintah sql untuk menyimpan ke database
    $sql = "UPDATE tblguru SET nipguru ='$nip', namaguru ='$nama', alamatguru='$alamat', NUPTK='$NUPTK', mengampu ='$mengampu' WHERE id='$id'";
     
    $que = mysqli_query($con, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah diubah');
                window.location='daftar-guru.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal diubah');
                window.location='edit-guru.php?id=$id';
            </script>
        ";
    }
    //penyimpanan
?>