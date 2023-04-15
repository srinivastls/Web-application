<?php
session_start();
require 'dbcon.php';
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
    <link rel="stylesheet" href="edit.css">
        
    <title>Player Edit</title>
</head>
<body>
    
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Player Edit 
                            <a href="main.php" class="btn btn-danger float-end back">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $Player_id = mysqli_real_escape_string($con, $_GET['id']);
                            
                            $query = "SELECT * FROM participants WHERE `Player RollNo`='$Player_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $Player = mysqli_fetch_array($query_run);
                                $_SESSION['msg'] =$Player['sport_name'];
                                ?>
                               
                                <form action="p_update.php" method="POST" class="containe">
                                    <input type="hidden" name="event" value="<?= $Player['sport_name']; ?>">

                                    <div class="mb-3">
                                        <label class='tex'>Player Name</label>
                                        <input type="text" name="name" value="<?=$Player['Player Name'];?>" class="form-control box">
                                    </div>
                                    <div class="mb-3">
                                        <label class='tex'>Player Email</label>
                                        <input type="email" name="email" value="<?=$Player['Email'];?>" class="form-control box">
                                    </div>
                                   
                                        <input type="hidden" name="Player_id" value="<?=$Player['Player RollNo'];?>" class="form-control box">
                                    
                                    <div class="mb-3">
                                        <label class='tex'>Captain RollNo</label>
                                        <input type="text" name="crno" value="<?=$Player['Captain RollNo'];?>" class="form-control box">
                                    </div>
                                    <div class="mb-3">
                                        <center>
                                        <button type="submit" name="update_Player" class="btn btn-primary submit">
                                            Update Player
                                        </button>
                                        </center>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>