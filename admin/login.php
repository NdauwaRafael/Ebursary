<?php
require "../connection.php";
require "../update_bursaries.php";
ob_start();
session_start();

if ($_POST) {

    $email = $_POST['email'];
    $password = $_POST['password'];

$login_admin = "SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password' ";
$result_admin = mysqli_query($db, $login_admin);

if(mysqli_num_rows($result_admin)>0){
    $_SESSION['admin_email'] = $email;
    echo "admin loggedin";
}else
{
    echo "You Provided Invalid Login Username And Password Combination";
}

}

?>