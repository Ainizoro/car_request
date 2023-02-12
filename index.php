<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	<div class="kotak_login">
		<p class="tulisan_login">Welcome, Silahkan login</p>
		<form action="cek-login.php" method="post">
			<label>Username
			<input type="text" name="username" class="form_login" placeholder="Username" required="required"></label>
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
		</form>
	</div>
  <script src="show.js"></script>
</body>
</html>