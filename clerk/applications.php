<?php
require "../connection.php";
  session_start();
if($_POST){
    $bursary_id = $_POST['id'];

$applications = "SELECT `applied`.`id`, `applied_bursary`, `bursary_id`, `educational_level`, `school_name`, `country`, `parent_details`, `bio`, `student`, `status`, `firstname`, `lastname`, `gender`, `regno`, `email`, `phone` FROM `applied`,`applicant` WHERE `applied`.`status` = 'requested' AND `applied`.`bursary_id`='$bursary_id' AND `applied`.`student`= `applicant`.`email`  ";  

$application_result = mysqli_query($db, $applications);

$applied = array();
while($row = mysqli_fetch_array($application_result)){
    $A =  array('id' =>$row['0'] ,'applied_bursary' =>$row['1'],'bursary_id' =>$row['2'] ,'educational_level' =>$row['3'] ,'school_name' =>$row['4'] ,'country' =>$row['5'] ,'parent_details' =>$row['6'], 'bio' =>$row['7'] ,'student' =>$row['8'] ,'status' =>$row['9'] ,'firstname' =>$row['10'] ,'lastname' =>$row['11'] ,'gender' =>$row['12'] ,'regno' =>$row['13'] ,'email' =>$row['14'] ,'phone' =>$row['15'] );
array_push($applied, $A);
}

$application_details = json_encode($applied);
echo $application_details;

}else {
    echo "No Bursary funs selected";
}


?>