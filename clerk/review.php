<?php
require "../connection.php";
require "../update_bursaries.php";   

   if ($_POST) {
       $id = $_POST['id'];
       $remarks = $_POST['remarks'];
       $option = $_POST['option'];
       $amount = $_POST['amount'];

       $response = "INSERT INTO `application_response`(`id`, `application_id`, `remarks_made`, `amount_awarded`) VALUES (NULL,'$id','$remarks','$amount')";

     $update = "UPDATE `applied` SET `status`='$option' WHERE `id`='$id'";

     if (mysqli_query($db, $update) && mysqli_query($db, $response)) {
         echo "Success";
     }else{
         echo "Unable to Modify Request At This Time. Try to review details and proceed".mysqli_error($db);
     }
       
   }

?>