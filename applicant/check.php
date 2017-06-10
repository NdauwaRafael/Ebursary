<?php
require "../connection.php";
ob_start();
  session_start();


  echo $_SESSION['applicant_email'];
/*  if (isset($_SESSION['applicant_email']) && !empty($_SESSION['applicant_email'])) {
    echo "1";
  }else {
    echo "0";
  }*/
 ?>