<?php
require "../connection.php";
require "../update_bursaries.php";

if ($_POST) {
    $name = $_POST['name'];
    $eligible = $_POST['eligible'];
    $location = $_POST['location'];
    $deadline = $_POST['deadline'];
    $reviewer = $_POST['reviewer'];

    $add = "INSERT INTO `bursary`(`id`, `name`, `deadline`, `location`, `eligible`, `admin`,`reviewer`) VALUES (NULL,'$name','$deadline','$location','$eligible','{$_SESSION['admin_email']}','$reviewer')";

if (mysqli_query($db, $add)) {
    echo "Bursary Added Successfully Success";
}else {
    echo "Sorry We Could Not Complete Your Request Right Now Please Try Again Or try To Review Your Details For Conflict. Or Contact Application Control";
}    
}

?>