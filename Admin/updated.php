<?php
include "dbconcl.php";
?>
     

<?php


$name=$_POST['ename'];
$sqli="delete  FROM participants where `sport_name`='$name'";

if ($conn->query($sqli) === TRUE) {
    $sq = "delete  FROM sports where `sport_name`='$name'";
    if($conn->query($sq) === TRUE){
    $s="drop table `$name`";
    if($conn->query($s)===TRUE){
    echo '<script type="text/javascript">'; 
    echo 'alert("Event and its table deleted Sucessfully");'; 
    echo 'window.location.href = "deletesport.php";';
    echo '</script>';  
    }
    }
    } else {
        echo "not sucess";
        echo "Error: " . $sq . "<br>" . $conn->error;
    }
    
    $conn->close();


?>
<br>



</body>
</html>