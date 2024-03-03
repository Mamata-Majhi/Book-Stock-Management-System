<?php
include './../connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Add Book</title>
</head>

<body>
    <?php
    include("../navbar/navbar.php");
    $sql = "SELECT * FROM book";
    $result = mysqli_query($conn, $sql);
    // if(isset($result))
    // {
    //     echo"hey !!";
    // }
    ?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Book List</h5>
                <a href="./add_book.php" class="btn btn-primary">Add Book</a>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Title</th>
                            <th scope="col">Auther</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <?php
                    $counter = 0;
                    if (mysqli_num_rows($result) > 0) {
                        while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo ++$counter ?></td>
                                <td><?php echo $rows['title']; ?></td>
                                <td><?php echo $rows['author']; ?></td>
                                <td><?php echo $rows['genre']; ?></td>
                                <td><?php echo $rows['price']; ?></td>
                                <td><?php echo $rows['image']; ?></td>
                                <td><?php echo $rows['isbn']; ?></td>

                                <td>
                                    <a href="./view.php?id=<?php echo $rows['id']; ?>" class="btn btn-primary">View</a>
                                    <a href="./edit.php?id=<?php echo $rows['id']; ?>" class="btn btn-warning">Edit</a>
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $rows['id']; ?>)">Delete</button>
                                </td>

                            </tr>
                    <?php
                        }
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(bookId) {
            // Display a confirmation dialog
            if (confirm("Are you sure you want to delete this book?")) {
                // If user confirms, redirect to the delete page with the book ID
                window.location.href = "./../delete/delete_book.php?id=" + bookId;
            } else {
                // If user cancels, do nothing
                return false;
            }
        }
    </script>
</body>

</html>