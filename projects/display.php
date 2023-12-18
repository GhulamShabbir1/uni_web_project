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
      border: 3px solid black;
      width: 70%;
      border-radius: 30px;
      padding: 20px;
      margin-left:15%;
    }
    .formm:hover {
      box-shadow: 0px 0px 30px black;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">products</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Add product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">log out</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
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
        <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
           <td> <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
          </td>

        
    </tr>
    

<?php } ?>
</table>
<?php } ?>


</body>
</html>