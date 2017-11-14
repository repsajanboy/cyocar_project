<?php include('conn.php');
session_start();
if(!empty($_SESSION['user_user'])){header('location:index.php');}
?>
<!-- Sign Up Page   -->
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>A Cretin Do CYOCar</title>


<link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" >


</head>
<body>
<img id="imgg" src="img/cyocar2.png" margin="auto"/>
<div id="login">
  <form name='form-login' method="post" action="query.php?query=registernew">
    <span class="fa fa-user"></span>
      <input type="text" id="user" placeholder="Username" name="username">
    <span class="fa fa-lock"></span>
      <input type="password" id"pass" placeholder="Password" name="password">
    <span class="fa fa-envelope"></span>
      <input type="text" id="email" placeholder="Email Address" name="email">
    <span class="fa fa-user"></span>
      <input type="text" id="email" placeholder="Enter Your Full Name" name="fullname">
    <span class="fa fa-phone"></span>
      <input type="text" id="email" placeholder="Contact Number" name="contact">

      <div id="center">
      <p>Already have an account?</p>
      <p>Click here to <a href=login.php>Log In</a></p>
      </div>
    <input type="submit" value="Sign Up">

</form>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
