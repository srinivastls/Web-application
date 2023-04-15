<?php
session_start();
require 'dbconcl.php';
$_SESSION['msg'] =$_POST['event'];
if(isset($_POST['delete_Player']))
{
    $Player_id = mysqli_real_escape_string($conn, $_POST['delete_Player']);

    $query = "DELETE FROM participants WHERE `Player RollNo`='$Player_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run )
    {
        $_SESSION['message'] = "Player Deleted Successfully";
        header("Location: main.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Player Not Deleted";
        header("Location: main.php");
        exit(0);
    }
}

if(isset($_POST['update_Player']))
{
    $Player_id = mysqli_real_escape_string($conn, $_POST['Player_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['crno']);

    $query = "UPDATE participants SET `Player Name`='$name', Email='$email',`Captain RollNo`='$course' WHERE `Player RollNo`='$Player_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Player Updated Successfully";
        header("Location: main.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Player Not Updated";
        header("Location: main.php");
        exit(0);
    }

}


if(isset($_POST['save_Player']))
{
    

    
$event_name=$_POST['event'];
$name= $_POST['name'];
    $crno= $_POST['crno'];
    $email= $_POST['email'];
    $rollno=  $_POST['roll'];
    $sq="SELECT * FROM `participants` where sport_name='$event_name' ";
 
    $q=mysqli_query($conn, $sq);
    if( mysqli_num_rows($q) <8)
    {
        $sql="INSERT INTO `participants` (`sport_name`, `Player Name`, `Email`, `Player RollNo`, `Captain RollNo`) VALUES ('$event_name', '$name', '$email', '$rollno', '$crno');";

        $query_run = mysqli_query($conn, $sql);
        if($query_run){
        $_SESSION['message'] = "Player Created Successfully";
        header("Location: main.php");
        exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Maximum Player Limit reached";
        header("Location: main.php");
        exit(0);
    }
}

?>