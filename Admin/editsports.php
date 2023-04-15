<?php
include "dbconcl.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<header>

<h1 class="liketext">THE ULTIMATE CHAMPIONSHIP
<a href ="index.html"> <input type="button" value="Logout" style="float:right;"></a></h1>
</header>

<div class="row">
<nav>
		<div class="menu-icon">
			
		</div>
		<ul>
			<li><a href="addsports.html">Add Sports</a></li>
			<li><a href="#" style="color:red;">Edit Sports</a></li>
			<li><a href="Reports.php">Reports</a></li>
			<li><a href="deletesport.php">Delete</a></li>
		
			
		</ul>
	</nav>
               
<div class="col-12">
<div style="padding-left:2%;width:100%;border-style:solid; border-radius:10px;border-color:#0000ff">
 <center> <h1>Edit Events</h1></center>                          

 <form action="" method="post">
Event name:
<?php
echo '<select onchange="this.form.submit();" name="ename" class="smalltext">';
echo '<option value="empty">select a sport</option>';
$sql = "SELECT * FROM sports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
  echo '<select onchange="this.form.submit();" name="ename" class="smalltext">';
	echo '<option value="Select a sport"></option>';
    while($row = $result->fetch_assoc()) {
      
        echo '<option value="'.$row["sport_name"].'">'.$row["sport_name"].'</option>';
       
    }
	
} else {
    echo "0 results";
}
?>
</select>
</form>
<?php

error_reporting(0);
$name=$_POST['ename'];
$sql = "SELECT * FROM sports where sport_name='$name'";
$result = $conn->query($sql);
$row = $result->fetch_assoc()
?>
<br>

<form action="updatesports.php" method="post">

Description:                                                                      
<input type="text" value="<?php echo $row['description']?>" name="description" required class="bigtext"><br><br>

  Start Date:  
<input type="date" value="<?php echo $row['start_date']?>" name="start_date" required class="smalltext">

  End Date:  
<input type="date" value="<?php echo $row['end_date']?>" name="end_date" required class="smalltext"><br><br>

<label for="status">Registration Status:</label>

<select name="status" id="status" required class="smalltext">
  <option value="Started">Started</option>
  <option value="Ended">Ended</option>
</select>
&emsp;

<br>
<center><input type="submit" value="Submit"></center>
</form>
  
</div>


  
</div>

</div>


</body>
</html>