<?php  
$connect = mysqli_connect("localhost", "root", "", "car_request");
$data = count($_POST["nama"]);  
 if($data > 0)  
 {  
      for($i=0; $i<$data; $i++)  
      {  
           if(trim($_POST["nama"][$i] != ''))  
           {  
                $sql = "INSERT INTO data(nik,nama,section,tujuan,alasan,keberangkatan) VALUES('".mysqli_real_escape_string($connect, $_POST["nik"][$i])."','".$_POST['nama'][$i]."','".$_POST['section'][$i]."','".$_POST['tujuan'][$i]."','".$_POST['alasan'][$i]."','".$_POST['keberangkatan'][$i]."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else 
 {  
      echo "Please Enter Name";  
 }  
 ?> 
 