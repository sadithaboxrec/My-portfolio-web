
<?php  
require_once('constants.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Foodweb</title>
  <link rel="stylesheet" href="styleadmin.css">
</head>
<body>


  <div class="login">

    <h1 class="text-center">Login</h1>
    <br><br>
              <?php 

              if(isset($_SESSION['login'])){

                echo $_SESSION['login'];
                unset($_SESSION['login']);
              }

              if(isset( $_SESSION['no-login-msg'])){
                echo  $_SESSION['no-login-msg'];
                unset( $_SESSION['no-login-msg']);
              }
              ?>

    <br><br>
    <!-- Login form starts here -->

    <form method="post" action="" class="text-center">
      USERNAME
      <input type="text" name="username"> <br><br>
      PASSWORD
      <input type="password" name="password"> <br><br>

      <input type="submit" value="login" name="submit" class="btn_primary"><br>
    </form>
     <!-- Login form end here -->
    
  </div>


</body>
</html>

<?php
      // check whether the submit button is clicked or not

      if(isset($_POST['submit'])){

      
        
        $username=$_POST['username'];
        // $password=md5($_POST['password']);
        $password=$_POST['password'];

      

      $sql = "SELECT * FROM  tbl_admin WHERE user='$username' AND password='$password'";
      $login = mysqli_query($conn, $sql);

  

      if(mysqli_num_rows($login) == 1){

          $_SESSION['login']="<div class='success-msg'>Login Successfully </div>";

          // create another session to find whether user looged in or not
          $_SESSION['user']=$username;
          header('Location: '.SITEURL.'admin/index.php');

      }else{
       
        $_SESSION['login']="<div class='error-msg'>Login error,UserName or Password not match </div>";
        header('location: '.SITEURL.'admin/login.php');
      }

    }
?>

