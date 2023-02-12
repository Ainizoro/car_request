<html>
 <head> 
    <title>Registrasi User</title> 
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
          <div class="body">
            
          
<body>
    <div class="container">
      <div class="row">
            <div class="col-md-4 offset-md-4 mt-5">
                <?php
                if(isset($_SESSION['error'])) {
                ?>
                <div class="alert alert-warning" role="alert">
                  <?php echo $_SESSION['error']?>
                </div>
                <?php
                }
                ?>

                <?php
                if(isset($_SESSION['message'])) {
                ?>
                <div class="alert alert-success" role="alert">
                  <?php echo $_SESSION['message']?>
                </div>
                <?php
                }
                ?>

    

                <div class="card ">
                <div class="card-title text-center">
                    
    <h3>Tambah User</h3>
    <div class="card-body background  #87CEFA">
    <form method="post" action="tambah_user.php">
        <table>
          <form class="form-group" method="post">   
              <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" aria-describedby="name" placeholder="Username" autocomplete="off">

                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                          
                            <div class="form-group">
                                Hak Akses
                                <select type="text" name="hak_akses" class="form-control" id="hak_akses"  placeholder="Hak Akses" >
                                  <option value="none"> Pilih Hak Akses</option>
                                        <option value="GA">General Affairs</option>
                                        <option value="admin">admin</option>
                                        <option value="user">User</option>
                                        <option value="supervisor">Supervisor</option>
                                        <option value="manager">Manager</option>
                                        <option value="security">Security</option>
  </select>
  </div>         
            <td><input type="submit" value="SIMPAN"></td>
            </tr>       
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
      
 

         
            
        </section>
        <script>
    document.getElementById("button-toggle").addEventListener("click", () => {
    document.getElementById("sidebar").classList.toggle("active-sidebar");
    document.getElementById("main-content").classList.toggle("active-main-content");
    });
</script>
</body> 
</html> 