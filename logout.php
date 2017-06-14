<?php
session_start();

if ($_POST) {
    $request = $_POST['action'];
   
   if ($request=='clerk') {
     unset($_SESSION['clerk_email']);
       echo "logged out";

   } 


   if ($request=='admin') {
       echo "logged out";
       unset($_SESSION['admin_email']);
   }

   if ($request=='applicant') {
       echo "logged out";
       unset($_SESSION['applicant_email']);
   }   
   
   session_destroy();

    
}


?>