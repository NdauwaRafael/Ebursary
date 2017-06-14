<?php
require "../connection.php";
require "../update_bursaries.php";
  session_start();

$applicant= "SELECT * FROM `clerks` WHERE `email`='{ $_SESSION['clerk_email']}' ";
$result_appl = mysqli_query($db, $applicant);

$appl = array();
while ($user = mysqli_fetch_array($result_appl)) {
   $u =array('id' =>$user['0'] , 'firstname' =>$user['1'], 'lastname' =>$user['2'], 'gender' =>$user['3'], 'idno' =>$user['4'],'email' =>$user['5'],'phone' =>$user['6'],'area'=>$user['7'],'role'=>$user['8']  );

   array_push($appl, $u);
}

$applicant_details = json_encode($appl);
echo $applicant_details;



  ?>