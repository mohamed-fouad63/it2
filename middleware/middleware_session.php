<?php
session_start();
function session_login_auth($condition){
    if(!$_SESSION[$condition]){
        header('location:/it2/views/');
        // header('location:/it2/views/login.php');
}
}
?>