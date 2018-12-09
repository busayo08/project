 <?php
     include('connect.php');
     session_start();
     
    $admin_check = $_SESSION['admin_user'];
   $admin_id = $_SESSION['admin_id'];
   $sess_sql = mysqli_query($link,"select * from admin where id= '$admin_id'");
   
   $row = mysqli_fetch_array($sess_sql,MYSQLI_ASSOC);
   
   $admin_session = $row['id'];
   $admin_email = $row['email'];
   if(!isset($_SESSION['admin_user'])){
    header("location:admin_login.php");
 }
 ?>