<?php
include('conn.php');
  session_start();
  if(empty($_SESSION['user_user'])){header('location:login.php');}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>A Cretin Do CYOCAR</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../css/material-dashboard.css" rel="stylesheet" />

    <link href="style.css" rel="stylesheet" />
    <link href="style_1.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>


<body id="bodyg">
  <div style="overflow:hidden;">
    <header class="header3" id="header3"><!--header-start-->
        <div class="container">

                <a href="#"><img id="imgg" class="img-responsive" src="../img/cyocar2.png" alt=""></a>

      			<form class="form3_code">

      				<input class="post_code" type="text" placeholder="Search Product">
      				<button type="submit">Find Product</button>
      			</form>

  </div>
</div>
<?php
include('conn.php');
$id = $_SESSION['user_user'];
$query = "SELECT * FROM customer WHERE cus_Id='$id'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
 ?>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="img/sidebar.jpg">
          <div class="logo">
             <p class="simple-text"> HI! <?php echo $row['cus_username']; ?></p>
          </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="../index.php">
                            <i class="material-icons">shopping_basket</i>
                            <p>Products</p>
                        </a>
                    </li>

                    <li>
                        <a href="../order.php">
                            <i class="material-icons">shopping_cart</i>
                            <p>Order</p>
                        </a>
                    </li>

                    <li>
                        <a href="../history.php">
                            <i class="material-icons">library_books</i>
                            <p>History</p>
                        </a>
                    </li>

                    <li>
                        <a href="../logout.php">
                            <i class="material-icons">exit_to_app</i>
                            <p>Log Out</p>
                        </a>
                    </li>
                    <li>
                        <a href="../adminlogin.php">
                            <i class="material-icons">settings_applications</i>
                            <p>Admin Login</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>



        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>


                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Customize Your Own Car Products</h4>
                                </div>
                                <div class="well well-small">
                                  <hr class="soften"/>
                                  <div class="row-fluid">
                                   <ul class="thumbnails">
                                     <li class="span4">
                                      <div class="thumbnailg">
                                        <form method="post" action="../cart.php">
                                        <?php
                                        include('conn.php');
                                        $query = "SELECT * FROM product WHERE product_Id='3'";
                                          $sql=mysqli_query($con,$query) or die(mysqli_error());
                                              while($row = mysqli_fetch_assoc($sql)){?>
                                              <img src="../<?php echo $row['product_Picture'];?>" />
                                          <?php } ?>
                                      </div>
                                    </li>
                                  </ul>
                                <div class="span7">
                                  <?php
                                  include('conn.php');
                                  $query = "SELECT * FROM product WHERE product_Id='3'";
                                    $sql=mysqli_query($con,$query) or die(mysqli_error());
                                        while($row = mysqli_fetch_array($sql)){?>
                                  <h3><?php echo $row['product_Name']; ?></h3>
                                  <h3>Php <?php echo $row['product_Price']; ?></h3>

                                  <h4><?php echo $row['product_Stock']; ?> items in stock</h4>
                                  <h4><center>Product Information</center></h4>
                                  <table class="table table-striped">
				                                <tbody>
				                                      <tr class="techSpecRow"><td class="techSpecTD1">Boot Type:</td><td class="techSpecTD2">Solid</td></tr>
				                                      <tr class="techSpecRow"><td class="techSpecTD1">Distributor / Coil Boot Material:</td><td class="techSpecTD2">EPDM Rubber</td></tr>
				                                      <tr class="techSpecRow"><td class="techSpecTD1">Boot Material:</td><td class="techSpecTD2">Hi temp Silicon</td></tr>
				                                      <tr class="techSpecRow"><td class="techSpecTD1">Coil Terminal Type:</td><td class="techSpecTD2">Snap Lock</td></tr>
				                                      <tr class="techSpecRow"><td class="techSpecTD1">Terminal Type:</td><td class="techSpecTD2">Snap Lock</td></tr>
				                                      <tr class="techSpecRow"><td class="techSpecTD1">Boot End Angle:</td><td class="techSpecTD2">90 degrees (Distributor Coil End Boot/Spark plug boot)</td></tr>
                                              <tr class="techSpecRow"><td class="techSpecTD1">Boot Color:</td><td class="techSpecTD2">Black</td></tr>
                                              <tr class="techSpecRow"><td class="techSpecTD1">Core Material:</td><td class="techSpecTD2">Fiberglass Reinforced Latex Graphite</td></tr>
                                              <tr class="techSpecRow"><td class="techSpecTD1">Color:</td><td class="techSpecTD2">Black</td></tr>
                                              <tr class="techSpecRow"><td class="techSpecTD1">Insulation Material:</td><td class="techSpecTD2">Silicone</td></tr>
                                              <tr class="techSpecRow"><td class="techSpecTD1">Wire Length (in):</td><td class="techSpecTD2">44.2</td></tr>
                                              <tr class="techSpecRow"><td class="techSpecTD1">Outside Diameter (in):</td><td class="techSpecTD2">0.31</td></tr>
                                              <tr class="techSpecRow"><td class="techSpecTD1">Noise Reduction:	</td><td class="techSpecTD2">Yes</td></tr>
				                                 </tbody>
				                          </table>
                                  <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                                  <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                                  <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                                  <input type="text" name="quantity" style="width:18%; text-align: center" placeholder="Quantity" />
                                  <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>

                                    <?php } ?>
                                  </form>
                                  </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


  <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.easing-1.3.min.js"></script>
  <script src="../js/jquery.scrollTo-1.4.3.1-min.js"></script>
  <script src="../js/cyocar.js"></script>
</body>

<!--   Core JS Files   -->
<script src="../js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="../js/material.min.js" type="text/javascript"></script>
<script src="../js/jquery.js"></script>


<!--  Charts Plugin -->
<script src="../js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="../js/material-dashboard.js"></script>




</html>
