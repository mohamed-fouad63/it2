<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST['reg_to_sub'])){
    $reg_to_sub = json_encode($_POST['reg_to_sub'],JSON_UNESCAPED_UNICODE);
    file_put_contents('../../jsons/'.$db.'/reg_to_sub.json', $reg_to_sub);
}
else {
    file_put_contents('../../jsons/'.$db.'/reg_to_sub.json', '[]');
}
?>