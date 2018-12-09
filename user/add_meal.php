<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'admin_session.php'; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Add Meal</title>
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
<?php
         
        $message = ''; 
        
        
        if(isset($_POST['submit'])){
            $name = $_POST['name']; 
            $price = $_POST['price'];
            $cat = $_POST['cat'];
            $status= $_POST['status'];
            $date = date("Y/m/d");
            $target_dir = "upload/meal/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
           // $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
           // Check if image file is a actual image or fake image
            if (empty($name) || empty($price) || empty($cat) || empty($status)) {     
                $message = 'All fields are required'; }
           
            else if (!is_numeric($price)) {     
                $message = 'Price should be numeric';  
            } else {
                $filename = $_FILES["image"]["tmp_name"];
                $rand = mt_rand();
                $picture = 'Meal'."_".$rand."".$rand."_".'CU'.".".$imageFileType;
                if (move_uploaded_file($filename,"upload/meal/" .$picture)) {
            $sql = "INSERT INTO menu (menu_name, admin_id, menu_price, menu_cat, menu_status, date_time, menu_image)       
            VALUES ('$name', '$admin_session', '$price', '$cat', '$status', '$date', '$picture')";   
             $result60 = mysqli_query($link, $sql) or die ("Couldn't execute sql");
             if ($result60) { 
                header("location:mealsuccess1.php");
             } 
            }}}
    ?>
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
        <div class="card-body px-lg-5 pt-0">
    
            <!-- Form -->
            <form class="text-center" name="regForm" enctype="multipart/form-data" onsubmit="return validateForm()" method="POST" style="color: #757575;">
    
                <div class="form-row">
                        <?php echo $message; ?><br>
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                            <input type="text" name="name" id="materialRegisterFormFirstName" class="form-control">
                            <label for="materialRegisterFormFirstName">Meal Name</label>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                            <input type="text" name="price" id="materialRegisterFormLastName" placeholder="N" class="form-control">
                            <label for="materialRegisterFormLastName">Meal Price</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <!-- E-mail -->
                <div class="col">
                        <div class="md-form">
                        <select class="mdb-select md-form colorful-select dropdown-primary" name="cat" multiple searchable="Search here..">
                        <option value="" disabled selected>Choose Category</option>
                        <option value="1">MeaL & Cumbo</option>
                        <option value="2">Sides & Sauce</option>
                        <option value="3">Drinks</option>
                        </select>
                        <label>Select Category</label>
                        
                </div>
            </div>
            </div>
            <div class="form-row">
                <div class="col">
                        <div class="md-form">
                        <select class="mdb-select md-form colorful-select dropdown-primary" name="status" multiple searchable="Search here..">
                        <option value="" disabled selected>Choose Status</option>
                        <option value="1">Available</option>
                        <option value="2">Not Available</option>
                        </select>
                        <label>Meal Status</label>
                        
                    </div></div>
                </div>
                
                <div class="file-field">
                        <div class="file-path-wrapper float-left">
                                Meal picture
                        </div>
                        <div class="btn btn-warning btn-sm float-left">
                            <span>Upload Profile picture</span>
                            <input type="file" name="image"  required>
                        </div>
                        
                    </div>
    
                <!-- Sign up button -->
                <button class="btn btn-warning btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Add</button>
                click here to go back to <a href="/project/admin_dashboard.php">Dashboard</a>
            </form>
            <!-- Form -->
    
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
  <script type="text/javascript">
    function validateForm() {           
        var name = document.regForm.name           
        if (name.value == "") 
        {               
            alert("Please input Menu Name");               
            name.focus();               
            return false;          
        }
        var price = document.regForm.price;           
        if (price.value == "") 
        {               
            alert("Please input Price");              
            price.focus();               
            return false;           
            }

             var cat = document.regForm.cat;           
        if (cat.value == "") 
        {               
            alert("Please select category");              
            cat.focus();               
            return false;           
            }
            var status = document.regForm.status;
            if (status.value == "") 
        {               
            alert("Please select Menu status");              
            status.focus();               
            return false;           
            }
            
            // Material Select Initialization
            $(document).ready(function() {
            $('.mdb-select').materialSelect();
            });
            </script>
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
