<?php
session_start();
$db = $_SESSION['db'];
if($_SESSION['add_dvice']){
include_once "../../conn/conn.php";
$query_all_in_it = "SELECT office_name FROM all1 ORDER BY office_name ASC";
$result = mysqli_query($conn, $query_all_in_it);
while($row_pc=mysqli_fetch_assoc($result)){

        $row_read_dvice_json[] = $row_pc;
    }
    echo json_encode($row_read_dvice_json,JSON_UNESCAPED_UNICODE);
}
?>