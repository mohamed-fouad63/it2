<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$office_name_to = $_POST["office_name_to"];
$move_to_date = $_POST["move_to_date"];
$move_by = filter_var($_POST['move_by'], FILTER_SANITIZE_STRING);
$move_note =  filter_var($_POST['move_note'], FILTER_SANITIZE_STRING);
$move_like = $_POST["move_like"];
$dvice_num = $_POST['dvice_num'];

$sql_insert = "
INSERT INTO move_to
(num,id,dvice_name,sn,office_name_from,office_name_to,date,move_by,move_like,move_note)
SELECT
num,id,dvice_name,sn,office_name,'$office_name_to','$move_to_date','$move_by','$move_like','$move_note' FROM dvice 
WHERE num = '$dvice_num' ;
";
$sel_update_spare = "UPDATE dvice SET
note_move_to ='منقول مؤقتا الى $office_name_to',
note = ''
WHERE num ='$dvice_num' ";

$sel_update = "UPDATE dvice SET
office_name ='$office_name_to',
note = '',
note_move_to =''
WHERE num ='$dvice_num' ";
  if($_SESSION['db']){
include_once "../../conn/conn.php";
if($move_like == 'مؤقت' && !empty($dvice_num)){
  $result = $conn->prepare($sql_insert); 
  $result->execute();
  $result2 = $conn->prepare($sel_update_spare); 
  $result2->execute();
  echo "done";
}
elseif($move_like == 'عهده' && !empty($dvice_num)){
  $result = $conn->prepare($sql_insert); 
  $result->execute();
  $result2 = $conn->prepare($sel_update); 
  $result2->execute();
  echo "done";
}
  }
else{
  echo "not done";
}
} else {
   header('location:../../views');
}
    