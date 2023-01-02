<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$date_from_auth_repair = filter_var($_POST['date_from_auth_repair'], FILTER_SANITIZE_STRING);
$by_from_auth_repair = filter_var($_POST['by_from_auth_repair'], FILTER_SANITIZE_STRING);
$dvice_num = $_POST['dvice_num'];
    $UPDATE_in_it = "
    UPDATE in_it SET 
    date_from_auth_repair = '$date_from_auth_repair' ,
    in_tts_note = '$by_from_auth_repair ' ,
    status = 'in_it'
    WHERE count_in_it ='$dvice_num'
    ";
$UPDATE_dvice  = "
UPDATE dvice SET 
note ='بقسم الدعم الفنى'
WHERE num = (SELECT num FROM in_it  WHERE count_in_it ='$dvice_num')
";
    if($_SESSION['db']){
    include_once "../../conn/conn.php";
$result = $conn->prepare($UPDATE_in_it); 
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
