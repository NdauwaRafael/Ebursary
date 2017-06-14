<?php
@require "connection.php";

$select = "SELECT * FROM `bursary` WHERE `status`='Active'";
$update_bursary_result = mysqli_query($db, $select);

while($bus = mysqli_fetch_array($update_bursary_result)){
    $id = $bus['id'];
    $deadline = $bus['deadline'];
    $now = time();
    $upto = strtotime($deadline);

    if ($now > $upto) {
        $update_bursaries = "UPDATE `bursary` SET `status`='Review' WHERE `id`='$id'";
        if(mysqli_query($db, $update_bursaries)){
            
        }
    }

}


?>