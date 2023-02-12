<?php
session_start();
include"koneksi.php"; 
$plan1=$_POST['plan1'];
$plan3=$_POST['plan3'];

if($plan1=='' or $plan3==''){
$_SESSION['pesan'] = '<font color=red>Tidak boleh kosong!</font>';
header("location:add_jadwal.php");	
}else{
$simpan=mysqli_query($koneksi,"insert into jadwal(plan1, plan3) values ('$plan1','$plan3')");
if($simpan){
    $_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil disimpan.</font>';
	header("location:tampil_jadwal.php");
}else{
	echo "Gagal simpan data!";
}}
?>