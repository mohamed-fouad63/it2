<?php
session_start();
$db = $_SESSION['db'];
  $auth_repair = filter_var($_POST['pos_deliver'], FILTER_SANITIZE_STRING);
  $date_auth_repair = $_POST['pos_deliver_date'];
if(!empty($_POST)){
    if($_SESSION['db']){
        include_once "../../conn/conn.php";
        $count_pos_row = count($_POST['selectedData']);
        for ($i=0; $i < $count_pos_row ; $i++) { 
            $var = $_POST['selectedData'][$i];
            $count_in_it = $var["count_in_it"];
            $sql_update = "
            UPDATE in_it SET
            status = 'in_tts',
            auth_repair = '$auth_repair',
            date_auth_repair ='$date_auth_repair'
            where count_in_it  = $count_in_it;
            ";
            $conn->query($sql_update);
            echo "done";
        };
    }
} else {
    header('location:../../views');
}
?>