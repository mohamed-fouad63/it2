<?php
session_start();
$db = $_SESSION['db'];
$notice_receive = $_SESSION['user_name'];
if(!empty($_POST)){
$notice_from_edit = filter_var($_POST['notice_from_edit'], FILTER_SANITIZE_STRING);
$notice_noti_edit = filter_var($_POST['notice_noti_edit'], FILTER_SANITIZE_STRING);
$notice_type_edit = filter_var($_POST['notice_type_edit'], FILTER_SANITIZE_STRING);
$notice_date_edit = filter_var($_POST['notice_date_edit'], FILTER_SANITIZE_STRING);
$notice_description_edit = filter_var($_POST['notice_description_edit'], FILTER_SANITIZE_STRING);
$notice_procedure_edit = filter_var($_POST['notice_procedure_edit'], FILTER_SANITIZE_STRING);
$notice_id = $_POST['notice_id'];

if($_SESSION['db']){
include_once "../../conn/conn.php";
$sql_edit = "
UPDATE notice SET
notice_date = '$notice_date_edit',
notice_noti = '$notice_noti_edit',
notice_from = '$notice_from_edit',
notice_receive = '$notice_receive',
notice_type = '$notice_type_edit',
notice_description = '$notice_description_edit',
notice_procedure = '$notice_procedure_edit'
WHERE notice_id = '$notice_id'
";

if (!empty($notice_from_edit) && !empty($notice_noti_edit) && !empty($notice_type_edit) && !empty($notice_date_edit)) {
    $result = $conn->prepare($sql_edit);
    $result->execute();
    echo "done";
} else {
    echo "not done";
}
}
} else {
    header('location:../../views');
}