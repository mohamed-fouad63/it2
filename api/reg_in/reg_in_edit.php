<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
include_once "../../conn/conn.php";

$send_to_by = $_POST['send_to_by'];
$czc = $_POST['czc'];
$hand = $_POST['hand'];
$date_reg_in = date('Y-m-d');;
$name_reg_in = $_POST['name_reg_in'];
$sub_reg_in = $_POST['sub_reg_in'];
$edit_reg_in_btn = $_POST['edit_reg_in_btn'];

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
  UPDATE inbox SET 
barcode = '$barcode',
send_to ='$name_reg_in',
subject ='$sub_reg_in',
inbox_by ='$send_to_by'
WHERE id ='$edit_reg_in_btn'
";
  $conn->query($sql_insert_in_misin);
  echo "done";
} else {
    echo "not done";
}
} else {
   header('location:../views');
}