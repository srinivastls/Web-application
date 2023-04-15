<?php
include "dbconcl.php";

    $name= $_POST['name'];
    
    $password= $_POST['pword'];
    $email= $_POST['email'];
    $phoneno=$_POST['phone'];
    $rollno=  $_POST['roll'];
   $sql="INSERT INTO `signup` ( `name`, `mailid`, `rollno`,`phone no`, `password`) VALUES ('$name','$email' ,'$rollno','$phoneno', '$password');";
   // execute the query 
   if($conn->query($sql)== true){
       $msg="sucessfully added to the database";
        header("Location: login.php?error=$msg" );

    }
    else{
        echo "error : $sql <br> $conn->error";
    }
?>