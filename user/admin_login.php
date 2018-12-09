<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'connect.php';
    session_start();
    ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin Login</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<script>
.bbgg{
  //background-image: url("images/foodImg.jpg");
  background: #000;
}
</script>
<?php
         
$message = ''; 
if(isset($_POST['submit'])){
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($link,$_POST['email']);
    $mypassword = mysqli_real_escape_string($link,$_POST['pass']);    


    $sql1 = "Select * from admin where email = '$myusername' and password = '$mypassword'";
    $query = mysqli_query($link, $sql1) or die(mysql_error());
    $result = mysqli_fetch_array($query);
    $count = mysqli_num_rows($query);
    if ($count ==1 ) {
        $_SESSION['admin_user'] = $myusername;
        $_SESSION['admin_id'] = $result['id'];
        header("location: admin_dashboard.php");
    } else {
        $message = '<p class="text-warning">Invalid login credentials</p>';
       
    }}
?>
<body>
  <div class="container-fluid" style="background-image: url('images/foodImg.jpg');">
  <div class="container">
  <div class="row" > 
  <!-- Start your project here-->
  <div class="col-md-6 mb-4">
    
      
  </div>
  <!-- Grid column -->

  <div class="col-md-6 mb-4">
      <div class="card">
            <h5 class="card-header info-color white-text text-center py-4 bg-warning">
                    <strong>Admin Login </strong>
                  </h5>  
        
          <div class="card-body">
              <img src="images/logo.jpg" class="img-fluid" alt="Responsive image">
              <!-- Form register -->
             <!-- Form -->
    <form class="text-center" name="regForm" action="" enctype="multipart/form-data" method="POST" style="color: #757575;">
    <?php echo $message; ?><br>
            <!-- Email -->
            <div class="md-form">
              <input type="email" name="email" id="materialLoginFormEmail" class="form-control">
              <label for="materialLoginFormEmail">E-mail</label>
            </div>
      
            <!-- Password -->
            <div class="md-form">
              <input type="password" name="pass" id="materialLoginFormPassword" class="form-control">
              <label for="materialLoginFormPassword">Password</label>
            </div>
      
            <div class="d-flex justify-content-around">
              <div>
                <!-- Remember me -->
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                  <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                </div>
              </div>
              <div>
              </div>
            </div>
      
            <!-- Sign in button -->
            <button class="btn btn-warning btn-rounded btn-block my-4 waves-effect z-depth-0"  name="submit" type="submit">Login</button>
      
            
      
            
      
          </form>
          <!-- Form -->
          </div>
      </div>
  </div>
  <!-- Grid column -->
    <div class="col-md-6 mb-4">
      
    </div>
</div>
</div>
</div>
  <!-- /Start your project here-->

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

</html>
