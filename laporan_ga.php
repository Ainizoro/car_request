<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>USER</title>
  <!-- bootstrap 5 css -->
  <link rel=”stylesheet” href=”css/bootstrap.min.css” />
  <link rel="stylesheet" href="/assets/lib/font-awesome/css/font-awesome.css" type="text/css">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
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
        <a class="text-white" href="halaman_GA.php">
          Dashboard
        </a>
      </li>
      <li>
        <a class="text-white" href="request_ga.php">
          Data Car Request
          <?php include('notification.php') ?>
        </a>
      </li>
      <li>
        <a class="text-white" href="laporan_ga.php">
          Laporan Car Request
        </a>
      </li>
      <a class="text-white" href="index.php">
        Logout
      </a>
      </li>
  </div>
  </div>
  <section class="p-4" id="main-content">
    <button class="btn btn-primary" id="button-toggle">
      <img src="list.png" height="30px" width="30px">
    </button>
    <div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:auto; height:auto;">
      <h4>Laporan Car Request</h4>
      <body>
      <form method="GET" action="laporan_ga.php" style="text-align: right;">
        Cari jam keberangkatan:</br><input type="text" name="kata_cari" value="<?php if (isset($_GET['kata_cari'])) { echo $_GET['kata_cari'];
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
        <a href="laporan car request.php" class="btn btn-primary" target="blank" style="margin-top: 10px; "><i class="fa fa-print" style="margin-right: 7px;"> </i>Export Excel</a>
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