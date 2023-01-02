<?php
session_start();
$db = $_SESSION['db'];
$notice_receive = $_SESSION['user_name'];
if(!empty($_POST)){
$notice_from_add = filter_var($_POST['notice_from_add'], FILTER_SANITIZE_STRING);
$notice_noti_add = filter_var($_POST['notice_noti_add'], FILTER_SANITIZE_STRING);
$notice_type_add = filter_var($_POST['notice_type_add'], FILTER_SANITIZE_STRING);
$notice_date_add = filter_var($_POST['notice_date_add'], FILTER_SANITIZE_STRING);
$notice_description_add = filter_var($_POST['notice_description_add'], FILTER_SANITIZE_STRING);
$notice_procedure_add = filter_var($_POST['notice_procedure_add'], FILTER_SANITIZE_STRING);

if($_SESSION['db']){
include_once "../../conn/conn.php";
$sql_insert = "
INSERT INTO notice
(notice_date,notice_noti,notice_from,notice_receive,notice_type,notice_description,notice_procedure)
VALUES
('$notice_date_add','$notice_noti_add','$notice_from_add','$notice_receive','$notice_type_add','$notice_description_add','$notice_procedure_add') ;
";

if (!empty($notice_from_add) && !empty($notice_noti_add) && !empty($notice_type_add) && !empty($notice_date_add)) {
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