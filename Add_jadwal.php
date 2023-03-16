<!DOCTYPE html>
<html>
<head>
	<title>Car Request</title>
</head>
<body style="padding:15px;background:#87CEFA">
	<h4>Tambah Jadwal Keberangkatan Bus</h4>
<?php 
echo @$_SESSION['pesan'];
?>
<form action="tambah_jadwal.php" method="post">
<input style="margin-bottom:10px;" type="text" name="plan1" placeholder="Jam Plan 1"><br>
<input style="margin-bottom:10px;" type="text" name="plan3" placeholder="Jam Plan 3"><br>
<button type="submit" class="btn btn-info">Simpan</button>
</form>
</body>
</html>