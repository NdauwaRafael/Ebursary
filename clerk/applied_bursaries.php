<?php
require "../connection.php";
  session_start();

$bursaries= "SELECT * FROM `bursary` WHERE `status`='Review' AND `reviewer`='{$_SESSION['clerk_email']}' ORDER BY `added_on` ASC";
$result_bur = mysqli_query($db, $bursaries);

$burs = array();
while ($bursary = mysqli_fetch_array($result_bur)) {
   $b =array('id' =>$bursary['0'] , 'name' =>$bursary['1'], 'deadline' =>$bursary['2'], 'added_on' =>$bursary['3'], 'location' =>$bursary['4'],'eligible' =>$bursary['5'] );

   array_push($burs, $b);
}

$details = json_encode($burs);
echo $details;


  ?>