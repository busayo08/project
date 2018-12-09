<!DOCTYPE html>
<html>
<head>
    <?php
    include('session.php');
?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grubbery Profile</title>
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
              <a class="nav-link text-warning" href="/grubbery/index.php"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="/grubbery/about.php"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">About Us</span></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-item text-warning" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                My Account
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item text-warning" href="#">Login</a>
                <a class="dropdown-item text-warning" href="#">Register</a>
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link text-warning" href="/grubbery/contact.php"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
          </ul>
        </nav>
        </div>
        <!-- /.Navbar -->
      </header>
    <section>
        <div class="row">
         
        <div class="col-3 ">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <br><br><br><br><br><br> <a class="nav-link active bg-warning" id="v-pills-home-tab" data-toggle="pill" href="dashboard.php" role="tab"
                  aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
                <a class="nav-link text-warning" id="v-pills-profile-tab" data-toggle="pill" href="profile.php" role="tab"
                  aria-controls="v-pills-profile" aria-selected="false">My profile</a>
                <a class="nav-link text-warning" id="v-pills-messages-tab" data-toggle="pill" href="view_cart.php" role="tab"
                  aria-controls="v-pills-messages" aria-selected="false">View Cart</a>
                <a class="nav-link text-warning" id="v-pills-settings-tab" data-toggle="pill" href="orders.php" role="tab"
                  aria-controls="v-pills-settings" aria-selected="false">My orders</a>
                  <a class="nav-link text-warning" id="v-pills-settings-tab" data-toggle="pill" href="logout.php" role="tab"
                  aria-controls="v-pills-settings" aria-selected="false">Logout</a>
              </div>
            </div>
               
            <div class="col-sm-9">
                <br><br><br><br><br><br>
                <h1>Welcome! <?php echo $login_firstname; ?></h1>
            <h5 class="card-header">My Profile</h5>
          </div>
          <div class="col-sm-3"></div>
          <div class="col-sm-3">
          <div class="card text-center" style="width: 15rem; margin-top: -40px">
                                       
                                        <img class="card-img-top" src="upload/<?php echo $login_image;?>" alt="Card image cap">
                                        
                                      </div>
                                      </div>
                                      <div class="col-sm-4">
                                        <p><b>Name: <?php echo $login_firstname." ".$login_Lastname; ?></b></p>
                                        <p><b>Phone: <?php echo $login_phone; ?></b></p>
                                        <p><b>Email: <?php echo $login_session; ?></b></p>
                                        <p><b>Billing Address: <?php echo $login_Address; ?></b></p>
                                        <a href="edit_profile.php" class="btn btn-warning" style="margin-bottom:10px;">Edit My Profile</a>
                                          </div>
                                       
        </div>
    </section>
    <!-- Footer -->
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