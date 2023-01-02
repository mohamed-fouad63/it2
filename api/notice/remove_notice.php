<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$notice_id = $_POST['notice_id'];

if($_SESSION['db']){
include_once "../../conn/conn.php";
$sql_insert = "
DELETE FROM `notice` WHERE `notice`.`notice_id` = '$notice_id'
";

if (!empty($notice_id)) {
    $result = $conn->prepare($sql_insert);
    $result->execute();
    echo "done";
} else {
    echo "not done";
}
}
} else {
    header('location:../../views');
}