<?php
require "../connection.php";
require "../update_bursaries.php";
  session_start();

$clerks= "SELECT `firstname`, `lastname`,`email` FROM `clerks` ";
$result_appls = mysqli_query($db, $clerks);

$appls = array();
while ($user = mysqli_fetch_array($result_appls)) {
   $u =array('firstname' =>$user['0'], 'lastname' =>$user['1'],'email' =>$user['2'] );

   array_push($appls, $u);
}

$applicants_details = json_encode($appls);
echo $applicants_details;



  ?>