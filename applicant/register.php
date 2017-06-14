<?php
require "../connection.php";
require "../update_bursaries.php";
session_start();
  if($_POST ){

  

$fname = $_POST['fname'];
$lname = $_POST['lname']; 
$gender = $_POST['gender']; 
$regno = $_POST['regno']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$password = $_POST['pass']; 


$check = "SELECT * FROM `applicant` WHERE `email`='$email'";
$check_result = mysqli_query($db, $check);

if (mysqli_num_rows($check_result)>0) {
    echo "It Seems A User With Email ~ $email Already Exists Thus We Could Not Complete Your Application Due To This Conflict";
}else {




            $register = "INSERT INTO `applicant`(`id`, `firstname`, `lastname`, `gender`, `regno`, `email`, `phone`, `password`) VALUES (NULL,'$fname','$lname','$gender','$regno','$email','$phone','$password')";

            if (mysqli_query($db, $register)) {
                $_SESSION['applicant_email']=$email;
                echo 'registered';

            }else{
                echo "OOPS We Are Sorry But We Could Not Approve Your Registration Right Now Please Review Your Application And Try Again If The Problem Persists Contact Application Service For More. (info@ebursary.org) We Thank You For Your Patience";
            }  

}



  }


?>