<?php
session_start();
$db = $_SESSION['db'];
if(!empty($_POST)){
include_once "../../conn/conn.php";

$it_name = $_POST['it_name'];
$it_id = $_POST['it_id'];
$office_name = $_POST['office_name'];
$mission_date_start = $_POST['mission_date_start'];
$mission_date_end = $_POST['mission_date_end'];
$mission_type = $_POST['mission_type'];
$misin_cairo_type = $_POST['misin_cairo_type'];
$mission_time_start = $_POST['mission_time_start'];
$mission_time_end = $_POST['mission_time_end'];


$date = $mission_date_start;
$nameOfDay = date('D', strtotime($date));

switch ($nameOfDay) {
  case "Fri":
    $nameOfDay = "الجمعه";
    break ;
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

$sql_insert_in_misin = "INSERT INTO
misin_it (misin_day,misin_date,id,it_name,office_name,misin_type,start_time,end_time,does)
VALUES ('$nameOfDay','$mission_date_start','$it_id','$it_name','$office_name','$mission_type','$mission_time_start','$mission_time_end','$misin_cairo_type')";



 if (empty($office_name)) {
  echo 'قم بتحديد مكتب المرور ';
}
else if ($nameOfDay == "الجمعه"){
  echo 'لا يوجد ماموريات يوم الجمعه';
}

else if($office_name == 'اجازه مرضيه' || $office_name == 'اجازه رسميه' || $office_name == 'اجازه عارضه' || $office_name == 'اجازه اعتياديه'){
$start_ill_date = strtotime($mission_date_start);
$end_ill_date = strtotime($mission_date_end);

for ( $i = $start_ill_date; $i <= $end_ill_date; $i = $i + 86400 ) {
  $this_ill_Date = date( 'Y-m-d', $i );
  $name_this_ill_Date = date('D', strtotime($this_ill_Date));
  switch ($name_this_ill_Date) {
    case "Fri":
      $name_this_ill_Date = "الجمعه";
      continue 2;
    case "Sat":
      $name_this_ill_Date = "السبت";
      continue 2;
    case "Sun":
      $name_this_ill_Date = "الأحد";
      break;
    case "Mon":
      $name_this_ill_Date = "الأثنين";
      break;
    case "Tue":
      $name_this_ill_Date = "الثلاثاء";
      break;
    case "Wed":
      $name_this_ill_Date = "الأربعاء";
      break;
    case "Thu":
      $name_this_ill_Date = "الخميس";
      break;
  }
  $sql_insert_ill_in_misin = "INSERT INTO misin_it (id,misin_day,misin_date,it_name,office_name)
  VALUES ('$it_id','$name_this_ill_Date','$this_ill_Date','$it_name','$office_name')";
  $conn->query($sql_insert_ill_in_misin);
  }
  echo 'done';
} else {
  $conn->query($sql_insert_in_misin);
  echo 'done';
}
} else {
   header('location:../views');
}








