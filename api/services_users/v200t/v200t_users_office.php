<?php
session_start();
$db = $_SESSION['db'];
// if(!empty($_POST)){
include_once "../../../conn/conn.php";
$input_search = $_POST['input_office_search'];
// $input_search = "الغار";
$query_v200t_users = "SELECT * FROM `v200t_users` WHERE office_name = '" . $input_search . "' ";
$result_v200t_users = mysqli_query($conn, $query_v200t_users);
$row = mysqli_num_rows($result_v200t_users);

if ($row > 0) {
    while ($row_v200t_users = mysqli_fetch_assoc($result_v200t_users)) {
        $row_read_dvice_json[] = $row_v200t_users;
    }
    echo json_encode($row_read_dvice_json, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array('message' => 'no datas found'));
}
//             } else {
//      header('location:../../views');
// }