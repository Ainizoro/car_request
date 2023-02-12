<?php  
$connect = mysqli_connect("localhost", "root", "", "car_request");
$data = count($_POST["id"]);  
 if($data > 0)  
 {  
      for($i=0; $i<$data; $i++)  
      {  
           if(trim($_POST["id"][$i] != ''))  
           {  
                $sql = "INSERT INTO jadwal(id,plan1,plan3) VALUES('".mysqli_real_escape_string($connect, $_POST["id"][$i])."','".$_POST['plan1'][$i]."','".$_POST['plan3'][$i]."')";  
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