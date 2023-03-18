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
    <div class="card mt-5">
      <div class="card-body">
        <h4>JADWAL KEBERANGKATAN BUS PLAN</h4>
        <p>
          <?php
          include "koneksi.php";
          $query = mysqli_query($koneksi, "SELECT * FROM jadwal");
          ?>
        <form action="" method="post">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr bgcolor="white">
            <tr>
              <th width="30">PLAN 1</td>
              <th width="30">PLAN 3</td>
            </tr>
            <?php if (mysqli_num_rows($query) > 0) { ?>
              <?php
              $no = 1;
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <td><?php echo $data["plan1"]; ?></td>
                  <td><?php echo $data["plan3"]; ?></td>
                </tr>
              <?php $no++;
              } ?>
            <?php } ?>
          </table>
          </br>
          <h6>Ketentuan jam keberangkatan adalah :</h6></br>
          Penumpang harus sudah stand by di halte 5 menit sebelum jadwal keberangkatan</br>
          Penumpang yang diterima hanya yang telah memasuki list dan telah diterima oleh seluruh pihak</br>

        </form>
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