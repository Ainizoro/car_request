<?php
session_start();
include"koneksi.php"; 
$id = @$_GET['id'];
$del=mysqli_query($koneksi,"delete from jadwal where id='$id'");
if($del){
    $_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil dihapus.</font>';
	header("location:tampil_jadwal.php");
}else{
	echo "Gagal hapus data!";
}?>