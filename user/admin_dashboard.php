<!DOCTYPE html>
<html>
<head>
    <?php
    include('admin_session.php');
?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grubbery Admin Dashboard</title>
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
              <a class="nav-link text-warning" href="../index.php"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning" href="../about.php"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">About Us</span></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-item text-warning" href="admin_dashboard.php" id="navbarDropdownMenuLink" data-toggle="dropdown"
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
                  <br><br><br><br><br><br> <a class="nav-link active bg-warning" id="v-pills-home-tab" data-toggle="pill" href="admin_dashboard.php" role="tab"
                  aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
                <a class="nav-link text-warning" id="v-pills-profile-tab" data-toggle="pill" href="add_admin.php" role="tab"
                  aria-controls="v-pills-profile" aria-selected="false">Add New Admin</a>
                <a class="nav-link text-warning" id="v-pills-settings-tab" data-toggle="pill" href="view_orders.php" role="tab"
                  aria-controls="v-pills-settings" aria-selected="false">View Customer orders</a>
                  <a class="nav-link text-warning" id="v-pills-settings-tab" data-toggle="pill" href="logout.php" role="tab"
                  aria-controls="v-pills-settings" aria-selected="false">Logout</a>
              </div>
            </div>
               
            <div class="col-sm-9">
                <br><br><br><br><br><br>
                <h1></h1>
            <h5 class="card-header">Welcome! <?php echo $admin_email; ?></h5>
            <!-- Editable table -->
<div class="card">


  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Menu List</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-warning"><i class="fa fa-plus fa-2x"
            aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
      <span class="table-remove"><a href="add_meal.php"><button type="button" class="btn btn-warning btn-rounded btn-sm my-0">Add New Menu</button></a></span>
        <tr>
          <th class="text-center">S/N</th>
          <th class="text-center">Menu Name</th>
          <th class="text-center">price</th>
          <th class="text-center">Menu status</th>
          <th class="text-center">Menu category</th>
          <th class="text-center"></th>
        </tr>
        <?php 
        $result = mysqli_query($link,"SELECT * FROM menu");
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

        echo '<tr>
          <td class="pt-3-half" contenteditable="true">1</td>
          <td class="pt-3-half" contenteditable="true">'. $row["menu_name"] .'</td>
          <td class="pt-3-half" contenteditable="true">N'. $row["menu_price"] .'</td>
          <td class="pt-3-half" contenteditable="true">'. $status_r .'</td>
          <td class="pt-3-half" contenteditable="true">'. $cat .'</td>
          
          <td>
            <span class="table-remove"><a href="edit_meal.php?edit='. $row["id"] .'"><button type="button" class="btn btn-warning btn-rounded btn-sm my-0">Edit</button></a></span>
            <span class="table-remove"><a href="view_meal.php?view='. $row["id"] .'"><button type="button" class="btn btn-warning btn-rounded btn-sm my-0">View</button></a></span>
            <span class="table-remove"><a href="delete.php?delete='. $row["id"] .'"><button type="button" name="delete" data-toggle="modal" data-target="#confirm-delete"class="btn btn-warning btn-rounded btn-sm my-0">Delete</button></a></span>
          </td>
        </tr>';
        }   
        mysqli_close($link);
        ?>
      </table>
     
    </div>
  </div>
</div>
<!-- Editable table -->

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
<script>

</html>