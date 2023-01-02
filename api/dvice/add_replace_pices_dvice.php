<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$office_name = $_POST['office_name'];
$dvice_name = $_POST['dvice_name'];
$dvice_sn = $_POST['dvice_sn'];
$dvice_num = $_POST['dvice_num'];
$date_replace_Pices = $_POST['date_replace_Pices'];

$sql_norepait__move = "DELETE FROM replace_pices_dvice WHERE `sn` = '$dvice_sn' AND `date` = '$date_replace_Pices' ";

if (!empty($_POST['replace_Pices'])) {
    if($_SESSION['db']){
    include_once "../../conn/conn.php";
    $result2 = $conn->prepare($sql_norepait__move);
    $result2->execute();
    $replace_Pices = $_POST['replace_Pices'];
    foreach ($replace_Pices as $id => $replace_type) {
        $sql_insert_replace_pices_dvice = "
            INSERT INTO replace_pices_dvice
            (id,office_name,replace_type,dvice_name,sn,date)
            VALUES
            ('$id','$office_name','$replace_type','$dvice_name','$dvice_sn','$date_replace_Pices')";
        $result = $conn->prepare($sql_insert_replace_pices_dvice);
        $result->execute();
    }
    echo 'done11';
}
} else {
    $_POST['replace_Pices'] = '';
    if($_SESSION['db']){
    include_once "../../conn/conn.php";
    $result2 = $conn->prepare($sql_norepait__move);
    $result2->execute();
    echo 'not done';
    }
}
    } else {
     header('location:../../views');
}
