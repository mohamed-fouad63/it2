<?php
if(!empty($_POST)){
$post_group_name = $_POST['input_search'];
session_start();
$db = $_SESSION['db'];
include_once "../../conn/conn.php";
$query_all_in_it = "SELECT id,office_name,money_code,post_code,postal_code,office_type,address,tel,post_group FROM `all1` WHERE post_group = '$post_group_name'";
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