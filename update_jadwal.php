
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
                <i class='bi bi-person-plus'></i>
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
include"koneksi.php"; 
$plan1=htmlspecialchars($_POST['plan1']);
$plan3=htmlspecialchars($_POST['plan3']);
$id = @$_GET['id'];
$update=mysqli_query($koneksi,"update jadwal set plan1='$plan1', plan3='$plan3' where id='$id'");
if($update){
    $_SESSION['pesan'] = '<font></font>';
	header("location:tampil_jadwal.php");
}else{
	echo "Gagal update data!";
}
?>

  </br>
      <h6>Ketentuan jam keberangkatan adalah :</h6></br>
  Penumpang harus sudah stand by di halte 5 menit sebelum jadwal keberangkatan</br>
Penumpang yang diterima hanya yang telah memasuki list sistem</br>

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
    