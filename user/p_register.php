<?php
$event_name=$_POST['event'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="register.css">
</head>
<body style="background-image: url(register_wallpaper.jpg);background-attachment: fixed;background-size: 100% 100%;">
    <div class="container" style="margin-top: 3.5%;">
        <h1 style="text-align: center;margin-bottom: 0%;padding-top: 2%;font-size: 40px;">Player Registration</h1>
        <form action="register.php" class="details" method="post">
            <label for="sport" class="text">Sport:</label>
            <input type="text" name="event" value="<?php echo $event_name; ?>"   class="box" class="bigtext"/>
            <label for="name" class="text">Name :</label>
            <input type="text" name="name" id="name"  class="box">
            <label for="email" class="text">E-Mail ID :</label>
            <input type="email" name="email" id="email" class="box">
            <label for="roll" class="text">Roll No :</label>
            <input type="text" name="roll" id="roll" class="box">
            <label for="phone" class="text">Phone No :</label>
            <input type="text" name="phone" id="phone" maxlength="10"  class="box">
            <label for="c-id" class="text">Captain Roll No :</label>
            <input type="text" id="c-id" name="crno" class="box">
            <label for=""></label>
            <input type="submit" class="Add" value="ADD PLAYER">
        </form>
    </div>
</body>
</html>