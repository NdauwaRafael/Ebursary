<?php
require "../connection.php";

if ($_POST) {
    $name = $_POST['name'];
    $eligible = $_POST['eligible'];
    $location = $_POST['location'];
    $deadline = $_POST['deadline'];

    $add = "INSERT INTO `bursary`(`id`, `name`, `deadline`, `location`, `eligible`, `admin`) VALUES (NULL,'$name','$deadline','$location','$eligible','admin')";

if (mysqli_query($db, $add)) {
    echo "Bursary Added Successfully Success";
}else {
    echo "Sorry We Could Not Complete Your Request Right Now Please Try Again Or try To Review Your Details For Conflict. Or Contact Application Control";
}    
}

?>