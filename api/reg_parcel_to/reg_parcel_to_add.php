<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
include_once "../../conn/conn.php";

$send_to_by = $_POST['send_to_by'];
$barcode = $_POST['czc'];
// $hand = $_POST['hand'];
$date_reg_parcel_to = date('Y-m-d');;
$name_reg_parcel_to = $_POST['name_reg_parcel_to'];
$sub_reg_parcel_to = $_POST['sub_reg_parcel_to'];

// switch ($send_to_by) {
//   case 'hand':
//     $barcode = $hand;
//     break;
//   case 'barcode':
//     $barcode = $czc;
//     break;
// };

if(!empty($barcode) &&  !empty($date_reg_parcel_to) && !empty($name_reg_parcel_to) && !empty($sub_reg_parcel_to) ){
  $sql_insert_in_misin = "
  INSERT INTO parcel_send 
  (date,barcode,send_to,subject)
  VALUES
  ('$date_reg_parcel_to','$barcode','$name_reg_parcel_to','$sub_reg_parcel_to')";
  $conn->query($sql_insert_in_misin);
  echo "done";
} else {
    echo "not done";
}
} else {
   header('location:../views');
}