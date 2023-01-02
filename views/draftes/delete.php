<?php
//delete.php

$db = "g_shrkia";
if (isset($_POST["file_name"])) {
    $file_path = "../draftes/$db/replace_pices_dvice/" . $_POST["file_name"];
//  $file_path = '../Attachments/replace_pices_dvice/2022-09-04_other.jpg';
    if (unlink($file_path)) {
        echo 'done';
    } else {
        echo 'not done';
    }
}
