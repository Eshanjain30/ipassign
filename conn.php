<?php 
    $host="localhost";
    $username="root";
    $pass="";
    $db="assignment";
    $conn=mysqli_connect($host,$username,$pass,$db);
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
?>
