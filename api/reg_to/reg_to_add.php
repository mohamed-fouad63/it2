<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
include_once "../../conn/conn.php";
$send_to_by = $_POST['send_to_by'];
$czc = strtoupper($_POST['czc']);
$hand = $_POST['hand'];
$date_reg_to = date('Y-m-d');;
$name_reg_to = $_POST['name_reg_to'];
$sub_reg_to = $_POST['sub_reg_to'];

switch ($send_to_by) {
  case 'hand':
    $barcode = $hand;
    break;
  case 'barcode':
    $barcode = $czc;
    break;
};

if(!empty($barcode) &&  !empty($date_reg_to) && !empty($name_reg_to) && !empty($sub_reg_to) ){
  $sql_insert_in_misin = "
  INSERT INTO send 
  (date,barcode,send_to,subject,send_by)
  VALUES
  ('$date_reg_to','$barcode','$name_reg_to','$sub_reg_to','$send_to_by')";
  $conn->query($sql_insert_in_misin);
  echo "done";
} else {
    echo "not done";
}
} else {
   header('location:../views');
}