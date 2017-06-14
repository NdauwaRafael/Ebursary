<?php
require "../connection.php";
require "../update_bursaries.php";

  if($_POST ){

  

$fname = $_POST['fname'];
$lname = $_POST['lname']; 
$gender = $_POST['gender']; 
$idno = $_POST['idno']; 
$email = $_POST['email']; 
$phone = $_POST['phone'];
$area = $_POST['area']; 
$role = $_POST['role'];
$password = $_POST['pass']; 


$check = "SELECT * FROM `clerks` WHERE `idno`='$idno' OR `email`='$email' || `phone`='$phone'";
$check_result = mysqli_query($db, $check);

if (mysqli_num_rows($check_result)>0) {
    echo "It Seems A Clerk With Email ~ $email Already Exists Thus We Could Not Complete Clerk Application Due To This Conflict. Review This Error To Countinue";
}else {


            $register = "INSERT INTO `clerks`(`id`, `firstname`, `lastname`, `gender`, `idno`, `email`, `phone`, `area`, `role`, `password`) VALUES (NULL,'$fname','$lname','$gender','$idno','$email','$phone','$area','$role','$password')";

            if (mysqli_query($db, $register)) {
                echo 'clerk registered';

            }else{
                echo "OOPS We Are Sorry But We Could Not Approve Your Registration Right Now Please Review Your Application And Try Again If The Problem Persists Contact Application IT Service For More. (info@ebursary.org) We Thank You For Your Patience";
            }  

}



  }


?>