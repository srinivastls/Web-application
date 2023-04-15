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
			<li><a href="editsports.php" >Edit Sports</a></li>
			<li><a href="Reports.php">Reports</a></li>
			<li><a href="#" style="color:red;">Delete</a></li>
		
			
		</ul>
	</nav>
               
<div class="col-12">
<div style="padding-left:2%;width:100%;border-style:solid; border-radius:10px;border-color:#0000ff">
 <center> <h1>Delete</h1></center>                          
 <center>
 <form action="updated.php" method="post">
 Event Name:
<?php
$sql = "SELECT * FROM sports";
$result = $conn->query($sql);
echo '<select name="event" class="smalltext">';
echo '<option value="empty">select a sport</option>';
if ($result->num_rows > 0) {
	
	
    while($row = $result->fetch_assoc()) {
      
        echo '<option value="'.$row["sport_name"].'">'.$row["sport_name"].'</option>';

        
    }
	
} else {
    echo "0 results";
}
?>
</select>
<br>
<input type="submit" value="Delete">

</form>
</center>


  
</div>


  
</div>

</div>


</body>
</html>