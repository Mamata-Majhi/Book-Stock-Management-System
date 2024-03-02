
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //connecting database
    include('./../connection.php');

    // accessing username and password from the login page
    $full_name = mysqli_escape_string($conn, $_POST['username']);
    $entered_password = $_POST['password'];

    // retrieving username and password hash from the database
    $sql = "SELECT id, full_name, password FROM user
            WHERE full_name='$full_name'";
    $result = mysqli_query($conn, $sql) or die("Query Failed! " . mysqli_error($conn));

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($entered_password, $row['password'])) {
            // Password is correct, proceed with the rest of your code
            session_start();
            $_SESSION["id"] = $row['id'];
            $_SESSION["full_name"] = $row['full_name'];

            header('location:/Book-Stock-Management-System/MyProject/dashboard/index.php');
            exit();
        } else {
            // Invalid password
            echo "<script>
                alert(\"Username and Password do not match!\");
                window.location=\"./../user/user_login.php\";
            </script>";
        }
    } else {
        // No matching user found
        echo "<script>
            alert(\"Username not found!\");
            window.location=\"./../user/user_login.php\";
        </script>";
    }
}

?>
