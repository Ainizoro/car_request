<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi, "select * from login where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	if ($data['hak_akses'] == "admin") {
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "admin";
		header("location:halaman_admin.php");

	} else if ($data['hak_akses'] == "user") {
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "user";
		header("location:halaman_user.php");

	} else if ($data['hak_akses'] == "supervisor") {
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "supervisor";
		header("location:halaman_supervisor.php");

	} else if ($data['hak_akses'] == "manager") {
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "manager";
		header("location:halaman_manager.php");

	} else if ($data['hak_akses'] == "GA") {
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "GA";
		header("location:halaman_GA.php");

	} else if ($data['hak_akses'] == "security") {
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "security";
		header("location:request_security.php");
	} else {

		header("location:index.php?pesan=gagal");
	}
} else {
	header("location:index.php?pesan=gagal");
}
