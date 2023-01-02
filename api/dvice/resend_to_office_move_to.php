<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$resen_to_office_date = filter_var($_POST['resen_to_office_date'], FILTER_SANITIZE_STRING);
$resen_to_office_by = filter_var($_POST['resen_to_office_by'], FILTER_SANITIZE_STRING);
$note_move_to = filter_var($_POST['note_move_to'], FILTER_SANITIZE_STRING);
$dvice_num = $_POST['divce_num'];
$dvice_sn = $_POST['dvice_sn'];
$dvice_name = $_POST['dvice_name'];
$office_name = $_POST['office_name'];
$Char = mb_substr($note_move_to,16,60,'utf-8');
    $UPDATE_move_to = "
 INSERT INTO move_to (num,id,dvice_name,sn,office_name_from,office_name_to,date,move_by,move_like) VALUES 
('$dvice_num','','$dvice_name','$dvice_sn','$Char','$office_name','$resen_to_office_date','$resen_to_office_by','معاد للمكتب الاصلى')";
$UPDATE_dvice  = "
UPDATE dvice SET
note_move_to =''
WHERE num ='$dvice_num'
";
    if($_SESSION['db']){
    include_once "../../conn/conn.php";
$result = $conn->prepare($UPDATE_move_to); 
$result->execute();
$result2 = $conn->prepare($UPDATE_dvice ); 
$result2->execute();
echo 'done';
}
}
else {
   header('location:../../views');
}
?>
