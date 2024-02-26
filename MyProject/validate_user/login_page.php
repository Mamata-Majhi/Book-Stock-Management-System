<?php
// echo"login page";
include'./../connection.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $data='';
    $username=$_POST["username"];
    $password=$_POST["password"];

    // validate user against database
    $validUsername = "example_user";
    $validPassword = "example_password";

    if ($username == $validUsername && $password == $validPassword) {
        // Authentication successful, redirect to the dashboard
        header("Location: ./MyProject/dashboard.php");
        exit();
    } else {
        // echo "Invalid username or password";

        header("Location: /Book-Stock-Management-System/index.php?error=1");
        exit();
    }
   
}

?>