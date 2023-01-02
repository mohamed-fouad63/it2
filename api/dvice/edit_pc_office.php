<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
  $pc_sn = filter_var($_POST['pc_sn'], FILTER_SANITIZE_STRING);
  $pc_ip = filter_var($_POST['pc_ip'], FILTER_SANITIZE_STRING);
  $pc_domian_name = filter_var($_POST['pc_domian_name'], FILTER_SANITIZE_STRING);
  $dvice_num = $_POST['dvice_num'];
  if(!empty($dvice_num)){
  include_once "../../conn/conn.php";
  $sql_update = "
  UPDATE dvice SET 
  sn = '$pc_sn',
  ip ='$pc_ip',
  pc_doman_name ='$pc_domian_name'
  where num = $dvice_num
";
  $conn->query($sql_update);
  echo "done";
} else {
    echo "not done";
}
} else {
   header('location:../../views');
}