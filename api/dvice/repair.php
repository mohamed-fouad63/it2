<?php
session_start();
$db = $_SESSION['db'];
if($_SESSION['Incoming'] AND !empty($_POST)){
include_once "../../conn/conn.php";
$query_all_in_it = "SELECT office_name,dvice_name,sn,date_in_it,parcel_in_it,damage,in_it_note,status,parcel_out_it,data_out_it FROM in_it ";
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