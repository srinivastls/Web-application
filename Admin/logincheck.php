<?php  
include "dbconcl.php";

$msg="";
if (isset($_POST['Uname']) && isset($_POST['psd'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Uname']);
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
		$sql = "SELECT * FROM admin WHERE USERNAME='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['USERNAME'] === $uname && $row['PASSWORD'] === $pass) {

            	header("Location:addsports.html");
		        exit();
            }else{
				$msg .="Incorect User name or password";
				header("Location: index.html?error=".$msg);
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