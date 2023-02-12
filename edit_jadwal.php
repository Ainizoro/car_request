<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body style="padding:15px;background:#ddd">
	<h4>Update Jadwal</h4>
<?php
	include 'koneksi.php';
	$id = @$_GET['id'];
	$data = mysqli_query($koneksi,"select * from jadwal where id='$id'");
	$d = mysqli_fetch_array($data);?>

<form action="update_jadwal.php?id=<?php echo $id ?>" method="post">
ID: <?php echo $d['id']; ?><br><hr>
<input style="margin-bottom:10px;" type="text" name="plan1" value="<?php echo $d['plan1']; ?>"><br>
<input style="margin-bottom:10px;" type="text" name="plan3" value="<?php echo $d['plan3']; ?>"><br>
<button type="submit">Update</button>
</form>
</body>
</html>