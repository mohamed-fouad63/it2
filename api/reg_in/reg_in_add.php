<?php
session_start();
$db = $_SESSION['db'];
// if(!empty($_POST)){
include_once "../../conn/conn.php";

$send_to_by = $_POST['send_to_by'];
$czc = $_POST['czc'];
$hand = $_POST['hand'];
$date_reg_in = date('Y-m-d');;
$name_reg_in = $_POST['name_reg_in'];
$sub_reg_in = $_POST['sub_reg_in'];

switch ($send_to_by) {
  case 'hand':
    $barcode = $hand;
    break;
  case 'barcode':
    $barcode = $czc;
    break;
};

if(!empty($barcode) &&  !empty($date_reg_in) && !empty($name_reg_in) && !empty($sub_reg_in) ){
  $sql_insert_in_misin = "
  INSERT INTO inbox 
  (date,barcode,send_to,subject,inbox_by)
  VALUES
  ('$date_reg_in','$barcode','$name_reg_in','$sub_reg_in','$send_to_by')";
  $conn->query($sql_insert_in_misin);
  echo "done";
} else {
    echo "not done";
}
// } else {
//    header('location:../views');
// }