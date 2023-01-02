<?php
session_start();
$db = $_SESSION['db'];
if($_SESSION['all_misin'] AND !empty($_POST)){
include_once "../../conn/conn.php";
 $search = $_POST['year'];
$query_it_name = mysqli_query($conn, 'SELECT it_name,
COUNT(CASE WHEN office_name = "اجازه اعتياديه" THEN 1 ELSE NULL END) AS eht ,
COUNT(CASE WHEN office_name = "اجازه عارضه" THEN 1 ELSE NULL END) AS arta ,
COUNT(CASE WHEN misin_day = "السبت" THEN 1 ELSE NULL END) AS sat ,
COUNT(CASE WHEN office_name = "بدل راحه" THEN 1 ELSE NULL END) AS bdl ,
COUNT(CASE WHEN office_name like "%ماموريه%" THEN 1 ELSE NULL END) AS mis ,
COUNT(CASE WHEN office_name = "اجازه مرضيه" THEN 1 ELSE NULL END) AS ill ,
COUNT(CASE WHEN office_name = "اجازه استثنائيه" THEN 1 ELSE NULL END) AS exc
FROM misin_it WHERE misin_date LIKE "'.$search.'%" GROUP BY id
');

$row_count = mysqli_num_rows($query_it_name);

if($row_count > 0){
    foreach($query_it_name as $row_it_name ){
        $arrytest[] = $row_it_name;
     }
     echo json_encode($arrytest,JSON_UNESCAPED_UNICODE);
}
else {
    echo json_encode(array('message' => 'no datas found'));
}
} else {
   header('location:../views');
}


?>
