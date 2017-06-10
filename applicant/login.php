<?php
require "../connection.php";
ob_start();
session_start();
  if($_POST ){
     $email = $_POST['email'];
     $password = $_POST['password'];

     $login = "SELECT * FROM `applicant` WHERE `email`='$email' AND `password`='$password' ";
     $login_result = mysqli_query($db, $login);

     if (mysqli_num_rows($login_result)>0) {
         $_SESSION['applicant_email']=$email;
         echo "authenticated";
     }else {
         echo "You Provided Invalid Login Email or Password Thus You Could Not Be Authenticated. Verify These Details And Try Again.";
     }



  }    
?>