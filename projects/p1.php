<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 4rem;
            text-align: center;
            margin-top: 20px;
            color: #212529;
        }

        .navbar {
            background-color: #212529;
            color: white;
        }

        .navbar-brand img {
            width: 150px;
            height: auto;
        }

        .formm {
            width: 70%;
            border-radius: 30px;
            padding: 20px;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
        }

        .formm:hover {
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
        }

        .card {
            width: 18rem;
            margin: 20px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 15px;
        }

        .list-group-item {
            border: none;
            padding: 10px;
        }

        .container {
            padding: 20px;
            background-color: white;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #dc3545;
            color: white;
        }

        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .add-to-cart-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            background-color: #28a745; /* Green color */
            color: #fff; /* White text */
            border: 2px solid #28a745; /* Green border */
            border-radius: 8px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background-color: #218838; /* Darker green color on hover */
            border-color: #218838;
        }
    </style>
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a href="home.php" class="navbar-brand">
                <img src="https://baroque.pk/cdn/shop/files/LOGO_PNG_V01_2.png?v=1694417343&width=280" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <h1>Products</h1>

    <?php
    $con = mysqli_connect("localhost", "root", "", "mydb");
    $query = "select * from product";
    $show = mysqli_query($con, $query);

    if (mysqli_num_rows($show) > 0) {
    ?>
        <div class="container">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_assoc($show)) {
                ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="upload\<?php echo $row['image'] ?>" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <p class="card-text"><?php echo $row['detail']; ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><?php echo $row['name']; ?></li>
                                <li class="list-group-item">RS:<?php echo $row['price']; ?></li>
                                <li class="list-group-item"><?php echo $row['size']; ?></li>
                                <li class="list-group-item"><?php echo $row['code']; ?></li>
                                <a href="pinfo.php" class="add-to-cart-btn">Add to Cart</a>
                            </ul>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>

    <div class="container">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th><a href="#">ABOUT</a></th>
                    <th>CUSTOMER SERVICE</th>
                    <th>POLICIES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Who We Are</td>
                    <td>Contact Us</td>
                    <td>Privacy Policy</td>
                </tr>
                <tr>
                    <td>Our Responsibility</td>
                    <td>Thornton</td>
                    <td>Refund Policy</td>
                </tr>
                <tr>
                    <td>Service We Provide</td>
                    <td>Order Tracking</td>
                    <td>Shipping Policy</td>
                </tr>
                <tr>
                    <td>Careers</td>
                    <td>Order & Delivery</td>
                    <td>Terms of Service</td>
                </tr>
                <tr>
                    <td rowspan="3">Legal</td>
                    <td>Exchange Information</td>
                </tr>
                <tr>
                    <td>Call: +92 325 700 1111</td>
                </tr>
                <tr>
                    <td>WhatsApp: +92 325 7001111</td>
                </tr>
                <tr>
                    <td> © 2023 - BAROQUE</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>&copy; 2023 - BAROQUE</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-3p3F8A0bNq9qT7AA5kSIZA5AzPUC1cqqzQYUEGtRheHw0Qq2K4W9BcVbfd6kKG67" crossorigin="anonymous"></script>
</body>
</html>
