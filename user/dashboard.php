<!DOCTYPE html>
<html>
<head>
    <?php
    include('session.php');
?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grubbery Dashboard</title>
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
              <a class="nav-link text-warning" href="../index.php"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="../about.php"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">About Us</span></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-item text-warning" href="dashboard.php" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                My Account
              </a>
              
            </li>
             <li class="nav-item">
              <a class="nav-link text-warning" href="../contact.php"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
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
          </div>
                
          
            <div class="col-sm-3"></div>
            <?php
          $result = mysqli_query($link,"SELECT * FROM menu ");
        while($row = mysqli_fetch_array($result))
            {
                
                $status = $row["menu_status"];
                if ($status = 1) {     
                    $status_r = 'Available'; 
                } else {
                    $status_r = 'Not Available';
                }
                $cat = $row["menu_cat"];
                if ($cat = 1) {     
                    $cat= 'Meals & Cumbo'; 
                } else if ($cat = 2) {     
                    $cat='Sides & Sauces'; 
                } else {     
                    $cat= 'Drinks'; 
                }
                echo'
          <div class="col-sm-3">
          <div class="card text-center" style="width: 15rem; margin-top: -40px">
                                        <h5 class="card-header">'. $row["menu_name"] .'</h5>
                                        <img class="card-img-top" src="upload/meal/'. $row["menu_image"] .'" alt="Card image cap">
                                        <div class="card-body">
                                        <p>'. $row["menu_price"] .'</p>
                                          <a href="order.php?meal='. $row["id"] .'" class="btn btn-warning" style="margin-bottom:10px;">Order</a>
                                          
                                        </div>
                                      </div>
                                      </div>';
              }?>
                                      
                                                                            <nav> <br>
  <ul class="pagination pg-amber">
    <li class="page-item">
      <a class="page-link" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active"><a class="page-link">1</a></li>
    <li class="page-item"><a class="page-link">2</a></li>
    <li class="page-item"><a class="page-link">3</a></li>
    <li class="page-item"><a class="page-link">4</a></li>
    <li class="page-item"><a class="page-link">5</a></li>
    <li class="page-item">
      <a class="page-link" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
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