<?php
    include('connection.php');

    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $loginEmail = $_POST['login_email'];
        $loginPassword = $_POST['login_password'];

        $sql = "SELECT * FROM registration WHERE email = '$loginEmail' AND password = '$loginPassword'";

        $result = $conn->query(query: $sql);

        if($result->num_rows > 0){
            echo"Login Successfull !!!";
        }
        else{
            echo"Incorrect Username Or Password";
        }
    }
    $conn->close();
?>