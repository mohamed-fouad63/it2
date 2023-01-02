<?php
session_start();
$db = $_SESSION['db'];
include_once "../../conn/conn.php";
if($_SESSION['misins'] AND !empty($_POST)){
$getid = $_POST['getid2'];
if(!empty($getid)){
$this_date = $_POST['getmy'];
$date_missin_month = date("m", strtotime($this_date));
$date_missin_year = date("Y", strtotime($this_date));
$misin_date = $date_missin_year . "-" . $date_missin_month;
function getMonth($year, $month)
{
$last = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$date = new DateTime();
$alldays = array();
for ($day = 1; $day <= $last; $day++) {
$date->setDate($year, $month, $day);
$alldays[] = $date->format("Y-m-d");
}
return $alldays;
}
$alldays = getMonth($date_missin_year, $date_missin_month);
foreach ($alldays as $day)
{
$nameOfDay = date('D', strtotime($day));
switch ($nameOfDay) {
case "Fri":
$nameOfDay = "الجمعه";
break;
case "Sat":
$nameOfDay = "السبت";
break;
case "Sun":
$nameOfDay = "الأحد";
break;
case "Mon":
$nameOfDay = "الأثنين";
break;
case "Tue":
$nameOfDay = "الثلاثاء";
break;
case "Wed":
$nameOfDay = "الأربعاء";
break;
case "Thu":
$nameOfDay = "الخميس";
break;
}
if ($nameOfDay != 'الجمعه' && $nameOfDay != 'السبت') {
$query_all_in_it = "SELECT id,does,counter,it_name,misin_day,misin_date,office_name,misin_type,start_time,end_time,mission_table FROM misin_it 
where id = '{$getid}' and misin_date = '{$day}'
UNION ALL
SELECT id,does,counter,it_name,misin_day,misin_date,office_name,misin_type,start_time,end_time,mission_table FROM misin_it_online
where id = '{$getid}' and misin_date = '{$day}' ";
$result = mysqli_query($conn, $query_all_in_it);
// $query_all_in_it2 = 'SELECT it_name,misin_day,misin_date,office_name,misin_type,start_time,end_time,mission_table FROM misin_it_online WHERE id = "'.$getid.'" AND misin_date LIKE "%'.$day.'%" ';
// $result2 = mysqli_query($conn, $query_all_in_it2);
$row_count = mysqli_num_rows($result);
// $row_count2 = mysqli_num_rows($result2);
if($row_count > 0 ){
while($row_pc=mysqli_fetch_assoc($result)){
$row_read_dvice_json[] = $row_pc;
}
}
else {
$row_pc3 = array(
"it_name"=>"",
"misin_day"=>"$nameOfDay",
"misin_date"=>"$day",
"office_name"=>"",
"misin_type"=>"",
"start_time"=>"",
"end_time"=>"",
"counter"=>"",
"does"=>"",
"mission_table"=>"not",
"mission_status"=>"not",
"id"=>""
);
$row_read_dvice_json[] = $row_pc3;
};
};
};
// $result = array_merge_recursive($row_read_dvice_json);
echo json_encode($row_read_dvice_json,JSON_UNESCAPED_UNICODE);
} else {
echo json_encode(array("messaage"=>""));
}
} else {
header('location:../views');
}
?>