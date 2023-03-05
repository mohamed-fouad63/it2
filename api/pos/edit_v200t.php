<?php
session_start();
$db = $_SESSION['db'];
$sn = filter_var($_POST['sn'], FILTER_SANITIZE_STRING);
$pos_terminal = filter_var($_POST['pos_terminal'], FILTER_SANITIZE_STRING);
$pos_merchant = filter_var($_POST['pos_merchant'], FILTER_SANITIZE_STRING);
$stuff_pos = filter_var($_POST['stuff_pos'], FILTER_SANITIZE_STRING);
if (!empty($_POST) && $_SESSION['db']) {
    if (
        filter_var($pos_terminal, FILTER_VALIDATE_INT) == true &&
        filter_var($pos_merchant, FILTER_VALIDATE_INT) == true &&
        filter_var($stuff_pos, FILTER_VALIDATE_INT) == true
    ) {
        include_once "../../conn/conn.php";
        $sql_update = "UPDATE dvice SET
            pos_terminal = '$pos_terminal',
            pos_merchant = '$pos_merchant',
            stuff_pos= '$stuff_pos'
            where sn = '$sn' ";
        $conn->query($sql_update);
        echo 'done';
    } else {
        echo 'تحقق من المدخلات ارقام';
    }
} else {
    header('location:../../views');
}
?>