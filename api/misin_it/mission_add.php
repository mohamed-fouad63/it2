<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
include_once "../../conn/conn.php";
$counter = $_POST['counter'];
$mission_table = $_POST['mission_table'];
$misin_day = $_POST['misin_day'];
$misin_date = $_POST['misin_date'];
$it_id = $_POST['it_id'];
$it_name = $_POST['it_name'];
$office_name = $_POST['office_name'];
$misin_type = $_POST['misin_type'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$does = $_POST['does'];

$sql_insert_in_misin = "INSERT INTO misin_it (misin_day,misin_date,id,it_name,office_name,misin_type,start_time,end_time,does)
  VALUES ('$misin_day','$misin_date','$it_id','$it_name','$office_name','$misin_type','$start_time','$end_time','$does')";
  
  $sql_delet_missin_online = "DELETE FROM misin_it_online WHERE counter = $counter ";
    // $sql_del_repeat_misin = "DELETE n1 FROM misin_it_online n1, misin_it_online n2 WHERE n1.counter < n2.counter AND n1.misin_date = n2.misin_date AND n1.office_name = n2.office_name AND n1.it_name = n2.it_name";

  
  if ($conn->query($sql_insert_in_misin) === true && $conn->query($sql_delet_missin_online) === true) {
    echo "done";
} else {
    echo "not done";
}
            } else {
   header('location:../views');
}