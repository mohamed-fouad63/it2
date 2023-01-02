<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$damage = filter_var($_POST['damage'], FILTER_SANITIZE_STRING);
$date_in_it = filter_var($_POST['date_in_it'], FILTER_SANITIZE_STRING);
$parcel_in_it = filter_var($_POST['parcel_in_it'], FILTER_SANITIZE_STRING);
$in_it_note = filter_var($_POST['in_it_note'], FILTER_SANITIZE_STRING);
$dvice_num = $_POST['dvice_num'];

if(!empty($dvice_num)){
  $sql_update = "
  UPDATE in_it SET 
  damage = '$damage',
  date_in_it ='$date_in_it',
  parcel_in_it ='$parcel_in_it',
  in_it_note ='$in_it_note'
  where count_in_it  = $dvice_num
";
if($_SESSION['db']){
include_once "../../conn/conn.php";
  $conn->query($sql_update);
  echo "done";
}
}
else {
    echo "not done";
}
} else {
   header('location:../../views');
}