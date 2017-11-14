<?php
header("Content-type: image/jpeg");
include('conn.php');
  $id = $_GET['product_Id'];
  // do some validation here to ensure id is safe
  $query = "SELECT * FROM product WHERE product_Id=$id";
    $sql=mysqli_query($con,$query) or die(mysqli_error());
    $row = mysqli_fetch_array($sql));

  echo $row['product_Picture'];
?>
