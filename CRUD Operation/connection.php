<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_registration";

    $conn = new mysqli(hostname: $servername,username:$username,password:$password,database:$dbname);

    if($conn->connect_error){
        die("connection failed :".$conn->connect_error);
    }
    echo"connection successful!!!";

?>