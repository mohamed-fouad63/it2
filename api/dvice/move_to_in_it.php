<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
include_once "../../conn/conn.php";

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
num,id,dvice_name,sn,office_name,'$office_name_to','$move_to_date','$move_by','$move_like','$move_note' FROM in_it 
WHERE count_in_it = '$dvice_num' ;
";
$sel_update_spare = "UPDATE dvice SET
note_move_to ='منقول مؤقتا الى $office_name_to',
note = ''
WHERE num = ( SELECT num from in_it WHERE count_in_it = '$dvice_num' ) ";

$sel_update = "UPDATE dvice SET
office_name ='$office_name_to',
note = '',
note_move_to =''
WHERE num = ( SELECT num from in_it WHERE count_in_it = '$dvice_num' ) ";

$sel_update_in_it = "UPDATE in_it SET
status = 'in_office',
in_it_note = CONCAT(' تم نقلها الى $office_name_to $move_like / ', in_it_note),
parcel_out_it = '$move_by',
data_out_it = '$move_to_date'
WHERE count_in_it ='$dvice_num'";

if($move_like == 'مؤقت' && !empty($dvice_num)){
  $result = $conn->prepare($sql_insert); 
  $result->execute();
  $result2 = $conn->prepare($sel_update_spare); 
  $result2->execute();
  $result3 = $conn->prepare($sel_update_in_it); 
  $result3->execute();
  echo "done";
}
elseif($move_like == 'عهده' && !empty($dvice_num)){
  $result = $conn->prepare($sql_insert); 
  $result->execute();
  $result2 = $conn->prepare($sel_update); 
  $result2->execute();
  $result3 = $conn->prepare($sel_update_in_it); 
  $result3->execute();
  echo "done";
}
else{
  echo "not done";
}
} else {
   header('location:../../views');
}
    