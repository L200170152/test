<?php
if(isset($_GET['id']))
{
    include('includes/config.php');
    $id = $_GET['id'];
    $query = mysqli_query($con,"delete from ekstrakurikuler where id='$id'");
}
header('location:viewekstrakurikuler.php');
?>