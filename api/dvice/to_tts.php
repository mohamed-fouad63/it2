<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$auth_repair = filter_var($_POST['auth_repair'], FILTER_SANITIZE_STRING);
$date_auth_repair = $_POST['date_auth_repair'];
$dvice_num = $_POST['dvice_num'];

if(!empty($dvice_num)){
  $sql_update = "
  UPDATE in_it SET 
  date_auth_repair = '$date_auth_repair',
  auth_repair ='$auth_repair',
  status ='in_tts'
  where count_in_it  = $dvice_num
";
$sql_update2 = "
UPDATE dvice SET 
note = 'بقطاع الدعم الفنى بالقاهره'
where num = (SELECT num FROM in_it WHERE count_in_it = $dvice_num)
";
if($_SESSION['db']){
include_once "../../conn/conn.php";
  $conn->query($sql_update);
  $conn->query($sql_update2);
  echo "done";
} 
}
else {
    echo "not done";
}
} else {
  header('location:../../views');
}