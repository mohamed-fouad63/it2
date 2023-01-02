<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
$post_group_name = $_POST['addgroupname'];
    if($_SESSION['db']){
    include_once "../../conn/conn.php";
        $query_office_name=mysqli_query($conn, "SELECT post_group_name FROM post_group where post_group_name = '$post_group_name'");
        $rowcount_office_name=mysqli_num_rows($query_office_name);
        $query_all1 = "INSERT INTO post_group (post_group_name) VALUES ('$post_group_name')";
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