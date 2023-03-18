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
        <a class="text-white" href="halaman_security.php">
          Dashboard
        </a>
      </li>
      <li>
        <a class="text-white" href="request_security.php">
          Data Car Request
           <?php include('notification.php') ?>
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
      <?php
      include "koneksi.php";
      $query = mysqli_query($koneksi, "SELECT * FROM data");
      ?>
      <form action="proses_security.php" method="post">
        <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr bgcolor="white"></br>
            <h4>Laporan Car Request</h4>
          <tr>
            <th width="70">No</td>
            <th width="50">NIK</td>
            <th width="50">Nama</td>
            <th width="50">Section</td>
            <th width="50">Tujuan</td>
            <th width="50">Keberangkatan</td>
            <th width="50">Alasan</td>
            <th width="50">Status Supervisor</td>
            <th width="50">Status Manager</td>
            <th width="50">Status GA</td>
            <th width="50">Security</td>  
          </tr>
          <?php if (mysqli_num_rows($query) > 0) { ?>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data["nik"]; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["section"]; ?></td>
                <td><?php echo $data["tujuan"]; ?></td>
                <td><?php echo $data["keberangkatan"]; ?></td>
                <td><?php echo $data["alasan"]; ?></td>
                <td><?php echo $data["status_spv"]; ?></td>
                <td><?php echo $data["status_manager"]; ?></td>
                <td><?php echo $data["status_ga"]; ?></td>
                <td>
                  <?php if ($data["security"] == NULL) : ?>
                    <input type="radio" name="security[<?= $data['id'] ?>]" value="diterima" required>Diterima
                    <input type="radio" name="security[<?= $data['id'] ?>]" value="ditolak" required>Ditolak
                  <?php else : ?>
                    <?php echo $data["security"]; ?>
                  <?php endif; ?>
                </td>
              </tr>
            <?php $no++;
            } ?>
          <?php } ?>
        </table></br>
        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
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