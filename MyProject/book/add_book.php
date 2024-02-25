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
                <form action="./index.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Title" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Auther</label>
                        <input type="text" class="form-control" id="author" placeholder="Enter Auther" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" placeholder="Enter Genre" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" placeholder="Price" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" placeholder="Enter ISBN" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" required />
                    </div>
                    <a type="button" href="./index.php" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>