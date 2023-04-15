<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!--styles-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sign_up.css">
</head>
<body style="background-image: url(images/sign_sports1.jpg);background-attachment: fixed;background-size: cover;">
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
          
          <li><a href="login.php" class="nav-bar-items">Login</a></li>
          <li><a href="../Admin/index.html" class="nav-bar-items">Admin-Login</a></li>
        </ul>
      </nav>
    <div class="card" style="width: 28.5rem;margin-left: 56%;margin-top: 5%;background-color: rgb(106, 138, 65);border-width: 0px;border-color: black;box-shadow: 0px 0px 5px inset;">
        <div class="card-body">
            <center><h1 class="create">Create an Account</h1></center>
            <hr>
            <form class="sign-in" method="post" action="signupdb.php">
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="Name" class="box" style="height: 40px;font-size: 20px;">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Mail-Id" class="box" style="height: 40px;font-size: 20px;">
                
                <label for="roll"></label>
                <input type="text" name="roll" id="roll" placeholder="Roll No" class="box" style="height: 40px;font-size: 20px;">
                <label for="phone"></label>
                <input type="text" name="phone" id="phone" maxlength="10" placeholder="Phone No" class="box" style="height: 40px;font-size: 20px;">
                <label for="psd"></label>
                <input type="password" name="pword" id="psd" placeholder="Password" class="box" minlength="10" maxlength="10" style="height: 40px;font-size: 20px;">
                <label for="cpsd"></label>
                <input type="password" name="" id="cpsd" placeholder="Confirm Password" class="box" style="height: 40px;font-size: 20px;">
                <input type="submit" class="sign-in-btn" value="Sign Up">
                <button class="d-sign-in"><a href="login.php" style="text-decoration: none;" class="sign-in-link">Sign in instead</a></button>
            </form>
        </div>
    </div>

</body>
</html>