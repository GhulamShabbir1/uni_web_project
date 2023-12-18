<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$con = new mysqli("localhost","root","","mydb");



$id = $_REQUEST['id'];
$r = mysqli_query($con,"SELECT *FROM product WHERE id ='$id'");
$row = mysqli_fetch_assoc($r);

if(isset($_POST['submit']))
{
   
    $name = $_POST['name'];
    $price=$_POST['price'];
    $code=$_POST['code'];
    $stock=$_POST['stock'];
    $discount=$_POST['discount'];
    $size=$_POST['size'];
    $detail=$_POST['discription'];
    $image= $_FILES['image']['name'];
    $query="UPDATE `product` SET `name`='$name',`price`='$price',`code`='$code',`stock`='$stock',`discount`='$discount',`size`='$size',`detail`='$detail',`image`='$image' WHERE id ='$id'";
        
        $ins = mysqli_query($con,$query);
        $path= "upload/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'],$path);

        header("Location: display.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
     h1 {
      font-size: 4rem;
      display: flex;
      align-items: center;
      justify-content: center;

    }
 

    .formm {
      border: none;
      width: 70%;
      border-radius: 30px;
      padding: 20px;
      margin-left:15%;
      margin-top:50px;
      margin-bottom:50px;
    }
    .formm:hover {
      box-shadow: 0px 0px 30px black;
    }
    .navbar{
      color:white;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php">products</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="display.php">Display Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">log out</a>
        </li>

        
      </ul>
    </div>
  </div>
</nav>



<h1>Update Products</h1>
<form class="formm" action="" method="POST"  enctype="multipart/form-data">
  
    

  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Product name</label>
    <input type="text" value="<?php echo $row['name'];?>" class="form-control"name="name" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Product Price</label>
    <input type="number" value="<?php echo $row['price'];?>" class="form-control"name="price" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product code</label>
    <input type="number" value="<?php echo $row['code'];?>" class="form-control" name="code"id="exampleInputPassword1">
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text"  for="inputGroupSelect01">In Stock</label>
  <select class="form-select" name="stock"id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Discount</label>
    <input type="number"value="<?php echo $row['discount'];?>" class="form-control" name="discount" id="exampleInputPassword1">
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text"  for="inputGroupSelect01">Size</label>
  <select class="form-select"name="size" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="Small">Small</option>
    <option value="Medium">Medium</option>
    <option value="Large">Large</option>
  </select><br>

  <div class="form-floating">
  <textarea class="form-control" value="<?php echo $row['description'];?>" name="discription"placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label  for="floatingTextarea2">Discription</label>
</div>
</div>
<?php 
$con = mysqli_connect("localhost","root","","mydb");
$query ="select *from product";
$show = mysqli_query($con,$query);
if(mysqli_num_rows($show) > 0){
?>
<table class="table ">
    <th> Image</th>
    <?php while($row = mysqli_fetch_assoc($show)){
?>
 </tr>
    

    <?php } ?>
    </table>
    <?php } ?>
<tr>
        
        <td><img src="upload/<?php echo $row['image'] ;?></td>
<table class="table ">
    <th> Image</th>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Picture</label>
<input type="file" name="image" class="form-control" >

</div>
    </TABLE>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" name="submit" class="btn btn-primary">
</form>



</body>
</html>