<?php
$server="sql112.epizy.com";
    $username="epiz_33896344";
    $password ="9krOezqk5xiL";
    $dbname= "epiz_33896344_phase2";
    $con=mysqli_connect($server,$username,$password,$dbname);
    // check connection
    if( !$con){
        die("connection to this database failed due to ".mysqli_connect_error());
    }

?>