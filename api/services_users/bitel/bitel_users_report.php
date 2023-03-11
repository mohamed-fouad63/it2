<?php
session_start();
$db = $_SESSION['db'];
// if(!empty($_POST)){
include_once "../../../conn/conn.php";
$query_v200t_editting = "SELECT * FROM `bitel_users` WHERE pos_action = 'editting' ORDER BY pos_terminal ASC , stuff_action DESC , auth ASC";
$result_v200t_editting = mysqli_query($conn, $query_v200t_editting);
$row = mysqli_num_rows($result_v200t_editting);

if ($row > 0) {
    while ($row_v200t_editting = mysqli_fetch_assoc($result_v200t_editting)) {
        $row_read_dvice_json[] = $row_v200t_editting;
    }
    echo json_encode($row_read_dvice_json, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array('message' => 'no datas found'));
}
//             } else {
//      header('location:../../views');
// }