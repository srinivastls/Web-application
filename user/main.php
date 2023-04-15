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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <link href="edit_pd.css" rel="stylesheet">    

    <title>player</title>
</head>
<body>
<nav class="nav-bar">
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="fa-solid fa-bars"></i>
        </label>
        <label class="logo">Sports Engine</label>
        <ul>
          <li><a href="About.html" class="nav-bar-items">About</a></li>
          <li><a href="Contact.html" class="nav-bar-items">Contact</a></li>
          <li><a href="Sports.php" class="nav-bar-items">Register</a></li>
          <li><a href="login.php" class="nav-bar-items">Log Out</a></li>
        </ul>
    </nav>

<?php
    if(isset($_SESSION['msg'])) :
        $s=$_SESSION['msg'];
?>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Player Details
                            
                            <a href="player-create.php" class="btn btn-primary float-end add">Add Players</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sport Name</th>
                                    <th>Player Name</th>
                                    <th>Email</th>
                                    <th>Player Roll No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM participants where sport_name='$s' or `Captain RollNo`='$s'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $Player)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $Player['sport_name']; ?></td>
                                                <td><?= $Player['Player Name']; ?></td>
                                                <td><?= $Player['Email']; ?></td>
                                                <td><?= $Player['Player RollNo']; ?></td>
                                                <td>
                                                    <a href="player-view.php?id=<?= $Player['Player RollNo']; ?>" class="btn btn-info btn-sm box">View</a>
                                                    <a href="player-edit.php?id=<?= $Player['Player RollNo']; ?>" class="btn btn-success btn-sm box">Edit</a>
                                                    <form action="p_update.php" method="POST" class="d-inline">
                                                        <input type="hidden" name="event" value="<?= $Player['sport_name']; ?>">
                                                        <button type="submit" name="delete_Player" value="<?=$Player['Player RollNo'];?>" class="btn btn-danger btn-sm box">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php 
    unset($_SESSION['msg']);
    endif;
?>