<?php
$con=mysqli_connect("localhost","root","","mydb");
if($con){
  echo" <div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Well done!</h4>
  <p>Aww yeah, you are successfully connected to Database.</p>
</div>";
}else
{
  echo"<div class='alert alert-danger d-flex align-items-center' role='alert'>
  <svg class='bi flex-shrink-0 me-2' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
  <div>
    <strong>Error!</strong>ohh!, you are not connected to Database. Pease Try Again
  </div>
</div>";
}
if(isset($_POST['submit']))

    $id=$_POST['id'];
    $name = $_POST['name'];
    $price=$_POST['price'];
    $code=$_POST['code'];
    $stock=$_POST['stock'];
    $discount=$_POST['discount'];
    $size=$_POST['size'];
    $detail=$_POST['discription'];
    $image= $_FILES['image']['name'];
    $query="insert into product values('','$name','$price','$code','$stock','$discount','$size','$detail','$image')";
        
        $ins = mysqli_query($con,$query);
        $path= "upload/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'],$path);
       
        if($ins)
        echo" <div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Well done!</h4>
  <p>you are successfully Add image into Database.</p>
</div>";
        else
        echo"<div class='alert alert-danger d-flex align-items-center' role='alert'>
                <svg class='bi flex-shrink-0 me-2' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                <div>
                  <strong>Error!</strong> Invalid Username and Password.
                </div>
              </div>";


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
 <h1>Add Products</h1>
<form class="formm" action="" method="POST"  enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Product ID</label>
    <input type="number" class="form-control"name="id" id="exampleInputEmail1" aria-describedby="emailHelp">

  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Product name</label>
    <input type="text" class="form-control"name="name" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Product Price</label>
    <input type="number" class="form-control"name="price" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product code</label>
    <input type="number" class="form-control" name="code"id="exampleInputPassword1">
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text"  for="inputGroupSelect01">In Stock</label>
  <select class="form-select" name="stock"id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Yes</option>
    <option value="2">No</option>
  </select>
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Discount</label>
    <input type="number" class="form-control" name="discount" id="exampleInputPassword1">
  </div>

  <div class="input-group mb-3">
  <label class="input-group-text"  for="inputGroupSelect01">Size</label>
  <select class="form-select"name="size" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Small</option>
    <option value="2">Medium</option>
    <option value="3">Large</option>
  </select><br>

  <div class="form-floating">
  <textarea class="form-control" name="discription"placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label  for="floatingTextarea2">Discription</label>
</div>
</div>

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Picture</label>
<input type="file" name="image" class="form-control" >

</div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" name="submit" class="btn btn-primary">
</form>




<?php 
$con = mysqli_connect("localhost","root","","mydb");
$query ="select *from product";
$show = mysqli_query($con,$query);
if(mysqli_num_rows($show) > 0){
?>
<table class="table ">
    <th> Image</th>
    <th> ID</th>
    <th> Name</th>
    <th> Price</th>
    <th> code</th>
    <th> Available</th>
    <th> discount</th>
    <th> size</th>
    <th>details</th>
   <?php while($row = mysqli_fetch_assoc($show)){
?>

    
    <tr>
        
        <td><img src="upload/<?php echo $row['image'] ;?>" style="height: 90px;"></td>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td>RS: <?php echo $row['price']; ?></td>
        <td><?php echo $row['code']; ?></td>
        <td><?php echo $row['stock']; ?></td>
        <td><?php echo $row['discount']; ?>%</td>
        <td><?php echo $row['size']; ?></td>
        <td><?php echo $row['detail']; ?></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>"> edit </a></td>

        
    </tr>
    

<?php } ?>
</table>
<?php } ?>

</table>
</body>
</html>