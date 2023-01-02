<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST['reg_in_sub'])){
    $reg_in_sub = json_encode($_POST['reg_in_sub'],JSON_UNESCAPED_UNICODE);
    file_put_contents('../../jsons/'.$db.'/reg_in_sub.json', $reg_in_sub);
}
else {
    file_put_contents('../../jsons/'.$db.'/reg_in_sub.json', '[]');
}
?>