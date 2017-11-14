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
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css" rel="stylesheet" />

    <link href="css/style3.css" rel="stylesheet" />
    <link href="css/style_1.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>


<body>
  <div style="overflow:hidden;">
    <header class="header3" id="header3"><!--header-start-->
        <div class="container">

                <a href="#"><img id="imgg" class="img-responsive" src="img/cyocar2.png" alt=""></a>

      			<form class="form3_code" method="post" action="search.php">

      				<input class="post_code" type="text" placeholder="Search Product" name="term">
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
                        <a href="index.php">
                            <i class="material-icons">shopping_basket</i>
                            <p>Products</p>
                        </a>
                    </li>

                    <li>
                        <a href="order.php">
                            <i class="material-icons">shopping_cart</i>
                            <p>Order</p>
                        </a>
                    </li>

                    <li>
                        <a href="history.php">
                            <i class="material-icons">library_books</i>
                            <p>History</p>
                        </a>
                    </li>

                    <li>
                        <a href="logout.php">
                            <i class="material-icons">exit_to_app</i>
                            <p>Log Out</p>
                        </a>
                    </li>
                    <li>
                        <a href="adminlogin.php">
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
                                <div class="well np">
                                  <div id="myCarousel" class="carousel slide homCar">
                                    <div class="carousel-inner">
                                      <div class="item">
                                        <img style="width:100%" src="img/dikokita.jpg" alt="bootstrap ecommerce templates">

                                      </div>
                                      <div class="item">
                                        <img style="width:100%" src="img/dikopakita1.jpg" alt="bootstrap ecommerce templates">
                                      </div>
                                      <div class="item active">
                                        <img style="width:100%" src="img/dikopakita2.jpg" alt="bootstrap ecommerce templates">
                                      </div>
                                      <div class="item">
                                        <img style="width:100%" src="img/dikopakita3.jpg" alt="bootstrap templates">
                                      </div>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                                  </div>
                                </div>
            <div class="well well-small">
            <hr class="soften"/>
            <div class="row-fluid">
		         <ul class="thumbnails">
			         <li class="span4">
			          <div class="thumbnailg">
                  <a href="products/acdelco_alternator.php"><img src="img/ACDelco_Alternator.jpg" alt=""></a>
                  <div class="caption cntr">
                    <form method="post" action="cart.php">
                      <?php
                      include('conn.php');
                      $query = "SELECT * FROM product WHERE product_Id='2'";
                        $sql=mysqli_query($con,$query) or die(mysqli_error());
                            while($row = mysqli_fetch_array($sql)){?>
                      <?php echo $row['product_Name']; ?>
                      </p>
                      <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                      <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                      <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                      <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                      <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                      <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
                  <?php } ?>
                    </form>

                    <br class="clr">
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnailg">
                  <a href="products/acdelco_wireset.php"><img src="img/ACDelco_Wireset.jpg" alt=""></a>
                  <div class="caption cntr">
                  <form method="post" action="cart.php">
                    <?php
                    include('conn.php');
                    $query = "SELECT * FROM product WHERE product_Id='3'";
                      $sql=mysqli_query($con,$query) or die(mysqli_error());
                          while($row = mysqli_fetch_array($sql)){?>
                    <?php echo $row['product_Name']; ?>
                    </p>
                    <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                      <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                      <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                      <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                      <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                    <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
                <?php } ?>
                </form>
                    <br class="clr">
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnailg">
                  <a href="products/Atlantic_Automotive_Power_steering_pump.php"><img src="img/Atlantic_Automotive_Power_steering_pump.jpg" alt=""></a>
                  <div class="caption cntr">
                  <form method="post" action="cart.php">
                    <?php
                    include('conn.php');
                    $query = "SELECT * FROM product WHERE product_Id='31'";
                      $sql=mysqli_query($con,$query) or die(mysqli_error());
                          while($row = mysqli_fetch_array($sql)){?>
                    <font size="2"><?php echo $row['product_Name']; ?></font>
                    </p>
                    <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                      <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                      <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                      <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                      <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                    <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
                <?php } ?>
                </form>
                    <br class="clr">
                  </div>
                </div>
              </li>
            </ul>
            <ul class="thumbnails">
              <li class="span4">
               <div class="thumbnailg">
                 <a href="products/Auto_Ventshade_Bug_Deflector.php"><img src="img/Auto_Ventshade_Bug_Deflector.jpg" alt=""></a>
                 <div class="caption cntr">
                   <form method="post" action="cart.php">
                     <?php
                     include('conn.php');
                     $query = "SELECT * FROM product WHERE product_Id='47'";
                       $sql=mysqli_query($con,$query) or die(mysqli_error());
                           while($row = mysqli_fetch_array($sql)){?>
                     <?php echo $row['product_Name']; ?>
                     </p>
                     <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                     <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                     <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                     <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                     <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                     <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
                 <?php } ?>
                   </form>

                   <br class="clr">
                 </div>
               </div>
             </li>
             <li class="span4">
               <div class="thumbnailg">
                 <a href="products/Auto_Ventshade_Side_Window_Cover.php"><img src="img/Auto_Ventshade_Side_Window_Cover.jpg" alt=""></a>
                 <div class="caption cntr">
                 <form method="post" action="cart.php">
                   <?php
                   include('conn.php');
                   $query = "SELECT * FROM product WHERE product_Id='46'";
                     $sql=mysqli_query($con,$query) or die(mysqli_error());
                         while($row = mysqli_fetch_array($sql)){?>
                   <?php echo $row['product_Name']; ?>
                   </p>
                   <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                     <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                     <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                     <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                     <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                   <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
               <?php } ?>
               </form>
                   <br class="clr">
                 </div>
               </div>
             </li>
             <li class="span4">
               <div class="thumbnailg">
                 <a href="products/Auto_Ventshade_Sun_Deflector.php"><img src="img/Auto_Ventshade_Sun_Deflector.jpg" alt=""></a>
                 <div class="caption cntr">
                 <form method="post" action="cart.php">
                   <?php
                   include('conn.php');
                   $query = "SELECT * FROM product WHERE product_Id='45'";
                     $sql=mysqli_query($con,$query) or die(mysqli_error());
                         while($row = mysqli_fetch_array($sql)){?>
                   <font size="2"><?php echo $row['product_Name']; ?></font>
                   </p>
                   <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                     <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                     <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                     <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                     <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                   <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
               <?php } ?>
               </form>
                   <br class="clr">
                 </div>
               </div>
             </li>
           </ul>
           <ul class="thumbnails">
             <li class="span4">
              <div class="thumbnailg">
                <a href="products/Brakeware_Wheel_Cylinder-Front.php"><img src="img/Brakeware_Wheel_Cylinder-Front.jpg" alt=""></a>
                <div class="caption cntr">
                  <form method="post" action="cart.php">
                    <?php
                    include('conn.php');
                    $query = "SELECT * FROM product WHERE product_Id='26'";
                      $sql=mysqli_query($con,$query) or die(mysqli_error());
                          while($row = mysqli_fetch_array($sql)){?>
                    <?php echo $row['product_Name']; ?>
                    </p>
                    <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                    <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                    <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                    <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                    <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                    <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
                <?php } ?>
                  </form>

                  <br class="clr">
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnailg">
                <a href="products/Brakeware_Wheel_Cylinder-Rear.php"><img src="img/Brakeware_Wheel_Cylinder-Rear.jpg" alt=""></a>
                <div class="caption cntr">
                <form method="post" action="cart.php">
                  <?php
                  include('conn.php');
                  $query = "SELECT * FROM product WHERE product_Id='25'";
                    $sql=mysqli_query($con,$query) or die(mysqli_error());
                        while($row = mysqli_fetch_array($sql)){?>
                  <?php echo $row['product_Name']; ?>
                  </p>
                  <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                    <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                    <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                    <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                    <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                  <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
              <?php } ?>
              </form>
                  <br class="clr">
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnailg">
                <a href="products/Brembo_Brake_pads.php"><img src="img/Brembo_Brake_pads.jpg" alt=""></a>
                <div class="caption cntr">
                <form method="post" action="cart.php">
                  <?php
                  include('conn.php');
                  $query = "SELECT * FROM product WHERE product_Id='4'";
                    $sql=mysqli_query($con,$query) or die(mysqli_error());
                        while($row = mysqli_fetch_array($sql)){?>
                  <font size="2"><?php echo $row['product_Name']; ?></font>
                  </p>
                  <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                    <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                    <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                    <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                    <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                  <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
              <?php } ?>
              </form>
                  <br class="clr">
                </div>
              </div>
            </li>
          </ul>
          <ul class="thumbnails">
            <li class="span4">
             <div class="thumbnailg">
               <a href="products/Cardone_Reman_Engine_Control_Computer.php"><img src="img/Cardone_Reman_Engine_Control_Computer.jpg" alt=""></a>
               <div class="caption cntr">
                 <form method="post" action="cart.php">
                   <?php
                   include('conn.php');
                   $query = "SELECT * FROM product WHERE product_Id='40'";
                     $sql=mysqli_query($con,$query) or die(mysqli_error());
                         while($row = mysqli_fetch_array($sql)){?>
                   <font size="2"><?php echo $row['product_Name']; ?></font>
                   </p>
                   <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                   <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                   <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                   <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                   <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                   <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
               <?php } ?>
                 </form>

                 <br class="clr">
               </div>
             </div>
           </li>
           <li class="span4">
             <div class="thumbnailg">
               <a href="products/Carpet_Kit_Floor.php"><img src="img/Carpet_Kit_Floor.jpg" alt=""></a>
               <div class="caption cntr">
               <form method="post" action="cart.php">
                 <?php
                 include('conn.php');
                 $query = "SELECT * FROM product WHERE product_Id='48'";
                   $sql=mysqli_query($con,$query) or die(mysqli_error());
                       while($row = mysqli_fetch_array($sql)){?>
                 <?php echo $row['product_Name']; ?>
                 </p>
                 <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                   <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                   <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                   <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                   <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                 <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
             <?php } ?>
             </form>
                 <br class="clr">
               </div>
             </div>
           </li>
           <li class="span4">
             <div class="thumbnailg">
               <a href="products/Dayco_Serpentine_Belt.php"><img src="img/Dayco_Serpentine_Belt.jpg" alt=""></a>
               <div class="caption cntr">
               <form method="post" action="cart.php">
                 <?php
                 include('conn.php');
                 $query = "SELECT * FROM product WHERE product_Id='15'";
                   $sql=mysqli_query($con,$query) or die(mysqli_error());
                       while($row = mysqli_fetch_array($sql)){?>
                 <font size="2"><?php echo $row['product_Name']; ?></font>
                 </p>
                 <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                   <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                   <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                   <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                   <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                 <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
             <?php } ?>
             </form>
                 <br class="clr">
               </div>
             </div>
           </li>
         </ul>
         <ul class="thumbnails">
           <li class="span4">
            <div class="thumbnailg">
              <a href="products/Dorman_Engine_Cooling_Fan_Module.php"><img src="img/Dorman_Engine_Cooling_Fan_Module.jpg" alt=""></a>
              <div class="caption cntr">
                <form method="post" action="cart.php">
                  <?php
                  include('conn.php');
                  $query = "SELECT * FROM product WHERE product_Id='41'";
                    $sql=mysqli_query($con,$query) or die(mysqli_error());
                        while($row = mysqli_fetch_array($sql)){?>
                  <?php echo $row['product_Name']; ?>
                  </p>
                  <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                  <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                  <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                  <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                  <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                  <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
              <?php } ?>
                </form>

                <br class="clr">
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnailg">
              <a href="products/Duralast_Ball_joint.php"><img src="img/Duralast_Ball_joint.jpg" alt=""></a>
              <div class="caption cntr">
              <form method="post" action="cart.php">
                <?php
                include('conn.php');
                $query = "SELECT * FROM product WHERE product_Id='32'";
                  $sql=mysqli_query($con,$query) or die(mysqli_error());
                      while($row = mysqli_fetch_array($sql)){?>
                <?php echo $row['product_Name']; ?>
                </p>
                <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                  <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                  <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                  <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                  <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
            <?php } ?>
            </form>
                <br class="clr">
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnailg">
              <a href="products/Duralast_Bracketed_Brake_Caliper.php"><img src="img/Duralast_Bracketed_Brake_Caliper.jpg" alt=""></a>
              <div class="caption cntr">
              <form method="post" action="cart.php">
                <?php
                include('conn.php');
                $query = "SELECT * FROM product WHERE product_Id='11'";
                  $sql=mysqli_query($con,$query) or die(mysqli_error());
                      while($row = mysqli_fetch_array($sql)){?>
                <font size="2"><?php echo $row['product_Name']; ?></font>
                </p>
                <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                  <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                  <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                  <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                  <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
            <?php } ?>
            </form>
                <br class="clr">
              </div>
            </div>
          </li>
        </ul>
        <ul class="thumbnails">
          <li class="span4">
           <div class="thumbnailg">
             <a href="products/Duralast_Brake_Disc_Hardware_Kit.php"><img src="img/Duralast_Brake_Disc_Hardware_Kit.jpg" alt=""></a>
             <div class="caption cntr">
               <form method="post" action="cart.php">
                 <?php
                 include('conn.php');
                 $query = "SELECT * FROM product WHERE product_Id='44'";
                   $sql=mysqli_query($con,$query) or die(mysqli_error());
                       while($row = mysqli_fetch_array($sql)){?>
                 <?php echo $row['product_Name']; ?>
                 </p>
                 <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                 <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                 <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                 <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                 <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                 <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
             <?php } ?>
               </form>

               <br class="clr">
             </div>
           </div>
         </li>
         <li class="span4">
           <div class="thumbnailg">
             <a href="products/Duralast_Brake_Drum_All-In-One Kit-Rear.php"><img src="img/Duralast_Brake_Drum_All-In-One Kit-Rear.jpg" alt=""></a>
             <div class="caption cntr">
             <form method="post" action="cart.php">
               <?php
               include('conn.php');
               $query = "SELECT * FROM product WHERE product_Id='23'";
                 $sql=mysqli_query($con,$query) or die(mysqli_error());
                     while($row = mysqli_fetch_array($sql)){?>
               <?php echo $row['product_Name']; ?>
               </p>
               <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                 <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                 <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                 <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                 <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
               <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
           <?php } ?>
           </form>
               <br class="clr">
             </div>
           </div>
         </li>
         <li class="span4">
           <div class="thumbnailg">
             <a href="products/Duralast_Brake_rotor-Front.php"><img src="img/Duralast_Brake_rotor-Front.jpg" alt=""></a>
             <div class="caption cntr">
             <form method="post" action="cart.php">
               <?php
               include('conn.php');
               $query = "SELECT * FROM product WHERE product_Id='6'";
                 $sql=mysqli_query($con,$query) or die(mysqli_error());
                     while($row = mysqli_fetch_array($sql)){?>
               <font size="2"><?php echo $row['product_Name']; ?></font>
               </p>
               <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                 <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                 <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                 <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                 <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
               <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
           <?php } ?>
           </form>
               <br class="clr">
             </div>
           </div>
         </li>
       </ul>
       <ul class="thumbnails">
         <li class="span4">
          <div class="thumbnailg">
            <a href="products/Duralast_Brake_rotor-Front_1.php"><img src="img/Duralast_Brake_rotor-Front_1.jpg" alt=""></a>
            <div class="caption cntr">
              <form method="post" action="cart.php">
                <?php
                include('conn.php');
                $query = "SELECT * FROM product WHERE product_Id='7'";
                  $sql=mysqli_query($con,$query) or die(mysqli_error());
                      while($row = mysqli_fetch_array($sql)){?>
                <?php echo $row['product_Name']; ?>
                </p>
                <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
                <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
            <?php } ?>
              </form>

              <br class="clr">
            </div>
          </div>
        </li>
        <li class="span4">
          <div class="thumbnailg">
            <a href="products/Duralast_Brake_Shoes-Rear.php"><img src="img/Duralast_Brake_Shoes-Rear.jpg" alt=""></a>
            <div class="caption cntr">
            <form method="post" action="cart.php">
              <?php
              include('conn.php');
              $query = "SELECT * FROM product WHERE product_Id='19'";
                $sql=mysqli_query($con,$query) or die(mysqli_error());
                    while($row = mysqli_fetch_array($sql)){?>
              <?php echo $row['product_Name']; ?>
              </p>
              <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
              <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
          <?php } ?>
          </form>
              <br class="clr">
            </div>
          </div>
        </li>
        <li class="span4">
          <div class="thumbnailg">
            <a href="products/Duralast_Control_arm-lower.php"><img src="img/Duralast_Control_arm-lower.jpg" alt=""></a>
            <div class="caption cntr">
            <form method="post" action="cart.php">
              <?php
              include('conn.php');
              $query = "SELECT * FROM product WHERE product_Id='34'";
                $sql=mysqli_query($con,$query) or die(mysqli_error());
                    while($row = mysqli_fetch_array($sql)){?>
              <font size="2"><?php echo $row['product_Name']; ?></font>
              </p>
              <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
                <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
                <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
                <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
                <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
              <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
          <?php } ?>
          </form>
              <br class="clr">
            </div>
          </div>
        </li>
      </ul>
      <ul class="thumbnails">
        <li class="span4">
         <div class="thumbnailg">
           <a href="products/Duralast_Engine_Variable_Timing_Solenoid.php"><img src="img/Duralast_Engine_Variable_Timing_Solenoid.jpg" alt=""></a>
           <div class="caption cntr">
             <form method="post" action="cart.php">
               <?php
               include('conn.php');
               $query = "SELECT * FROM product WHERE product_Id='42'";
                 $sql=mysqli_query($con,$query) or die(mysqli_error());
                     while($row = mysqli_fetch_array($sql)){?>
               <?php echo $row['product_Name']; ?>
               </p>
               <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
               <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
               <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
               <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
               <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
               <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
           <?php } ?>
             </form>

             <br class="clr">
           </div>
         </div>
       </li>
       <li class="span4">
         <div class="thumbnailg">
           <a href="products/Duralast_Fuel_filter.php"><img src="img/Duralast_Fuel_filter.jpg" alt=""></a>
           <div class="caption cntr">
           <form method="post" action="cart.php">
             <?php
             include('conn.php');
             $query = "SELECT * FROM product WHERE product_Id='18'";
               $sql=mysqli_query($con,$query) or die(mysqli_error());
                   while($row = mysqli_fetch_array($sql)){?>
             <?php echo $row['product_Name']; ?>
             </p>
             <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
               <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
               <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
               <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
               <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
             <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
         <?php } ?>
         </form>
             <br class="clr">
           </div>
         </div>
       </li>
       <li class="span4">
         <div class="thumbnailg">
           <a href="products/Duralast_Gold_Alternator.php"><img src="img/Duralast_Gold_Alternator.jpg" alt=""></a>
           <div class="caption cntr">
           <form method="post" action="cart.php">
             <?php
             include('conn.php');
             $query = "SELECT * FROM product WHERE product_Id='9'";
               $sql=mysqli_query($con,$query) or die(mysqli_error());
                   while($row = mysqli_fetch_array($sql)){?>
             <font size="2"><?php echo $row['product_Name']; ?></font>
             </p>
             <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
               <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
               <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
               <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
               <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
             <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
         <?php } ?>
         </form>
             <br class="clr">
           </div>
         </div>
       </li>
     </ul>
     <ul class="thumbnails">
       <li class="span4">
        <div class="thumbnailg">
          <a href="products/Duralast_Gold_Wireset.php"><img src="img/Duralast_Gold_Wireset.jpg" alt=""></a>
          <div class="caption cntr">
            <form method="post" action="cart.php">
              <?php
              include('conn.php');
              $query = "SELECT * FROM product WHERE product_Id='16'";
                $sql=mysqli_query($con,$query) or die(mysqli_error());
                    while($row = mysqli_fetch_array($sql)){?>
              <?php echo $row['product_Name']; ?>
              </p>
              <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
              <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
              <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
              <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
              <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
              <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
          <?php } ?>
            </form>

            <br class="clr">
          </div>
        </div>
      </li>
      <li class="span4">
        <div class="thumbnailg">
          <a href="products/Duralast_Ignition_coil.php"><img src="img/Duralast_Ignition_coil.jpg" alt=""></a>
          <div class="caption cntr">
          <form method="post" action="cart.php">
            <?php
            include('conn.php');
            $query = "SELECT * FROM product WHERE product_Id='13'";
              $sql=mysqli_query($con,$query) or die(mysqli_error());
                  while($row = mysqli_fetch_array($sql)){?>
            <?php echo $row['product_Name']; ?>
            </p>
            <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
              <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
              <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
              <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
              <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
            <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
        <?php } ?>
        </form>
            <br class="clr">
          </div>
        </div>
      </li>
      <li class="span4">
        <div class="thumbnailg">
          <a href="products/Duralast_Ignition_Coil_2.php"><img src="img/Duralast_Ignition_Coil_2.jpg" alt=""></a>
          <div class="caption cntr">
          <form method="post" action="cart.php">
            <?php
            include('conn.php');
            $query = "SELECT * FROM product WHERE product_Id='14'";
              $sql=mysqli_query($con,$query) or die(mysqli_error());
                  while($row = mysqli_fetch_array($sql)){?>
            <font size="2"><?php echo $row['product_Name']; ?></font>
            </p>
            <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
              <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
              <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
              <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
              <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
            <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
        <?php } ?>
        </form>
            <br class="clr">
          </div>
        </div>
      </li>
    </ul>
    <ul class="thumbnails">
      <li class="span4">
       <div class="thumbnailg">
         <a href="products/Duralast_New_Master_Cylinder.php"><img src="img/Duralast_New_Master_Cylinder.jpg" alt=""></a>
         <div class="caption cntr">
           <form method="post" action="cart.php">
             <?php
             include('conn.php');
             $query = "SELECT * FROM product WHERE product_Id='21'";
               $sql=mysqli_query($con,$query) or die(mysqli_error());
                   while($row = mysqli_fetch_array($sql)){?>
             <?php echo $row['product_Name']; ?>
             </p>
             <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
             <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
             <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
             <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
             <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
             <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
         <?php } ?>
           </form>

           <br class="clr">
         </div>
       </div>
     </li>
     <li class="span4">
       <div class="thumbnailg">
         <a href="products/Duralast_Power_steering_line_hose.php"><img src="img/Duralast_Power_steering_line_hose.jpg" alt=""></a>
         <div class="caption cntr">
         <form method="post" action="cart.php">
           <?php
           include('conn.php');
           $query = "SELECT * FROM product WHERE product_Id='35'";
             $sql=mysqli_query($con,$query) or die(mysqli_error());
                 while($row = mysqli_fetch_array($sql)){?>
           <?php echo $row['product_Name']; ?>
           </p>
           <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
             <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
             <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
             <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
             <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
           <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
       <?php } ?>
       </form>
           <br class="clr">
         </div>
       </div>
     </li>
     <li class="span4">
       <div class="thumbnailg">
         <a href="products/Duralast_Rack_&_Pinion.php"><img src="img/Duralast_Rack_&_Pinion.jpg" alt=""></a>
         <div class="caption cntr">
         <form method="post" action="cart.php">
           <?php
           include('conn.php');
           $query = "SELECT * FROM product WHERE product_Id='37'";
             $sql=mysqli_query($con,$query) or die(mysqli_error());
                 while($row = mysqli_fetch_array($sql)){?>
           <font size="2"><?php echo $row['product_Name']; ?></font>
           </p>
           <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
             <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
             <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
             <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
             <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
           <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
       <?php } ?>
       </form>
           <br class="clr">
         </div>
       </div>
     </li>
   </ul>
   <ul class="thumbnails">
     <li class="span4">
      <div class="thumbnailg">
        <a href="products/Duralast_Reman_Brake_Power_Booster.php"><img src="img/Duralast_Reman_Brake_Power_Booster.jpg" alt=""></a>
        <div class="caption cntr">
          <form method="post" action="cart.php">
            <?php
            include('conn.php');
            $query = "SELECT * FROM product WHERE product_Id='24'";
              $sql=mysqli_query($con,$query) or die(mysqli_error());
                  while($row = mysqli_fetch_array($sql)){?>
            <?php echo $row['product_Name']; ?>
            </p>
            <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
            <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
            <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
            <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
            <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
            <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
        <?php } ?>
          </form>

          <br class="clr">
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnailg">
        <a href="products/Duralast_Wheel_bearing-Rear.php"><img src="img/Duralast_Wheel_bearing-Rear.jpg" alt=""></a>
        <div class="caption cntr">
        <form method="post" action="cart.php">
          <?php
          include('conn.php');
          $query = "SELECT * FROM product WHERE product_Id='33'";
            $sql=mysqli_query($con,$query) or die(mysqli_error());
                while($row = mysqli_fetch_array($sql)){?>
          <?php echo $row['product_Name']; ?>
          </p>
          <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
            <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
            <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
            <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
            <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
          <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
      <?php } ?>
      </form>
          <br class="clr">
        </div>
      </div>
    </li>
    <li class="span4">
      <div class="thumbnailg">
        <a href="products/Failsafe_Thermostat.php"><img src="img/Failsafe_Thermostat.jpg" alt=""></a>
        <div class="caption cntr">
        <form method="post" action="cart.php">
          <?php
          include('conn.php');
          $query = "SELECT * FROM product WHERE product_Id='17'";
            $sql=mysqli_query($con,$query) or die(mysqli_error());
                while($row = mysqli_fetch_array($sql)){?>
          <font size="2"><?php echo $row['product_Name']; ?></font>
          </p>
          <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
            <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
            <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
            <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
            <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
          <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
      <?php } ?>
      </form>
          <br class="clr">
        </div>
      </div>
    </li>
  </ul>
  <ul class="thumbnails">
    <li class="span4">
     <div class="thumbnailg">
       <a href="products/FDP_Remanufactured_Brake_Shoes.php"><img src="img/FDP_Remanufactured_Brake_Shoes.jpg" alt=""></a>
       <div class="caption cntr">
         <form method="post" action="cart.php">
           <?php
           include('conn.php');
           $query = "SELECT * FROM product WHERE product_Id='20'";
             $sql=mysqli_query($con,$query) or die(mysqli_error());
                 while($row = mysqli_fetch_array($sql)){?>
           <?php echo $row['product_Name']; ?>
           </p>
           <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
           <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
           <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
           <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
           <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
           <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
       <?php } ?>
         </form>

         <br class="clr">
       </div>
     </div>
   </li>
   <li class="span4">
     <div class="thumbnailg">
       <a href="products/Floor_Mat.php"><img src="img/Floor_Mat.jpg" alt=""></a>
       <div class="caption cntr">
       <form method="post" action="cart.php">
         <?php
         include('conn.php');
         $query = "SELECT * FROM product WHERE product_Id='49'";
           $sql=mysqli_query($con,$query) or die(mysqli_error());
               while($row = mysqli_fetch_array($sql)){?>
         <?php echo $row['product_Name']; ?>
         </p>
         <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
           <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
           <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
           <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
           <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
         <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
     <?php } ?>
     </form>
         <br class="clr">
       </div>
     </div>
   </li>
   <li class="span4">
     <div class="thumbnailg">
       <a href="products/Floor_Mat2.php"><img src="img/Floor_Mat2.jpg" alt=""></a>
       <div class="caption cntr">
       <form method="post" action="cart.php">
         <?php
         include('conn.php');
         $query = "SELECT * FROM product WHERE product_Id='50'";
           $sql=mysqli_query($con,$query) or die(mysqli_error());
               while($row = mysqli_fetch_array($sql)){?>
         <font size="2"><?php echo $row['product_Name']; ?></font>
         </p>
         <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
           <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
           <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
           <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
           <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
         <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
     <?php } ?>
     </form>
         <br class="clr">
       </div>
     </div>
   </li>
 </ul>
 <ul class="thumbnails">
   <li class="span4">
    <div class="thumbnailg">
      <a href="products/Gabriel_Ultra_Shock-Front.php"><img src="img/Gabriel_Ultra_Shock-Front.jpg" alt=""></a>
      <div class="caption cntr">
        <form method="post" action="cart.php">
          <?php
          include('conn.php');
          $query = "SELECT * FROM product WHERE product_Id='27'";
            $sql=mysqli_query($con,$query) or die(mysqli_error());
                while($row = mysqli_fetch_array($sql)){?>
          <?php echo $row['product_Name']; ?>
          </p>
          <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
          <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
          <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
          <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
          <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
          <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
      <?php } ?>
        </form>

        <br class="clr">
      </div>
    </div>
  </li>
  <li class="span4">
    <div class="thumbnailg">
      <a href="products/Gabriel_Ultra_Shock-Rear.php"><img src="img/Gabriel_Ultra_Shock-Rear.jpg" alt=""></a>
      <div class="caption cntr">
      <form method="post" action="cart.php">
        <?php
        include('conn.php');
        $query = "SELECT * FROM product WHERE product_Id='28'";
          $sql=mysqli_query($con,$query) or die(mysqli_error());
              while($row = mysqli_fetch_array($sql)){?>
        <?php echo $row['product_Name']; ?>
        </p>
        <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
          <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
          <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
          <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
          <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
        <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
    <?php } ?>
    </form>
        <br class="clr">
      </div>
    </div>
  </li>
  <li class="span4">
    <div class="thumbnailg">
      <a href="products/KN_High_Performance_Cabin_air_filter.php"><img src="img/KN_High_Performance_Cabin_air_filter.jpg" alt=""></a>
      <div class="caption cntr">
      <form method="post" action="cart.php">
        <?php
        include('conn.php');
        $query = "SELECT * FROM product WHERE product_Id='12'";
          $sql=mysqli_query($con,$query) or die(mysqli_error());
              while($row = mysqli_fetch_array($sql)){?>
        <font size="2"><?php echo $row['product_Name']; ?></font>
        </p>
        <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
          <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
          <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
          <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
          <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
        <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
    <?php } ?>
    </form>
        <br class="clr">
      </div>
    </div>
  </li>
</ul>
<ul class="thumbnails">
  <li class="span4">
   <div class="thumbnailg">
     <a href="products/Mobil_Oil_filter.php"><img src="img/Mobil_Oil_filter.jpg" alt=""></a>
     <div class="caption cntr">
       <form method="post" action="cart.php">
         <?php
         include('conn.php');
         $query = "SELECT * FROM product WHERE product_Id='10'";
           $sql=mysqli_query($con,$query) or die(mysqli_error());
               while($row = mysqli_fetch_array($sql)){?>
         <?php echo $row['product_Name']; ?>
         </p>
         <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
         <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
         <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
         <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
         <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
         <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
     <?php } ?>
       </form>

       <br class="clr">
     </div>
   </div>
 </li>
 <li class="span4">
   <div class="thumbnailg">
     <a href="products/MOOG_Transmission_bearing-Front.php"><img src="img/MOOG_Transmission_bearing-Front.jpg" alt=""></a>
     <div class="caption cntr">
     <form method="post" action="cart.php">
       <?php
       include('conn.php');
       $query = "SELECT * FROM product WHERE product_Id='29'";
         $sql=mysqli_query($con,$query) or die(mysqli_error());
             while($row = mysqli_fetch_array($sql)){?>
       <?php echo $row['product_Name']; ?>
       </p>
       <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
         <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
         <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
         <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
         <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
       <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
   <?php } ?>
   </form>
       <br class="clr">
     </div>
   </div>
 </li>
 <li class="span4">
   <div class="thumbnailg">
     <a href="products/Remanufactured_Master_cylinder.php"><img src="img/Remanufactured_Master_cylinder.jpg" alt=""></a>
     <div class="caption cntr">
     <form method="post" action="cart.php">
       <?php
       include('conn.php');
       $query = "SELECT * FROM product WHERE product_Id='22'";
         $sql=mysqli_query($con,$query) or die(mysqli_error());
             while($row = mysqli_fetch_array($sql)){?>
       <font size="2"><?php echo $row['product_Name']; ?></font>
       </p>
       <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
         <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
         <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
         <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
         <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
       <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
   <?php } ?>
   </form>
       <br class="clr">
     </div>
   </div>
 </li>
</ul>
<ul class="thumbnails">
  <li class="span4">
   <div class="thumbnailg">
     <a href="products/Surefire_Engine.php"><img src="img/Surefire_Engine.jpg" alt=""></a>
     <div class="caption cntr">
       <form method="post" action="cart.php">
         <?php
         include('conn.php');
         $query = "SELECT * FROM product WHERE product_Id='38'";
           $sql=mysqli_query($con,$query) or die(mysqli_error());
               while($row = mysqli_fetch_array($sql)){?>
         <?php echo $row['product_Name']; ?>
         </p>
         <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
         <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
         <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
         <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
         <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
         <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
     <?php } ?>
       </form>

       <br class="clr">
     </div>
   </div>
 </li>
 <li class="span4">
   <div class="thumbnailg">
     <a href="products/Surefire_Engine_Cylinder_Head.php"><img src="img/Surefire_Engine_Cylinder_Head.jpg" alt=""></a>
     <div class="caption cntr">
     <form method="post" action="cart.php">
       <?php
       include('conn.php');
       $query = "SELECT * FROM product WHERE product_Id='39'";
         $sql=mysqli_query($con,$query) or die(mysqli_error());
             while($row = mysqli_fetch_array($sql)){?>
       <?php echo $row['product_Name']; ?>
       </p>
       <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
         <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
         <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
         <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
         <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
       <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
   <?php } ?>
   </form>
       <br class="clr">
     </div>
   </div>
 </li>
 <li class="span4">
   <div class="thumbnailg">
     <a href="products/Timing_KitComponent_Camshaft Timing_Gear.php"><img src="img/Timing_KitComponent_Camshaft Timing_Gear .jpg" alt=""></a>
     <div class="caption cntr">
     <form method="post" action="cart.php">
       <?php
       include('conn.php');
       $query = "SELECT * FROM product WHERE product_Id='43'";
         $sql=mysqli_query($con,$query) or die(mysqli_error());
             while($row = mysqli_fetch_array($sql)){?>
       <font size="2"><?php echo $row['product_Name']; ?></font>
       </p>
       <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
         <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
         <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
         <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
         <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
       <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
   <?php } ?>
   </form>
       <br class="clr">
     </div>
   </div>
 </li>
</ul>
<ul class="thumbnails">
  <li class="span4">
   <div class="thumbnailg">
     <a href="products/Valuecraft_Ball_joint.php"><img src="img/Valuecraft_Ball_joint.jpg" alt=""></a>
     <div class="caption cntr">
       <form method="post" action="cart.php">
         <?php
         include('conn.php');
         $query = "SELECT * FROM product WHERE product_Id='36'";
           $sql=mysqli_query($con,$query) or die(mysqli_error());
               while($row = mysqli_fetch_array($sql)){?>
         <?php echo $row['product_Name']; ?>
         </p>
         <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
         <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
         <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
         <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
         <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
         <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
     <?php } ?>
       </form>

       <br class="clr">
     </div>
   </div>
 </li>
 <li class="span4">
   <div class="thumbnailg">
     <a href="products/Valuecraft_Battery.php"><img src="img/Valuecraft_Battery.jpg" alt=""></a>
     <div class="caption cntr">
     <form method="post" action="cart.php">
       <?php
       include('conn.php');
       $query = "SELECT * FROM product WHERE product_Id='5'";
         $sql=mysqli_query($con,$query) or die(mysqli_error());
             while($row = mysqli_fetch_array($sql)){?>
       <?php echo $row['product_Name']; ?>
       </p>
       <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
         <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
         <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
         <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
         <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
       <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
   <?php } ?>
   </form>
       <br class="clr">
     </div>
   </div>
 </li>
 <li class="span4">
   <div class="thumbnailg">
     <a href="products/Valuecraft-Tie-rod.php"><img src="img/Valuecraft_Tie_rod.jpg" alt=""></a>
     <div class="caption cntr">
     <form method="post" action="cart.php">
       <?php
       include('conn.php');
       $query = "SELECT * FROM product WHERE product_Id='30'";
         $sql=mysqli_query($con,$query) or die(mysqli_error());
             while($row = mysqli_fetch_array($sql)){?>
       <font size="2"><?php echo $row['product_Name']; ?></font>
       </p>
       <p><strong>Php <?php echo $row['product_Price']; ?></strong></p>
         <input type="hidden" name="product_Pic" value="<?php echo $row['product_Picture'];?>" />
         <input type="hidden" name="product_Name" value="<?php echo $row['product_Name'];?>" />
         <input type="hidden" name="product_Price" value="<?php echo $row['product_Price'];?>" />
         <input type="text" name="quantity" style="width:30%; text-align: center" placeholder="Quantity" />
       <h4><input class="shopBtn" type="submit" value="Add to Cart" /></h4>
   <?php } ?>
   </form>
       <br class="clr">
     </div>
   </div>
 </li>
</ul>

          </div>
        </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing-1.3.min.js"></script>
<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="js/cyocar.js"></script>
<!--   Core JS Files   -->
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>
<script src="js/jquery.js"></script>


<!--  Charts Plugin -->
<script src="js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="js/material-dashboard.js"></script>




</html>
