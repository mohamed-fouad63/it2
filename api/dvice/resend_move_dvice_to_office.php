<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
include_once "../../conn/conn.php";
$dvice_num = $_POST['dvice_num'];
$resen_to_office_date = $_POST['resen_to_office_date'];
$resen_to_office_by = $_POST['resen_to_office_by'];

$query_all_in_it = "SELECT note_move_to FROM dvice WHERE num ='$dvice_num' ";
$result = mysqli_query($conn, $query_all_in_it);

while($row_pc=mysqli_fetch_assoc($result)){
    $note_move_to = $row_pc['note_move_to'];
    }

    $office_name_to = mb_substr($note_move_to,16,60,'utf-8');




    $UPDATE_dvice = "UPDATE dvice SET
    note_move_to =''
    WHERE num ='$dvice_num'
    ";

// $sql_insert_move_to  = "
// INSERT INTO move_to (num,id,dvice_name,sn,office_name_from,office_name_to,date,move_by,move_like,move_note,admin_move) VALUES 
// ('$_export_num','','$_export_name','$_export_sn','$Char','$_export_post_office','$_export_date','$_export_parcel','معاد للمكتب الاصلى','','$session_username')
// ";

// $sql_insert = "
// INSERT INTO move_to
// (num,id,dvice_name,sn,office_name_from,office_name_to,date,move_by,move_like,move_note)
// VALUES 
// ('$dvice_num','','','','$office_name_to','','$resen_to_office_date','$resen_to_office_by','معاد للمكتب الاصلى','','')
// ";

$sql_insert = "
INSERT INTO move_to
(num,id,dvice_name,sn,office_name_from,office_name_to,date,move_by,move_like,move_note)
SELECT
num,id,dvice_name,sn,'$office_name_to',office_name,'$resen_to_office_date','$resen_to_office_by','معاد للمكتب الاصلى','' FROM dvice 
WHERE num = '$dvice_num' ;
";

$result = $conn->prepare($UPDATE_dvice); 
$result->execute();
$result2 = $conn->prepare($sql_insert ); 
$result2->execute();
echo 'done';
} else {
   header('location:../../views');
}
?>
