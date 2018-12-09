<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'admin_session.php'; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>success Meal</title>
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
  <div class="container-fluid" style="background-image: url('images/foodImg.jpg');">
  <div class="container">
  <div class="row" > 
  <!-- Start your project here-->

  <div class="col-md-6 mb-6">
      <!-- Material form register -->
<div class="card">

        <h5 class="card-header info-color white-text text-center py-4 bg-warning">
            <strong>Add New Meal</strong>
        </h5>
    
        <!--Card content-->
        <?php
        if(isset($_GET['edit'])){
        echo
            '<div class="card-body px-lg-5 pt-0" style="height:500px;">
        <h5 class="card-header white-text text-center py-4 text-warning">
            <strong>Your Menu have been edited successfully<br> To go back to Dashboard <a href="admin_dashboard.php">Click Here</a></strong>
        </h5>';
        } 
        ?>
            
            <div class="card-body px-lg-5 pt-0" style="height:500px;">
        <h5 class="card-header white-text text-center py-4 text-warning">
            <strong>Your Menu have been added successfully<br> To go back to Dashboard <a href="admin_dashboard.php">Click Here</a></strong>
        </h5>
        </div>
    
    </div>
    <!-- Material form register -->
      </div>
  </div>
  <!-- Grid column -->

</div>
</div>
</div>
  <!-- /Start your project here-->
  <footer class="page-footer font-small bg-warning">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href=""> Grubbery Meun</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  
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
