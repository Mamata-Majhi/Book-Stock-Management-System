<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //connecting database
    include('../connection.php');

    //accessing username and password from login page
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //retrieving username and hashed password from database
    $sql = "SELECT id,user_name,full_name, password FROM user
                WHERE full_name='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql) or die("Query Failed! " . mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["user_name"] = $row['user_name'];
        $_SESSION["full_name"] = $row['full_name'];
        header('location:/Book-Stock-Management-System/MyProject/dashboard/index.php');
        exit();
    } else {
        echo "<script>
            alert(\"Invalid Credentials!\");
            window.location=\"../../login.php\";
        </script>";
    }
}
