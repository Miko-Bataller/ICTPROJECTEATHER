<?php 
    $server = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ictproject";
    $conn = new mysqli($server, $dbuser, $dbpass, $dbname);
    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }
?>