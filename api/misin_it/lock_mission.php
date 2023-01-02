<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
include_once "../../conn/conn.php";
$it_id = $_POST['it_id'];
$it_name = $_POST['it_name'];
$month_missin = $_POST['month_missin'];
 
$sql_insert_in_misin = "UPDATE misin_it SET mission_status = '1' WHERE id = '$it_id' AND misin_date LIKE '$month_missin%' ";

  if ($conn->query($sql_insert_in_misin) === true) {
    
    echo "done";
} else {
    echo "not done";
}
            } else {
   header('location:../views');
}