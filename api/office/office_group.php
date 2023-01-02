<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
    if($_SESSION['db']){
include_once "../../conn/conn.php";
$query_all_in_it = "SELECT post_group_name FROM post_group";
$result = mysqli_query($conn, $query_all_in_it);

while($row_pc=mysqli_fetch_assoc($result)){

        $row_read_dvice_json[] = $row_pc;
    }
    echo json_encode($row_read_dvice_json,JSON_UNESCAPED_UNICODE);
    }
} else {
     header('location:../views');
}
?>