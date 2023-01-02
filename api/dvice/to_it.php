<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$to_it_by = filter_var($_POST['to_it_by'], FILTER_SANITIZE_STRING);
$to_it_date = $_POST["to_it_date"];
$damage = filter_var($_POST['damage'], FILTER_SANITIZE_STRING);
$in_it_note = filter_var($_POST['in_it_note'], FILTER_SANITIZE_STRING);
$dvice_num = $_POST['dvice_num'];
$sql_insert = "
INSERT INTO in_it
(num,office_name,id,dvice_name,sn,dvice_type,date_in_it,parcel_in_it,damage,in_it_note,status)
SELECT
num,office_name,id,dvice_name,sn,dvice_type,'$to_it_date','$to_it_by','$damage','$in_it_note','in_it' FROM dvice 
WHERE num = '$dvice_num' ;
";
$sel_update = "UPDATE dvice set note = 'بقسم الدعم الفنى', note_move_to = '' WHERE num = '$dvice_num';";
if(!empty($dvice_num)){
  if($_SESSION['db']){
include_once "../../conn/conn.php";
  $result = $conn->prepare($sql_insert); 
  $result->execute();
  $result2 = $conn->prepare($sel_update); 
  $result2->execute();
  echo "done";
}
} else {
    echo "not done";
}
} else {
   header('location:../../views');
}