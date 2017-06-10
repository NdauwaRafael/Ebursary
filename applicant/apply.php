<?php
ob_start();
session_start();
require "../connection.php";

if ($_POST) {

    $applied_bursary = $_POST['applied_bursary'];
    $education_level = $_POST['education_level'];
    $school_name = $_POST['school_name'];
    $county = $_POST['county'];
    $parent_details = $_POST['parent_details'];
    $bio = $_POST['bio'];
    $bursary_id = $_POST['bursary_id'];

    $apply = "INSERT INTO `applied`(`id`, `applied_bursary`,`bursary_id`, `educational_level`, `school_name`, `country`, `parent_details`, `bio`, `applicant`) VALUES (NULL,'$applied_bursary','$bursary_id','$education_level','$school_name','$county','$parent_details','$bio','{$_SESSION['applicant_email']}')";

if(mysqli_query($db, $apply)){
    echo "Applied";
}else {
    echo "Failed to Apply Bursary";
}


}
?>