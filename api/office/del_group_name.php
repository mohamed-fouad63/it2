<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$post_group_name = $_POST['delgroupname'];
    if($_SESSION['db']){
    include_once "../../conn/conn.php";
$query_all_in_it = "DELETE FROM post_group WHERE post_group_name = '$post_group_name'";
$result2 = $conn->prepare($query_all_in_it);
$result2->execute();
    echo 'done';
    }
        } else {
     header('location:../views');
}
?>