<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    foreach ($_POST['status_ga'] as $key => $value) {
        $query = "UPDATE data SET status_ga = '" . $value . "' WHERE id = '" . $key . "'";
        mysqli_query($koneksi, $query);
    }
    header("location:request_ga.php");
} else {
    header("location:request_ga.php");
}
