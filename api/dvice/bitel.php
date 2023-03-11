<?php
session_start();
$db = $_SESSION['db'];
// if($_SESSION['add_dvice']){
//    $office_name = "10039";
include_once "../../conn/conn.php";
$query_all_in_it = "
SELECT d.office_name,d.dvice_name,d.sn,d.pos_terminal,d.pos_merchant,d.stuff_pos,a.money_code 
FROM dvice as d INNER JOIN all1 as a
ON d.office_name = a.office_name
WHERE d.dvice_name LIKE 'BITEL IC3600%';

";
$result = mysqli_query($conn, $query_all_in_it);
$row_count = mysqli_num_rows($result);
if ($row_count > 0) {
    while ($row_pc = mysqli_fetch_assoc($result)) {

        $row_read_dvice_json[] = $row_pc;
    }
    echo json_encode($row_read_dvice_json, JSON_UNESCAPED_UNICODE);
}
?>