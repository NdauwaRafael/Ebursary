<?php
require "../connection.php";
  session_start();

$applicant= "SELECT * FROM `applicant` WHERE `email` = '{$_SESSION['applicant_email']}'";
$result_appl = mysqli_query($db, $applicant);

$appl = array();
while ($user = mysqli_fetch_array($result_appl)) {
   $u =array('id' =>$user['0'] , 'firstname' =>$user['1'], 'lastname' =>$user['2'], 'gender' =>$user['3'], 'idno' =>$user['4'],'email' =>$user['5'],'phone' =>$user['6'] );

   array_push($appl, $u);
}

$applicant_details = json_encode($appl);
echo $applicant_details;



  ?>