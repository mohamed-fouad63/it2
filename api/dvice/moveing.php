<?php
session_start();
$db = $_SESSION['db'];
if($_SESSION['move_dvices'] AND !empty($_POST)){
include_once "../../conn/conn.php";
$query_all_in_it = "SELECT dvice_name,sn,office_name_from,office_name_to,date,move_by,move_like,move_note FROM move_to ";
$result = mysqli_query($conn, $query_all_in_it);
$row_count = mysqli_num_rows($result);
if($row_count > 0){
while($row_pc=mysqli_fetch_assoc($result)){
        $row_read_dvice_json[] = $row_pc;
    }
    echo json_encode($row_read_dvice_json,JSON_UNESCAPED_UNICODE);
}
else {
    echo json_encode(array('message' => 'no datas found'));
}
} else {
     header('location:../../views');
}
?>