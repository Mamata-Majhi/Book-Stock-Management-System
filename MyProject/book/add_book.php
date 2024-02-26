<?php
include'./../connection.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql = "SELECT * FROM `book` WHERE id=" . $id;
    $res = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($res);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Add Book</title>
</head>

<body>
    <?php
    include("../navbar/navbar.php");
    ?>
    <div class="container w-50">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Add Book</h5>
            </div>
            <div class="card-body">
                <form action="<?php echo isset($data) ? './../edit/edit_book.php':"./process_data.php"?>" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Auther</label>
                        <input type="text" class="form-control" id="author" name="author" placeholder="Enter Auther" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter Genre" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ISBN</label>
                        <input type="number" class="form-control" id="isbn" name="isbn" placeholder="Enter ISBN" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required />
                    </div>
                    <a type="button" href="./index.php" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>