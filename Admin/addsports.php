<?php

include "dbconcl.php";
if(isset($_POST["submit"])){
    
    if($_FILES["image"]["error"] == 4){
      echo
      "<script> alert('Image Does Not Exist'); </script>"
      ;
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];
  
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      if ( !in_array($imageExtension, $validImageExtension) ){
        echo
        "
        <script>
          alert('Invalid Image Extension');
        </script>
        ";
      }
      else if($fileSize > 10000000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
        </script>
        ";
        header("Location: addsports.html" );
      }
      else{
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;
  
        move_uploaded_file($tmpName, 'image/' . $newImageName);
       
        $event_name=$_POST['ename'];
        $description=$_POST['description'];
        $start_date=$_POST['start_date'];
        $end_date=$_POST['end_date'];
        $status=$_POST['status'];



$sql = "INSERT INTO sports(sport_name,description,start_date,end_date,status,image)
VALUES ('$event_name','$description','$start_date','$end_date','$status','$newImageName')";
if ($conn->query($sql) == TRUE) {	
  $sq="CREATE TABLE `$event_name` (`Captain RollNo` VARCHAR(100) NOT NULL , `Captain Name` VARCHAR(100) NOT NULL , `Email` VARCHAR(100) NOT NULL , `Phone No` BIGINT(12) NOT NULL , PRIMARY KEY (`Captain RollNo`)) ENGINE = InnoDB;";
  if($conn->query($sq)== true){
    echo '<script type="text/javascript">'; 
    echo 'alert("Event Added Sucessfully and table created");'; 
    echo 'window.location.href = "addsports.html";';
    echo '</script>'; 
  
   }
   else{
       echo "error : $sq <br> $conn->error";
   }
  

 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        
      }
    }
  }

?>