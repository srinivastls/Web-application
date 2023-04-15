<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Quantico:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap"rel="stylesheet"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script
      src="https://kit.fontawesome.com/c2358e1d7a.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
      />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="sports.css">
    <link rel="icon" href="favicon.io.jpg">
</head>
<body style="background-image: url(images/sports_img1.jpg );background-attachment: fixed;background-size:cover">

    <nav class="nav-bar">
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">Sports Engine</label>
        <ul>
          <li><a href="About.html" target="_blank" class="nav-bar-items">About</a></li>
          <li><a href="contact.html" class="nav-bar-items">Contact</a></li>
          <li><a href="main.php" class="nav-bar-items">Team details</a></li>
          
          <li><a href="login.php" class="nav-bar-items">Log Out</a></li>
        </ul>
    </nav>


    <h1 class="create">Sports Events</h1>
    <br>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbs";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM sports ";
$result = $conn->query($sql);
?>

    
    <?php
    if( mysqli_num_rows($result) >0){
    while($row = $result->fetch_assoc()) {
	?>
    <div class="box-container" style="text-align:center; justify-content:space-around;padding:0%" >
		<div class="row" style="display: flex;">
    
        <div class="col-lg-4 col-md-6">
                <div class="card games">
                    <img src="../Admin\image\<?php echo $row["image"] ?>" alt="Volleyball" class="card-img-top" style="height: 400px;width: 378px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo  $row["sport_name"] ?></h5>
                        <?php echo ' <form action="c_register.php" method="post">';
        echo "<br><b>Event Name: </b>" . $row["sport_name"]. "<br> <b>Description:</b> " . $row["description"]."<br><b> Registration Last Date: </b>" . $row["end_date"]."<br>";
		echo '<input type="hidden" name="event" value='.$row["sport_name"];'';
		echo '<br><button class="card-btn">Register</button>';  
        echo '</form><center><a target="_blank" style="text-decoration:none" href ="knowmore.html">
        <input type="button" value="Know More" class="card-btn"></a></center></div><br><br>';
                        ?>
                    </div>
                </div>
                
        </div>
    </div>
    
        
                
            
            
		
<?php
  }
}
else{
?>
<h4 style="color:white;">
No events to register</h4>

<?php
}
?>
        <br><br>
    </div>
</body>
</html>
