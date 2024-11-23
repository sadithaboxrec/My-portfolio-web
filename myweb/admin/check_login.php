<?php

// Authorization-access control
// check whether the user logged in or not

if(!isset($_SESSION['user'])){  
  // if user session is not
   
  // user is not logged in
  // redirect to login page with login message

  $_SESSION['no-login-msg']="<div class='error-msg'>Please login to access admin panel</div>";
  header('location:'.SITEURL.'admin/login.php');

}

?>
