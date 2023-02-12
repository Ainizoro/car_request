<!DOCTYPE html>
<html>
<head>
<title>Jadwal</title>
</head>
<!DOCTYPE html>
    <html lang="en">
      <head >
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin</title>
        <!-- bootstrap 5 css -->
        <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
          crossorigin="anonymous"
        />
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <style>
    li {
        list-style: none;
        margin: 20px 0 20px 0;
   
    }
    a {
        text-decoration: none;
        background: #87CEFA;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        margin-left: -300px;
        transition: 0.4s;
        background: #87CEFA;
    }

    .active-main-content {
        margin-left: 250px;
       
    }

    .active-sidebar {
        margin-left: 0;
        background: #87CEFA;
    }

    #main-content {
        transition: 0.4s;
        
    }
</style>
      </head>

      <body background="#87CEFA";>
        <div>
          <div class="sidebar p-4 background #87CEFA" id="sidebar" >
            <h4 class="mb-5 text-white">CAR REQUEST</h4>
            <li>
              <a class="text-white" href="halaman_admin.php">
                <i class="bi bi-house mr-2"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a class="text-white" href="data_admin.php">
                <i class='bi bi-truck'></i>
               Input Request Car
              </a>
            </li>
            <li>
              <a class="text-white" href="laporan_admin.php">
                <i class="bi bi-clipboard-data-fill"></i>
                Laporan Car Request
                <?php include('notification.php') ?>
              </a>
            </li>
            <li>
              <a class="text-white" href="add.php">
                <i class='bi bi-person-plus'></i>
                Add USER
              </a>
            </li>
             <li>
              <a class="text-white" href="update_jadwal.php">
                <i class='bi bi-arrow-repeat'></i>
                Update Jadwal Car
              </a>
            </li>
            <li>
              <a class="text-white" href="index.php">
                <i class='bi bi-box-arrow-right'></i>
                Logout
              </a>
            </li>
        </div>
        </div>
        <section class="p-4" id="main-content">
          <button class="btn btn-primary" id="button-toggle">
            <i class="bi bi-list"></i>
          </button>
          <div class="card mt-5">
            <div class="card-body">
              <h4>JADWAL KEBERANGKATAN BUS PLAN</h4>
              <p>


<?php 
session_start();
echo @$_SESSION['pesan'];
session_destroy();
?>
<table border="1">
	<tr>
		<td width="85" align="center">Plan 1</td>
		<td width="155" align="center">Plan 3</td>
		<td width="155" align="center">Aksi</td>
	</tr>
<?php
include"koneksi.php";
$data = mysqli_query($koneksi,"select * from jadwal order by id desc");
while($d = mysqli_fetch_array($data)){?>
	<tr>
		<td><?php echo $d['plan1'];?></td>
		<td><?php echo $d['plan3'];?></td>
		<td><a href="edit_jadwal.php?id=<?php echo $d['id']; ?>">Edit</a> / 
		<a href="javascript:del(<?php echo $d['id'];?>)">Hapus</a></td>
	</tr>
<?php
};
?>
</table></br>
	<a href="tampil_jadwal.php" type="button"  class="btn btn-info" > Tampil Jadwal </a></button>
	 <a href="add
_jadwal.php" type="button"  class="btn btn-secondary" > Tambah Jadwal </a></button><br><br>


 <script language="JavaScript" type="text/javascript">
      function del(id){
        if (confirm("yakin akan menghapus data ini?")){
          window.location.href = 'hapus_jadwal.php?id=' + id;
        }
      }
 </script>
 </form>
 </p>
 </div>
 </div>
 </section>
 <script>
    document.getElementById("button-toggle").addEventListener("click", () => {
    document.getElementById("sidebar").classList.toggle("active-sidebar");
    document.getElementById("main-content").classList.toggle("active-main-content");
    });
</script>
</body>
</html>
