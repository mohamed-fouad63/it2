<?php
$db = "g_shrkia";
if (!realpath("../draftes/$db/replace_pices_dvice/")) {
    mkdir("../draftes/$db/replace_pices_dvice/", 0777, true);
}
$file_name = $_FILES['file']['name']; //getting file name
$tmp_name = $_FILES['file']['tmp_name']; //getting temp_name of file
$file_up_name = $file_name; //making file name dynamic by adding time before file name
// $file_up_name = date('Y-m-d').$file_name; //making file name dynamic by adding time before file name
move_uploaded_file($tmp_name, "../draftes/$db/replace_pices_dvice/" . $file_up_name); //moving file to the specified folder with dynamic name
