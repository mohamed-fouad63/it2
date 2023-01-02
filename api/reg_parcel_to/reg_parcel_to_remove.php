<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
include_once "../../conn/conn.php";

$id = $_POST['id'];


$sql_delet_missin_online = "DELETE FROM parcel_send WHERE id = '$id' ";

if ($conn->query($sql_delet_missin_online) === true) {
    echo "done";
} else {
    echo "not done";
}
} else {
   header('location:../views');
}