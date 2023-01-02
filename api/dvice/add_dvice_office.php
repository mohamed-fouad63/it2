<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$office_name = filter_var($_POST['office_name'], FILTER_SANITIZE_STRING);
$dvice_name = filter_var($_POST['dvice_name'], FILTER_SANITIZE_STRING);
$dvice_sn = filter_var($_POST['dvice_sn'], FILTER_SANITIZE_STRING);

if($_SESSION['db']){
include_once "../../conn/conn.php";
$sql_insert = "
INSERT INTO dvice
(id,office_name,sn,code_inventory,dvice_type,dvice_name)
SELECT
id,'$office_name','$dvice_sn',code_inventory,dvice_type,'$dvice_name' FROM g_shrkia.dvice_type
WHERE dvice_name_new = '$dvice_name' ;
";

if (!empty($office_name) || !empty($dvice_name)) {
    $result = $conn->prepare($sql_insert);
    $result->execute();
    echo "done";
} else {
    echo "not done";
}
}
} else {
    header('location:../../views');
}