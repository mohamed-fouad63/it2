<?php
session_START();
$db = $_SESSION['db'];
include_once "../../conn/conn.php";
$office_name = $_POST['office_name'];
$dvice_name = $_POST['dvice_name'];
$dvice_sn = $_POST['dvice_sn'];
$dvice_num = $_POST['dvice_num'];
$date_replace_Pices = $_POST['date_replace_Pices'];
$db = "g_shrkia";
$path_draft = "../../views/draftes/$db/replace_pices_dvice/";
$path_rename = "../../Attachments/$db/replace_pices_dvice/$date_replace_Pices/$dvice_sn/";

$norepait_replace_pices_dvice = "DELETE FROM replace_pices_dvice WHERE `replace_dvice_sn` = '$dvice_sn' AND `replace_date` = '$date_replace_Pices' ";
$result1 = $conn->prepare($norepait_replace_pices_dvice);
$result1->execute();
$norepait_replace_pices_attach = "DELETE FROM replace_pices_attach WHERE replace_dvice_sn = '$dvice_sn' AND replace_date = '$date_replace_Pices' ";
$result2 = $conn->prepare($norepait_replace_pices_attach);
$result2->execute();

function deleteDirectory($dir)
{
    if (realpath($dir)) {
        foreach (glob($dir . '/*') as $file) {
            if (is_dir($file)) {
                deleteDirectory($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dir);
        rmdir(dirname($dir));
    }
}
deleteDirectory($path_rename);

if (!empty($_POST['replace_Pices'])) {
    $replace_Pices = $_POST['replace_Pices'];
    foreach ($replace_Pices as $id => $replace_type) {
        $sql_insert_replace_pices_dvice = "
            INSERT INTO replace_pices_dvice
            (id,office_name,replace_type,dvice_name,replace_dvice_sn,replace_dvice_num,replace_date)
            VALUES
            ('$id','$office_name','$replace_type','$dvice_name','$dvice_sn','$dvice_num','$date_replace_Pices')";
        $result = $conn->prepare($sql_insert_replace_pices_dvice);
        $result->execute();
    }
    echo "تم تسجيل قطع الغيار";

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
        echo "\n تم ادراج المرفق بنجاح";
    } else {
        echo "\n * تم حذف اى مرفق تم تسجيلها بالتاريخ المحدد ( ان وجد)
        لعدم تحديد مرفق
    ";
    }

} else {
    $_POST['replace_Pices'] = '';
    echo "* تم حذف اى قطع غيار تم تسجيلها بالتاريخ المحدد ( ان وجد)
    لعدم تحديد اى قطع غيار
";
}
;

//  rename($path_draft."img3.jpg", $path_rename."img3.jpg");
