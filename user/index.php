<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
    <!--icons-->
    <script
      src="https://kit.fontawesome.com/c2358e1d7a.js"
      crossorigin="anonymous"
    ></script>
    <!--styles-->
    <link rel="icon" href="images/welcome_favicon.io.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quantico:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron&family=Press+Start+2P&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="welcome.css" />
  </head>
  <body
    style="
      background-image: url(images/welcome_sports.jpg);
      background-attachment: fixed;
      background-size: cover;
      background-repeat:no-repeat;
    "
  >
    <nav class="nav-bar">
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars"></i>
      </label>
     <a href="index.php"> <label class="logo">Sports Engine</label></a>
      <ul>
        <li><a href="About.html" class="nav-bar-items">About</a></li>
        <li><a href="contact.html" class="nav-bar-items">Contact</a></li>
        <li><a href="login.php" class="nav-bar-items">Log-in</a></li>
        <li><a href="signup.php" class="nav-bar-items">Sign-up</a></li>
        <li><a href="../Admin/index.html" class="nav-bar-items">Admin-Login</a></li>
      </ul>
    </nav>
    <h1 class="create">Welcome to the Ultimate Championship</h1>
    <div class="card" style="width: 18rem;">
    <a href="About.html" > <button class="km">know more</button></a>
        <img src="images/welcome_card.jpg" class="card-img-top" alt="sports">
        <div class="card-body">
          <p class="card-text">Lorem, ipsum dolor sit amet conse adipisicing elit. Cupiditate hic quos labore</p>
        </div>
    </div>
    
  </body>
</html>
