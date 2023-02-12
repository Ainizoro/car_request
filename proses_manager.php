<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
     foreach ($_POST['status_manager'] as $key => $value) {
          $query = "UPDATE data SET status_manager = '" . $value . "', notif_ga = 0 WHERE id = '" . $key . "'";
          mysqli_query($koneksi, $query);
     }
     header("location:request_manager.php");
} else {
     header("location:request_manager.php");
}
