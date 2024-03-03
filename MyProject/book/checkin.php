<?php
session_start();
if (!$_SESSION["user_name"]) {
    header('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Check-In</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .rating input[type="radio"] {
            display: none;
        }

        .rating label {
            display: inline-block;
            cursor: pointer;
        }

        .rating label::before {
            content: "\2605";
            font-size: 24px;
            color: #ddd;
        }

        .rating input[type="radio"]:checked~label::before {
            color: #f8ce0b;
        }
    </style>
</head>

<body>
    <?php include("../navbar/navbar.php"); ?>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center" style="min-height: 50vh;">
            <div class="col-md-6">
                <?php
                if (isset($_GET['id'])) {
                    $book_id = $_GET['id'];
                    include("./booklist.php");
                    // Find the book with the matching ID
                    $selected_book = null;
                    foreach ($books as $book) {
                        if ($book['id'] == $book_id) {
                            $selected_book = $book;
                            break;
                        }
                    }
                    // If the book is found, display it in a card
                    if ($selected_book) {
                        echo '<div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><strong>' . $selected_book['title'] . '</strong></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="' . $selected_book['image'] . '" class="card-img" alt="Book Image" style="width: 100%; height: auto;">
                                </div>
                                <div class="col-md-6">
                                <p class="card-text"><strong>Title:</strong> ' . $selected_book['title'] . '</p>
                                    <p class="card-text"><strong>Author:</strong> ' . $selected_book['author'] . '</p>
                                    <p class="card-text"><strong>Price:</strong> ' . $selected_book['price'] . '</p>
                                    <hr>
                                    <p class="card-text"><strong>Description:</strong> ' . $selected_book['description'] . '</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <form action="../purchase/buy.php" method="POST">
                                <div class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" class="form-check-input" />
                                    <label for="star5" title="5 stars" class="form-check-label"></label>
                                    <input type="radio" id="star4" name="rating" value="4" class="form-check-input" />
                                    <label for="star4" title="4 stars" class="form-check-label"></label>
                                    <input type="radio" id="star3" name="rating" value="3" class="form-check-input" />
                                    <label for="star3" title="3 stars" class="form-check-label"></label>
                                    <input type="radio" id="star2" name="rating" value="2" class="form-check-input" />
                                    <label for="star2" title="2 stars" class="form-check-label"></label>
                                    <input type="radio" id="star1" name="rating" value="1" class="form-check-input" />
                                    <label for="star1" title="1 star" class="form-check-label"></label>
                                    <input type="hidden" name="id" value="' . $selected_book['id'] . '">
                                </div>
                                <button type="submit" class="btn btn-success bg-success">Submit</button>
                            </form>
                        </div>
                    </div>';
                    } else {
                        echo 'Book not found.';
                    }
                } else {
                    echo 'Book ID not provided.';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>