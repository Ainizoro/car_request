<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
     foreach ($_POST['status_spv'] as $key => $value) {
          $query = "UPDATE data SET status_spv = '" . $value . "', notif_manager = '0' WHERE id = '" . $key . "'";
          mysqli_query($koneksi, $query);
     }
     header("location:request_supervisor.php");
} else {
     header("location:request_supervisor.php");
}
