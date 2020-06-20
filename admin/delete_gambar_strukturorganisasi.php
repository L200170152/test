<?php
if(isset($_GET['id']))
{
    include('includes/config.php');
    $id = $_GET['id'];
    $query = mysqli_query($con,"delete from strukturorganisasi where id='$id'");
}
header('location:viewestrukturorganisasi.php');
?>