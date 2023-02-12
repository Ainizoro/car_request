<?php 
include 'koneksi.php';
$plan1 = $_POST['plan1'];
$plan3 = $_POST['plan3'];
mysqli_query($koneksi,"insert into jadwal values('','$plan1','$plan3')");
header("location:halaman_admin.php");
?>