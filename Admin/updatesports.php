<?php
$event_name=$_POST['ename'];
$description=$_POST['description'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$status=$_POST['status'];

include "dbconcl.php";

$sql = "UPDATE sports set description='$description',start_date='$start_date',end_date='$end_date',status='$status' where sport_name='$event_name'";

if ($conn->query($sql) === TRUE) {
echo '<script type="text/javascript">'; 
echo 'alert("Event Updated Sucessfully");'; 
echo 'window.location.href = "editsports.php";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>