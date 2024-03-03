<?php
session_start();
if (!$_SESSION["user_name"]) {
    header('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- Add your CSS links here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .book-card {
            margin-bottom: 20px;
        }

        .carousel-item img {
            max-height: 150px;
            /* Adjust this value as needed */
            margin: auto;
        }

        .recommend {
            height: 250px;
            /* Adjust the height as needed */
            object-fit: cover;
            /* Ensure the image covers the entire container */
        }
    </style>
</head>

<body>
    <?php include("../navbar/navbar.php"); ?>

    <div class="container">
        <div class="row">
            <?php
            // Include the booklist.php page
            include("../book/booklist.php");
            shuffle($books);
            // Loop through each book and display it in a card
            foreach ($books as $book) {
                $book_id = urlencode($book['id']);
                echo '<div class="col-md-3">
                        <div class="card shadow book-card">
                            <img src="' . $book['image'] . '" class="card-img-top" alt="Book Image">
                            <div class="card-body">
                                <h5 class="card-title">' . $book['title'] . '</h5>
                                <p class="card-text">Author: ' . $book['author'] . '</p>
                                <a href="../book/checkin.php?id=' . $book_id . '" class="btn btn-primary">Check In</a>
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>

    <hr>

    <div class="container py-4">
        <fieldset>
            <legend class="text-success text-center">Your Recommend</legend>
            <div class="row">
                <?php
                shuffle($books);
                for ($i = 0; $i < min(4, count($books)); $i++) {
                    $book = $books[$i];
                    echo '<div class="col-md-3">
                    <div class="card">
                        <img src="' . $book['image'] . '" class="card-img-top recommend" alt="Book Image">
                        <div class="card-body">
                            <h5 class="card-title">' . $book['title'] . '</h5>
                            <p class="card-text">Author: ' . $book['author'] . '</p>
                        </div>
                    </div>
                </div>';
                }
                ?>
            </div>
        </fieldset>
    </div>
    <!-- Add your JS links here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-F2qxHhhIPwjBnhirMCp6h66ZrWiI0xZm4N+KZVNbyf3g20JLozgNwxCfLHEcOOEq" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>