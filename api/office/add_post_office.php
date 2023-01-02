<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
    $office_name = $_POST['office_name'];
    $post_group = $_POST['post_group'];
    $office_type = $_POST['office_type'];
    $money_code = $_POST['money_code'];
    $post_code = $_POST['post_code'];
    $postal_code = $_POST['postal_code'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    if($_SESSION['db']){
    include_once "../../conn/conn.php";
        $query_office_name=mysqli_query($conn, "SELECT office_name FROM all1 where office_name = '$office_name'");
        $rowcount_office_name=mysqli_num_rows($query_office_name);
        $query_all1 = "INSERT INTO all1 (office_name,post_group,office_type,money_code,post_code,postal_code,tel,address)VALUES ('$office_name','$post_group','$office_type','$money_code','$post_code','$postal_code','$tel','$address')";
            if($rowcount_office_name == 0){
            $result2 = $conn->prepare($query_all1);
            $result2->execute();
            echo 'done';
            } else {
                echo 'not done';
            }
    }
} else {
     header('location:../views');
}
?>