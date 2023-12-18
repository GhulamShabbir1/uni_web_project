<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <title>Add Products</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1 {
            font-size: 4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 30px;
            color: #343a40;
        }

        .formm {
            border: none;
            width: 70%;
            border-radius: 15px;
            padding: 30px;
            margin: 0 auto;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .formm:hover {
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
        }

        .navbar {
            color: white;
            background-color: #343a40 !important;
        }

        table {
            margin-top: 50px;
            background-color: #fff;
        }

        th,
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="login.php">Products</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="display.php">Display Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>Add Products</h1>
    <form class="formm" action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Product ID</label>
            <input type="number" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Product Price</label>
            <input type="number" class="form-control" name="price" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Product Code</label>
            <input type="number" class="form-control" name="code" id="exampleInputPassword1">
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">In Stock</label>
            <select class="form-select" name="stock" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Discount</label>
            <input type="number" class="form-control" name="discount" id="exampleInputPassword1">
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Size</label>
            <select class="form-select" name="size" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
        </div>

        <div class="form-floating">
            <textarea class="form-control" name="discription" placeholder="Leave a comment here"
                id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Description</label>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Picture</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <input type="submit" name="submit" class="btn btn-primary">
    </form>

    <?php
    $con = mysqli_connect("localhost", "root", "", "mydb");
    $query = "select * from product";
    $show = mysqli_query($con, $query);
    if (mysqli_num_rows($show) > 0) {
    ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Code</th>
                    <th>Available</th>
                    <th>Discount</th>
                    <th>Size</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($show)) { ?>
                    <tr>
                        <td><img src="upload/<?php echo $row['image']; ?>" style="height: 90px;"></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td>RS: <?php echo $row['price']; ?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <td><?php echo $row['discount']; ?>%</td>
                        <td><?php echo $row['size']; ?></td>
                        <td><?php echo $row['detail']; ?></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } ?>

</body>

</html>
