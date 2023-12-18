

   <html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<style>
  
     h1 {
      font-size: 4rem;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom:50px;
      text-shadow:0px 0px 30px cyan;

    }
    .formm:hover {
      box-shadow: 0px 0px 30px black;
    }

    .formm {
      
      width: 70%;
      border-radius: 30px;
      padding: 20px;
      margin-left: 250px;
    }
</style>

    
</head>
<body >
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="home.php" class="navbar-brand"> <img
          src="https://baroque.pk/cdn/shop/files/LOGO_PNG_V01_2.png?v=1694417343&width=280" width="150px" height="60px"
          alt=""></a>

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
            <a class="nav-link" href="p1.php">Product</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
<?php
   
   $con = mysqli_connect("localhost","root","","mydb");
  
?>
    <?php 
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password = $_POST['password'];
        $result= mysqli_query($con,"SELECT * FROM login WHERE username ='$username'");
         $row = mysqli_fetch_assoc($result);
         if(mysqli_num_rows($result) > 0){
           
            if($password == $row['password']){
                
                header("Location: index.php");
            }else{
                echo"<div class='alert alert-danger d-flex align-items-center' role='alert'>
                <svg class='bi flex-shrink-0 me-2' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                <div>
                  <strong>Error!</strong> Invalid Username and Password.
                </div>
              </div>";
            }
        }else{
                echo"<div class='alert alert-danger d-flex align-items-center' role='alert'>
                <svg class='bi flex-shrink-0 me-2' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
                <div>
                  <strong>Error!</strong> Invalid Username and Password.
                </div>
              </div>";
            }
    }
    ?>
    <h1>
        Login Here
    </h1>
    
<div>

    <form action="" method="POST" class="formm">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username / Email</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"</div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text"name="password"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </div>



<div class="container">
    <table class="table table-borderless">
      <thead>
        <tr>
          <th><a href="#"> ABOUT </a></th>
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
</body>

</html>
</body>


   </html>