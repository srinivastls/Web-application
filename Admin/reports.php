<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
include "dbconcl.php";
?>
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
			<li><a href="editsports.php"">Edit Sports</a></li>
			<li><a href="#" style="color:red;">Reports</a></li>
      <li><a href="deletesport.php">Delete</a></li>
		
			
		</ul>
	</nav>
               
<div class="col-12">
  <h1>Reports</h1>                          
 <div style="width:100%;border-style:solid; border-radius:10px;text-align:center;border-color:#0000ff"> 
 <form action="" method="post" >
Event Name:
<?php
$sql = "SELECT * FROM sports";
$result = $conn->query($sql);
echo '<select onchange="this.form.submit();" name="ename" class="smalltext">';

echo '<option value="empty">select a sport</option>';
if ($result->num_rows > 0) {
    // output data of each row
  
    while($row = $result->fetch_assoc()) {
		
        echo '<option value="'.$row["sport_name"].'">'.$row["sport_name"].'</option> ';
    }
} else {
    echo "0 results";
}
echo '</select>';

?>

</form>
Captain Name:
<?php
error_reporting(0);
$event_nam = $_POST['ename'];
$sq="select * from games where sport_name='$event_name'";
$resul = $conn->query($sq);
echo '<select name="event" class="smalltext">';
echo '<option value="empty">select a team</option>';
if ($resul->num_rows > 0) {
    // output data of each row
  
    while($row = $resul->fetch_assoc()) {
		
        echo '<option value="'.$row["team_name"].'">'.$row["team_name"].'</option> ';
    }
} else {
    echo "0 results";
}
echo '</select>';
echo '<br>';
echo '<input type="submit" value="GET Report">';
?>
</div>

<table>
<tr>
<th>Player Name </th>
<th>Player RollNO</th>
<th>E-mail</th>
<th>Captian Name</th>
</tr>
<?php

$event_name = $_POST['ename'];
$sql = "SELECT * FROM participants where team_name='$event_name' and sport_name='$event_nam'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["Player Name"]."</td><td>" . $row["Player RollNo"]."</td><td>" . $row["Email"]."</td><td>" . $row["Captain RollNo"]."</td>";
echo '</tr>';  

  }
} else {
    echo "0 results";
}
$conn->close();

?>
  </table>
</div>


</div>

</body>
</html>