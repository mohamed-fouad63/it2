<?php
session_start();
$db = $_SESSION['db'];
if($_SESSION['all_misin'] AND !empty($_POST)){
include_once "../../conn/conn.php";
$query_all_in_it = 'SELECT counter counter,id,it_name,misin_day,misin_date,office_name,misin_type,start_time,end_time,does,mission_table FROM misin_it_online';
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
     header('location:../views');
}
?>