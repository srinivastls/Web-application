<?php
session_start();
include "dbconcl.php";
$event_name=$_POST['event'];
$name= $_POST['name'];
    $crno= $_POST['crno'];
    $email= $_POST['email'];
    $phone=  $_POST['phone'];
 $sql="INSERT INTO `$event_name` (`Captain RollNo`,`Captain Name`, `Email`, `Phone No` ) VALUES (  '$crno', '$name', '$email','$phone');";
 $sq="INSERT INTO `participants` (`sport_name`, `Player Name`, `Email`, `Player RollNo`, `Captain RollNo`) VALUES ('$event_name', '$name', '$email', '$crno', '$crno');";
 if($conn->query($sql)== true){
     if($conn->query($sq)== true){
     $_SESSION['msg']=$event_name;
     echo '<script type="text/javascript">'; 
 echo 'alert("added to captain table and participants Sucessfully");'; 
 echo 'window.location.href = "main.php";';
 echo '</script>';  
      
     }
  }

 else{
     echo "error : $sql <br> $conn->error";
 }
?>