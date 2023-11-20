<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_a3";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
     echo "Connection ok";
    }
    else
    {  
     echo "Connection fail".mysqli_connect_error();
    }
?>