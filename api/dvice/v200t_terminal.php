<?php
session_start();
$db = $_SESSION['db'];
// if($_SESSION['add_dvice']){
//    $office_name = "10039";
   $office_name = $_POST['office_name'];
include_once "../../conn/conn.php";
$query_all_in_it = "SELECT sn,pos_terminal FROM dvice WHERE dvice_name = 'VERIFONE V200T' AND office_name = '$office_name';
";
$result = mysqli_query($conn, $query_all_in_it);
$row_count = mysqli_num_rows($result);
if($row_count > 0){
while($row_pc=mysqli_fetch_assoc($result)){

        $row_read_dvice_json[] = $row_pc;
    }
    echo json_encode($row_read_dvice_json,JSON_UNESCAPED_UNICODE);
}
?>
