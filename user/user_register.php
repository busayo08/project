<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'connect.php'; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Register</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<?php
         
        $message = ''; 
        
        
        if(isset($_POST['submit'])){
            $firstname = $_POST['firstname']; 
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $pass = $_POST['confirmpassword'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
           // $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
           // Check if image file is a actual image or fake image
            if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($pass) || empty($phone) || empty($address)) {     
                $message = 'All fields are required'; }
            else if (strlen($phone) != 11) {     
                $message = 'Phone number should be 11 digits long'; 
            } 
            else if (!is_numeric($phone)) {     
                $message = 'Phone number should be numeric';  
            }
            else if ($pass != $password) {     
                    $message = 'password Mis match'; 
            } else {
                $filename = $_FILES["image"]["tmp_name"];
                $rand = mt_rand();
                $picture = 'Meal'."_".$rand."".$rand."_".'CU'.".".$imageFileType;
                if (move_uploaded_file($filename,"upload/" .$picture)) {
            $sql = "INSERT INTO user (firstname, lastname, email, password, phone, address, profile_pics)       
            VALUES ('$firstname', '$lastname', '$email', '$password', '$phone', '$address', '$picture')";   
             $result60 = mysqli_query($link, $sql) or die ("Couldn't execute sql");
             if ($result60) { 
                header("location:success.html");
             } 
            }}}
    ?>
<body>
  <div class="container-fluid" style="background-image: url('images/foodImg.jpg');">
  <div class="container">
  <div class="row" > 
  <!-- Start your project here-->

  <div class="col-md-12 mb-6">
      <!-- Material form register -->
<div class="card">

        <h5 class="card-header info-color white-text text-center py-4 bg-warning">
            <strong>Register</strong>
        </h5>
    
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
    
            <!-- Form -->
            <form class="text-center" name="regForm" action="" enctype="multipart/form-data" onsubmit="return validateForm()" method="POST" style="color: #757575;">
    
                <div class="form-row">
                        <?php echo $message; ?><br>
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                            <input type="text" name="firstname" id="materialRegisterFormFirstName" class="form-control">
                            <label for="materialRegisterFormFirstName">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                            <input type="text" name="lastname" id="materialRegisterFormLastName" class="form-control">
                            <label for="materialRegisterFormLastName">Last name</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <!-- E-mail -->
                <div class="col">
                        <div class="md-form">
                    <input type="email" name="email" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">E-mail</label>
                </div>
            </div>
    
                <div class="col">
                        <div class="md-form">
                        <input type="text" name="phone" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                        <label for="materialRegisterFormPhone">Phone number</label>
                        <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                            +234*******
                        </small>
                    </div></div>
                </div>
                <!-- Password -->
                <div class="form-row">
                <div class="col">
                        <div class="md-form">
                    <input type="password" name="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="materialRegisterFormPassword">Password</label>
                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small>
                </div>
            </div>
                <div class="col">
                        <div class="md-form">
                        <input type="password" name="confirmpassword" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword">Confirm Password</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            At least 8 characters and 1 digit
                        </small>
                    </div>
                </div>
                </div>
                <!--Message-->
            <div class="md-form">
                    <textarea type="text" name="address" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                    <label for="materialContactFormMessage">Address</label>
                </div>
                
                <div class="file-field">
                        <div class="file-path-wrapper float-left">
                                Profile picture
                        </div>
                        <div class="btn btn-warning btn-sm float-left">
                            <span>Upload Profile picture</span>
                            <input type="file" name="image"  required>
                        </div>
                        
                    </div>
    
                <!-- Sign up button -->
                <button class="btn btn-warning btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Register</button>
                click here to go back to <a href="index.html">Login</a> or <a href="/project/index.html">Home page</a>
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
        var firstname = document.regForm.firstname           
        if (firstname.value == "") 
        {               
            alert("Please input your First Name");               
            firstname.focus();               
            return false;          
        }
        var lastname = document.regForm.lastname;           
        if (lastname.value == "") 
        {               
            alert("Please input your Last Name");              
            lastname.focus();               
            return false;           
            }

             var email = document.regForm.email;           
        if (email.value == "") 
        {               
            alert("Please input your Email Address @example.com");              
            email.focus();               
            return false;           
            }
            var password = document.regForm.password;           
        if (password.value == "") 
        {               
            alert("Please input password");              
            password.focus();               
            return false;           
            }
            var confirmpassword = document.regForm.confirmpassword;           
        if (confirmpassword.value == "") 
        {               
            alert("Please input password confirm");              
            confirmpassword.focus();               
            return false;           
            }
        if (password.value != confirmpassword.value) {
            alert("Passwords do not match.");
            return false;
        }

            var phone = document.regForm.phone           
            if (phone.value == "" || isNaN(phone.value)) 
            {               
            alert("Phone number should be numeric.");               
            phone.focus();               
            return false;           
            }
            if (phone.value.length != 11) 
            {               
            alert( "Phone number should be exactly 11 digits.");               
            phone.focus();               
            return false;           
            }
            var address = document.regForm.address;           
            if (gender.value == "***Select Your Gender***") 
            {               
                alert("Please select your Gender");               
                return false;          
            }         
            }
            </script>
</body>

</html>
