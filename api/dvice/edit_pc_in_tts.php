<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$date_auth_repair = filter_var($_POST['date_auth_repair'], FILTER_SANITIZE_STRING);
$auth_repair = filter_var($_POST['auth_repair'], FILTER_SANITIZE_STRING);
$dvice_num = $_POST['dvice_num'];

if(!empty($dvice_num)){
  $sql_update = "
  UPDATE in_it SET 
  auth_repair = '$auth_repair',
  date_auth_repair ='$date_auth_repair'
  where count_in_it  = $dvice_num
";
if($_SESSION['db']){
include_once "../../conn/conn.php";
  $conn->query($sql_update);
  echo "done";
}
} else {
    echo "not done";
}
} else {
   hheader('location:../../views');
}