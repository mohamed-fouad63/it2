<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$user_id = filter_var($_POST['user_id'], FILTER_SANITIZE_STRING);
$user_name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
$job = $_POST['job'];
if($_SESSION['db']){
include_once "../../conn/conn.php";
$sql_insert = "INSERT INTO `tbl_user`(`id`, `password`, `first_name`, `job`) VALUES ('$user_id','$user_id','$user_name','$job')";

if (!empty($user_id) || !empty($user_name)  || !empty($job)) {
 $conn->query($sql_insert);
    echo "done";
} else {
    echo "not done";
}
}
} else {
     header('location:../views');
}