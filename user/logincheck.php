<?php  
include "dbconcl.php";
session_start();

$msg="";
if (isset($_POST['email']) && isset($_POST['psd'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['psd']);

	if (empty($uname)) {
		$msg .= "User Name is required";
		header("Location: login.php?error=".$msg);
	    exit();
	}else if(empty($pass)){
		$msg .="Password is required";
        header("Location: login.php?error=".$msg);
	    exit();
	}else{
		$sql = "SELECT * FROM signup WHERE mailid='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['MAILID'] === $uname && $row['password'] === $pass) {
				$_SESSION['msg']=$row['ROLLNO'];
            	header("Location: sports.php");
		        exit();
            }else{
				$msg .="Incorect User name or password";
				header("Location: login.php?error=".$msg);
		        exit();
			}
		}else{
			$msg .= "Incorect User name or password";
			header("Location: login.php?error=".$msg);
	        exit();
		}
	}
	
}else{
    echo "not sucessfull";
	header("Location: signup.php");
	exit();
}
?>