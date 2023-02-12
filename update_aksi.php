<?php
include 'koneksi.php';
$plan1  = $_POST['plan1'];
$plan3  = $_POST['plan3'];
$query="UPDATE jadwal SET plan1='$plan1',plan3='$plan3' where plan1='$plan1'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>