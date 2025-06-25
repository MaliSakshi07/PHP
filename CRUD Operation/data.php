<?php
    include('connection.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $Email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO registration(username,email,password)VALUES('$username','$Email','$password')";

        if($conn->query(query: $sql) === TRUE){
            echo"User Registered Successfully !!!";
        }
        else{
            echo"Error :".$conn->error;
        }
        $conn->colse();
    }
?>