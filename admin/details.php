<?php
require "../connection.php";
require "../update_bursaries.php";
  session_start();

$admin_query= "SELECT * FROM `admin` WHERE `email` = '{$_SESSION['admin_email']}'";
$result_admin = mysqli_query($db, $admin_query);

$admin = array();
while ($row = mysqli_fetch_array($result_admin)) {
   $u =array('id' =>$row['0'] ,'name' =>$row['1'] , 'email' =>$row['2'] , 'password' =>$row['3']  );

   array_push($admin, $u);
}

$admin_details = json_encode($admin);
echo $admin_details;



  ?>