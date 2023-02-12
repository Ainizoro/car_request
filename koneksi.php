<?php 
$koneksi = mysqli_connect("localhost","root","","car_request");
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>