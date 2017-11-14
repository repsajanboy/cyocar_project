<?php
include('conn.php');
  session_start();
$customer = $_SESSION['user_user'];
$product_Picture = $_POST['product_Pic'];
$product_Name =$_POST['product_Name'];
$product_Price = $_POST['product_Price'];
$quantity = $_POST['quantity'];
$total = $_POST['product_Price']*$_POST['quantity'];
$query = "INSERT INTO `cart` (`cart_Id`, `cart_Product`, `cart_Description`, `cart_Price`, `cart_Quantity`, `cart_Total`, `cart_CusId`) VALUES (NULL, '$product_Picture', '$product_Name', '$product_Price', '$quantity', '$total', '$customer')";
$result =  mysqli_query($con,$query);
if ($result==1){
  header("location:index.php");
}else {
  echo "not successful";
}
 ?>
