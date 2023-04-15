<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="home.css">
    <title>Login</title>
</head>
<body style="background-image: url(images/login_sports.jpg);background-attachment: fixed;background-size: 100% 100%;">
<nav class="nav-bar">
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">Sports Engine</label>
        <ul>
        <li><a href="index.php" class="nav-bar-items">Home</a></li>
          <li><a href="About.html" target="_blank" class="nav-bar-items">About</a></li>
          <li><a href="contact.html" class="nav-bar-items">Contact</a></li>
          
          <li><a href="signup.php" class="nav-bar-items">Sign-up</a></li>
          <li><a href="../Admin/index.html" class="nav-bar-items">Admin-Login</a></li>
        </ul>
      </nav>


    <div class="container">
    <h1 style="font-size: 70px;margin-top:13%;margin-left:8%;margin-bottom:2%;color:rgb(255, 243, 131);font-family: 'Kanit', sans-serif;">User Login</h1>
    <form class="login" method="post" action="logincheck.php" onClick="return validateEmail()"method="post" action="logincheck.php" onClick="return validateEmail()">
        <?php
        if(isset($_GET['error'])) echo $_GET['error'];
        ?>    
        <label for="email"></label>
            <input type="email" name="email" id="email" class="email" placeholder="Email">
            <label for="psd"></label>
            <input type="password" name="psd" id="psd" class="psd" placeholder="Password">
            <input type="submit" class="login-btn" value="Login">
            <button class="d-sign-in"><a href="signup.php" style="text-decoration: none;" class="sign-in-link">Create an Account</a></button>
    </form>
    </div>
</body>
</html>