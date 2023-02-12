<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    foreach ($_POST['security'] as $key => $value) {
        $query = "UPDATE data SET security = '" . $value . "' WHERE id = '" . $key . "'";
        mysqli_query($koneksi, $query);
    }
    header("location:request_security.php");
} else {
    header("location:request_security.php");
}
