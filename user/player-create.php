<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="edit.css" rel="stylesheet">
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
    
    <title>Player Create</title>
</head>
<body>
<nav class="nav-bar">
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">Sports Engine</label>
        <ul>
          <li><a href="About.html" target="_blank" class="nav-bar-items">About</a></li>
          <li><a href="Contact.html" class="nav-bar-items">Contact</a></li>
         
          <li><a href="login.php" class="nav-bar-items">Log Out</a></li>
        </ul>
    </nav>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Player Add 
                            <a href="main.php" class="btn btn-danger float-end back">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="p_update.php" method="POST">
                            <div class="mb-3 ">
                                <label class='tex'>Sport Name</label>
                                <input type="text" name="event" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class='tex'>Player Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class='tex'>Player Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class='tex'>Roll NO</label>
                                <input type="text" name="roll" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class='tex'>Captain Roll No</label>
                                <input type="text" name="crno" class="form-control">
                            </div>
                            <div class="mb-3">
                                <center><button type="submit" name="save_Player" class="btn btn-primary submit ">Save Player</button></center>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>