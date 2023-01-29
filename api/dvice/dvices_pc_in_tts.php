<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_GET)){
include_once "../../conn/conn.php";
$dvice_id = $_GET['dvice_id'];
$query_all_in_it = 'SELECT count_in_it,num,office_name,dvice_name,sn,damage,in_it_note,date_auth_repair,auth_repair FROM in_it WHERE status= "in_tts" AND id = "'.$dvice_id.'" ';
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