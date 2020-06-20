<?php
include('includes/config.php');
if(isset($_GET['id'])) 
{
    $query = mysqli_query($con,"select * from gallery where id='".$_GET['id']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["tipe"]);
    echo $row["gambar"];
}
else
{
    header('location:viewgallery.php');
}
?>