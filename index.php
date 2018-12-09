<!DOCTYPE html>
<html>
<head>
    <?php
include('user/connect.php');
?>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grubbery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/mdb.css" />
    <link rel="stylesheet" href="css/mdb.lite.css" />
    <link rel="stylesheet" href="css/mdb.lite.min.css" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="stylesheet" href="css/modules/animations-extended.css" />
    <link rel="stylesheet" href="css/modules/animations-extended.min.css" />
    <script src="main.js"></script>
</head>
<script>
    .nav-gap{
        margin-top:100px;
    }
   
</script>
<body>
    <header>
        <div class="container-fluid fixed-top">
            <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar bg-warning" style="height: 15px; color: white;">
             
              </nav>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar ">
          <!-- SideNav slide-out button -->
          <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
          </div>
          <!-- Breadcrumb-->
          <div class="breadcrumb-dn mr-auto">
              <img src="images/logo.jpg" class="float-left" alt="...">
          </div>
          <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
              <a class="nav-link text-warning" href="index.php"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="about.php"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">About Us</span></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-item text-warning" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                My Account
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item text-warning" href="user/index.php">Login</a>
                <a class="dropdown-item text-warning" href="user/user_register.php">Register</a>
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link text-warning" href="contact.php"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
          </ul>
        </nav>
        </div>
        <!-- /.Navbar -->
      </header>
    <section>
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <br><br><br><br><br>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/banner.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
    <h3>Login/Register</h3>
    <p>to place order for your Meal Meun</p>
    <a href="user/index.php" class="btn btn-warning" style="margin-bottom:10px;">Login</a>
  </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/banner2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                    <h3>Login/Register</h3>
                    <p>to place order for your Meal Meun</p>
                    <a href="user/index.php" class="btn btn-warning" style="margin-bottom:10px;">Login</a>
                  </div>
            
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/banner3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                    <h3>Login/Register</h3>
                    <p>To place order for your Meal Meun</p>
                    <a href="user/index.php" class="btn btn-warning" style="margin-bottom:10px;">Login</a>
                  </div>
          </div>
          <div class="carousel-item">
                <img class="d-block w-100" src="images/foodImg.jpg" alt="fourth slide">
                <div class="carousel-caption d-none d-md-block">
                        <h3>Login/Register</h3>
                        <p>To place order for your Meal Meun</p>
                        <a href="user/index.php" class="btn btn-warning" style="margin-bottom:10px;">Login</a>
                      </div>
              </div>
              <div class="carousel-item">
                    <img class="d-block w-100" src="images/banner4.jpg" alt="fifth slide">
                    <div class="carousel-caption d-none d-md-block">
                            <h3>Login/Register</h3>
                            <p>To place order for your Meal Meun</p>
                            <a href="user/index.php" class="btn btn-warning" style="margin-bottom:10px;">Login</a>
                          </div>
                  </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    
      <div class="row">
            <div class="col-md-6">
            <div class="card">
                    <h5 class="card-header">Welcome to Grubbery Menu</h5>
                    <div class="card-body">
                      <p class="card-text"><br><b>Grubbery Menu is one of Sundry Foods’ restaurant brands, operating in the 
                          Quick Service Restaurant (QSR) segment, the brand has established itself as a market leader and one of 
                          the fastest growing restaurant brands in the country with currently  across Nigeria and more to come.
</b><br><br>
                            <br><b>Grubbery Menu caters to the unique preference of the general populace in this part of sub-saharan Africa 
                            for their local dishes.</b> 
                            <br><br><b>Our unique menu consists of select popular contemporary and Nigerian offerings.
                            The Grubbery Menu brand was born out the quest to satisfy both local and continental food cravings of our 
                            people. We deliver fresh, hot and mouth-watering meals, pastries, sandwiches and beverages to thousands 
                            of customers in the finest environment each day. </b>
                            <br><br><b>Our restaurants stand out for their bright colours and 
                            lovely ambience inviting you to dine-in or grab-and-go with the best quality meals.</b></p>
                            <br>
                    </div>
            </div>
      </div>
      <?php
      $result = mysqli_query($link,"SELECT * FROM menu LIMIT 2");
        while($row = mysqli_fetch_array($result))
            {
                
                $id = $row["menu_status"];
                
                $cat = $row["menu_cat"];
                if ($cat = 1) {     
                    $cat= 'Meals & Cumbo'; 
                } else if ($cat = 2) {     
                    $cat='Sides & Sauces'; 
                } else {     
                    $cat= 'Drinks'; 
                }
            echo
            '<div class="col-sm-3">
            <div class="card text-center" style="width: 15rem; ">
                    <h5 class="card-header">'. $row["menu_name"] .'</h5>
                    <img class="card-img-top" src="user/upload/meal/'. $row["menu_image"] .'" alt="Card image cap">
                    <div class="card-body">
                    <p>'. $row["menu_price"] .'</p>
                      <a href="user/order.php?meal='. $row["id"] .'" class="btn btn-warning" style="margin-bottom:10px;">order</a>
                      
                    </div>
                  </div>
                  </div>
                  ';
                  
                }
            ?>
            <div class="col-sm-6"></div>
            <div class="col-sm-3 item-center" style="margin-right:50px;">
                  <a href="user/dashboard.php" class="btn btn-warning " style="margin-right:50px;">View More Meal</a>
                </div>
                     
      </div><br><br>
      <div class="row">
          <hr>
      <div class="col-md-4">
            <div class="card text-center" style="width: 22rem;">
                    <img class="card-img-top" src="images/how-it-works-1.svg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Select your Meal Menu</h5>
                      <p class="card-text">Browse browser through our site, we deliver near you.</p>
                      
                    </div>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="card text-center" style="width: 22rem;">
                        <img class="card-img-top" src="images/how-it-works-2.svg" alt="Card image cap">
                        <div class="card-body">
                          <br><br>
                          <h5 class="card-title">Receive it at your doorstep</h5>
                          <p class="card-text">Your Menu meal order will be delivered to you in no time.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 22rem;">
                                <img class="card-img-top" src="images/how-it-works-3.svg" alt="Card image cap">
                                <div class="card-body">
                                    <br><br>
                                <h5 class="card-title">Enjoy your order</h5>
                                <p class="card-text">Enjoy your food items.</p>
                                </div>
                            </div>
                        </div>
      </div>


    </section>
    <footer class="page-footer font-small bg-warning">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href=""> Grubbery Meun</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->
</body>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.js"></script>
<script src="js/mdb.min.js"></script>
<script src="js/modules/chart.js"></script>
<script src="js/modules/enhanced-modals.js"></script>
<script src="js/modules/forms-free.js"></script>
<script src="js/modules/jquery.easing.js"></script>
<script src="js/modules/scrolling-navbar.js"></script>
<script src="js/modules/velocity.js"></script>
<script src="js/modules/velocity.min.js"></script>
<script src="js/modules/waves.js"></script>
<script src="js/modules/wow.js"></script>
<script src="js/modules/velocity.min.js"></script>
</html>