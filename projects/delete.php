<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

$con = new mysqli("localhost","root","","mydb");

// Delete
$id=$_REQUEST['id'];
$query = "DELETE FROM product WHERE id='$id'"; 
$result = mysqli_query($con,$query) ;
header("Location: display.php"); 
exit();


?>