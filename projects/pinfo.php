<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    *{
      text-decoration: none;
    }
    img{
      width:70%;
      height:500px;
      display: flex;
      justify-content: center;
      align-self: center;
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
</head>
<body>
<a href="p1.php" class="add-to-cart-btn">Return</a>
    <!-- Your existing HTML code for navbar and heading -->

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
                        <!-- Wrap each card in an anchor tag with the target URL -->
                        <a href="display.php?id=<?php echo $row['product_id']; ?>" class="card-link">
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
                                </ul>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    }
    ?>

</body>
</html>
