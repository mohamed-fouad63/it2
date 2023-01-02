<?php
session_start();
if(!empty($_POST)){
$db = "g_shrkia";
$dvice_sn = $_POST['dvice_sn'];
$date_replace_Pices = $_POST['date_replace_Pices'];
$dvice_num = $_POST['dvice_num'];
$replace_Pices = $_POST['replace_Pices'];

$path_draft = "../../views/draftes/replace_pices_dvice/";
$path_rename = "../../Attachments/$db/replace_pices_dvice/$date_replace_Pices/$dvice_sn/";

$conn = mysqli_connect("localhost", "root", "12345678", "g_shrkia");
$sql_norepait__move = "DELETE FROM replace_pices_attach WHERE replace_dvice_sn = '$dvice_sn' AND replace_date = '$date_replace_Pices' ";
$result2 = $conn->prepare($sql_norepait__move);
$result2->execute();

function deleteDirectory($dir)
{
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }

    }

    rmdir($dir);
}
deleteDirectory($path_rename);

if (!empty($_POST['imgs'])) {
    $imgs = $_POST['imgs'];
    foreach ($imgs as $key => $value) {
        $key = $key + 1;
        $sql_insert = "
    INSERT INTO replace_pices_attach
    (replace_date,replace_dvice_sn,replace_attach_index,replace_dvice_num,replace_attach_file_name)
    VALUES ('$date_replace_Pices','$dvice_sn','$key','$dvice_num','$value')
    ";
        if (realpath($path_rename)) {
            rename($path_draft . $value,
                $path_rename . $value);
            $result = $conn->prepare($sql_insert);
            $result->execute();
        } else {
            mkdir($path_rename, 0777, true);
            rename($path_draft . $value,
                $path_rename . $value);
            $result = $conn->prepare($sql_insert);
            $result->execute();
        }
    }
    echo "done";
} else {
    deleteDirectory($path_rename);
}
} else {
   header('location:../../views');
}
//  rename($path_draft."img3.jpg", $path_rename."img3.jpg");
