
<?php
require "../connection.php";
  session_start();

$responses= "SELECT `application_response`.`id`, `application_id`, `responded_on`, `remarks_made`, `amount_awarded`, `applied_bursary`, `educational_level`, `school_name`, `country`, `status` FROM `application_response`,`applied` WHERE `application_response`.`application_id`=`applied`.`id` ";
$result_resp = mysqli_query($db, $responses);

$resp = array();
while ($response = mysqli_fetch_array($result_resp)) {
   $r =array('id' =>$response['0'] , 'application_id' =>$response['1'], 'responded_on' =>$response['2'], 'remarks_made' =>$response['3'], 'amount_awarded' =>$response['4'],'applied_bursary' =>$response['5'],'educational_level' =>$response['6'],'school_name' =>$response['7'],'country' =>$response['8'],'status' =>$response['9'] );

   array_push($resp, $r);
}

$response_details = json_encode($resp);
echo $response_details;



  ?>