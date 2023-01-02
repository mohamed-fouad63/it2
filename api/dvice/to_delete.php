<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$delete_by = $_POST['delete_by'];
$delete_date = $_POST['delete_date'];
$dvice_num = $_POST['dvice_num'];

$sql_UPDATE = "
UPDATE in_it SET 
deleted_parcel ='$delete_by',
data_deleted	='$delete_date',
status = 'deleted'
WHERE count_in_it ='$dvice_num'
";

$sql_delete = "
DELETE FROM `dvice`
WHERE num = (SELECT num FROM in_it WHERE count_in_it ='$dvice_num' )
";
if($_SESSION['db']){
include_once "../../conn/conn.php";
$result = $conn->prepare($sql_UPDATE); 
$result->execute();
$result2 = $conn->prepare($sql_delete); 
$result2->execute();
echo "done";
}
}
else {
  header('location:../../views');
}
