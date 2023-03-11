<?php
session_start();
$db = $_SESSION['db'];
// if(!empty($_POST)){
include_once "../../../conn/conn.php";
$input_search = $_POST['input_office_search'];
// $input_search = "الغار";
$query_bitel_users = "SELECT * FROM `bitel_users` WHERE office_name = '" . $input_search . "' ";
$result_bitel_users = mysqli_query($conn, $query_bitel_users);
$row = mysqli_num_rows($result_bitel_users);

if ($row > 0) {
    while ($row_bitel_users = mysqli_fetch_assoc($result_bitel_users)) {
        $row_read_dvice_json[] = $row_bitel_users;
    }
    echo json_encode($row_read_dvice_json, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array('message' => 'no datas found'));
}
//             } else {
//      header('location:../../views');
// }