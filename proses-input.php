<?php
include "koneksi.php";
$nik = $_POST['nik'];
$nama = $_POST['nama']; 
$section = $_POST['section']; 
$tujuan = $_POST['tujuan'];
$alasan = $_POST['alasan'];
$keberangkatan = $_POST['keberangkatan'];
$insert = mysqli_query($koneksi, "insert into data set nik='$nik', nama='$nama', section='$section', tujuan ='$tujuan', alasan ='$alasan', keberangkatan ='keberangkatan'");
echo "<script>alert('Data yang anda Update sukses');window.location='halaman_admin.php'</script>";
?>

