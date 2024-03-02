
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <title>Add Book</title>
    <script>
        function validateISBN() {
            // Get the value of the ISBN input
            var isbnInput = document.getElementById('isbn').value;

            // Check if the ISBN is exactly 13 digits long
            if (isbnInput.length === 13) {
                return true; // ISBN is valid
            } else {
                alert('ISBN should be 13 digits long.');
                return false; // ISBN is not valid
            }
        }
    </script>
</head>

<body>
    <?php
    // include("../navbar/navbar.php");
    include'./../connection.php';
    $book_id=$_REQUEST['id'];
    // echo $book_id;
    $sql="SELECT * FROM `book` WHERE id=$book_id;";
    $result = mysqli_query($conn, $sql) or die("Querry Failed! " . mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    // echo $row[2];
    ?>

    <div class="container w-50">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add Book</h5>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data" onsubmit="return validateISBN()">
                <input type="hidden" name="id" value="<?php echo isset($row) ? $row['id'] : ''; ?>">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required value="<?php echo ($row[2]) ?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Auther</label>
                        <input type="text" class="form-control" id="author" name="author" placeholder="Enter Auther" required value="<?php echo ($row[3]) ?> "/>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter Genre" required value="<?php echo ($row[4]) ?> " />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required value="<?php echo ($row[5]) ?> " />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ISBN</label>
                        <input type="number" class="form-control" id="isbn" name="isbn" placeholder="Enter ISBN" required value="<?php echo ($row[6]) ?> "/>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required value="<?php echo ($row[7]) ?> "/>
                    </div>
                    <a type="button" href="./../book/index.php" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $isbn = $_POST['isbn'];

    // Specify your image folder path
    $imagePath = './../uploaded_image';
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageDestination = $imagePath . $imageName;

    // Move uploaded file to destination
    move_uploaded_file($imageTmpName, $imageDestination);

    // inserting into table

    $sql_update_data="UPDATE `book` SET`title`='$title',`author`='$author',`genre`='$genre',`price`='$price',`isbn`='$isbn',`image`='$imageName' WHERE id=$book_id";
    //checking data insertion
    if (mysqli_query($conn, $sql_update_data)) {
        echo "<script>
                        alert(\"Update Successful\");
                        window.location =\"./../book/index.php\";
                </script>";
    } else {
        die("Update failed! </br>" . mysqli_error($conn));
        echo "</br>";
    }
    mysqli_close($conn);
}
    ?>
    
</body>

</html>