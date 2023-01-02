<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$resen_to_office_date = filter_var($_POST['resen_to_office_date'], FILTER_SANITIZE_STRING);
$resen_to_office_by = filter_var($_POST['resen_to_office_by'], FILTER_SANITIZE_STRING);
$dvice_num = $_POST['dvice_num'];
    $UPDATE_in_it = "
    UPDATE in_it SET 
    parcel_out_it ='$resen_to_office_by',
    data_out_it='$resen_to_office_date',
    status = 'in_office'
    WHERE count_in_it ='$dvice_num'
    ";
$UPDATE_dvice  = "
UPDATE dvice SET 
note =''
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
