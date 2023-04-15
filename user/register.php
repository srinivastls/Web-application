<?php
include "dbconcl.php";
$event_name=$_POST['event'];
$name= $_POST['name'];
    $crno= $_POST['crno'];
    $email= $_POST['email'];
    $rollno=  $_POST['roll'];
 $sql="INSERT INTO `participants` (`sport_name`, `Player Name`, `Email`, `Player RollNo`, `Captain RollNo`) VALUES ('$event_name', '$name', '$email', '$rollno', '$crno');";
if($conn->query($sql)== true){
    echo '<script type="text/javascript">'; 
echo 'alert("Event Updated Sucessfully");'; 
echo 'window.location.href = "p_register.php";';
echo '</script>';  
     

 }
 else{
     echo "error : $sql <br> $conn->error";
 }
?>