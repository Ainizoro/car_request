<!DOCTYPE html>
<html lang="en">
<?php
include('koneksi.php');
$cekJumlah = mysqli_query($koneksi, "select count(id) as jumlah from data where notif_user=0 AND status_spv IS NOT NULL AND status_manager IS NOT NULL AND status_ga IS NOT NULL");
$data = mysqli_fetch_assoc($cekJumlah);
if ($data['jumlah'] > 0) {
  $query = "UPDATE data SET notif_user=1 WHERE notif_user=0";
  mysqli_query($koneksi, $query);
}
?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>USER</title>
  <!-- bootstrap 5 css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
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

<body background="#87CEFA" ;>
  <div>
    <div class="sidebar p-4 background #87CEFA" id="sidebar">
      <h4 class="mb-5 text-white">CAR REQUEST</h4>
      <li>
        <a class="text-white" href="halaman_user.php">
          <i class="bi bi-house mr-2"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a class="text-white" href="data_user.php">
          <i class='bi bi-truck'></i>
          Input Request Car
        </a>
      </li>
      <li>
        <a class="text-white" href="laporan_user.php">
          <i class="bi bi-clipboard-data-fill"></i>
          Laporan Car Request
          <?php include('notification.php') ?>
        </a>
      </li>
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
    <div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:auto; height:auto;">
      <h4>Laporan Car Request</h4>
      <body>
        <form method="GET" action="laporan_user.php" style="text-align: right;">
         Cari jam keberangkatan:</br><input type="text" name="kata_cari" value="<?php if (isset($_GET['kata_cari'])) {echo $_GET['kata_cari'];
           } ?>" />
          <button type="submit"><i class="bi bi-search" style="margin-right: 7px;"></i></button>
        </form></br>
        <table>
          <thead>
            <tr>
              <th width="70">NIK</td>
              <th width="70">Nama</td>
              <th width="70">Section</td>
              <th width="70">Tujuan</td>
              <th width="70">Keberangkatan</td>
              <th width="80">Alasan</td>
              <th width="90">Supervisor</td>
              <th width="80">Manager</td>
              <th width="70">GA</td>
              <th width="70">Security</td>
            </tr>
          </thead>
          <tbody>
            <?php
            include('koneksi.php');
            if (isset($_GET['kata_cari'])) {
              $kata_cari = $_GET['kata_cari'];
              $query = "SELECT * FROM data WHERE keberangkatan like '%" . $kata_cari . "%'  ORDER BY id ASC";
            } else {
              $query = "SELECT * FROM data ORDER BY id ASC";
            }
            $result = mysqli_query($koneksi, $query);
            if (!$result) {
              die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
            }
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?php echo $row['nik']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['section']; ?></td>
                <td><?php echo $row['tujuan']; ?></td>
                <td><?php echo $row['keberangkatan']; ?></td>
                <td><?php echo $row['alasan']; ?></td>
                <td><?php echo $row['status_spv']; ?></td>
                <td><?php echo $row['status_manager']; ?></td>
                <td><?php echo $row['status_ga']; ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table></br>
    </p>
    </div>
    </div>
  </section>
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