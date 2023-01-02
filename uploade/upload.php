<?php
//upload.php
include('database_connection.php');
$sn = $_POST['dvice_sn'];
$office_name = $_POST['office_name'];
$dvice_num = $_POST['dvice_num'];
$id_replace_pices_type = $_POST['id_replace_pices_type'];
$replace_pices_type = $_POST['replace_pices_type'];
$date_replace_Pices = $_POST['date_replace_Pices'];
$dvice_name = $_POST['dvice_name'];
if(empty($_FILES["fileToUpload"]["name"])){
    $count_file_upload = 0 ;
} else {
    $count_file_upload = count($_FILES["fileToUpload"]["name"]);
}

if($count_file_upload  > 0)
{
 for($count=0; $count<$count_file_upload ; $count++)
 {
  $file_name = $_FILES["fileToUpload"]["name"][$count];
  $tmp_name = $_FILES["fileToUpload"]['tmp_name'][$count];
  $file_array = explode(".", $file_name);
  $file_extension = end($file_array);

  $location = '../Attachments/replace_pices_dvice/' . $date_replace_Pices.'_'.$sn.'.'. $file_extension;
  if(move_uploaded_file($tmp_name, $location))
  {
   $query = "
   INSERT INTO replace_pices_dvice (id, office_name,replace_type,dvice_name,sn,date,attachments) 
   VALUES ('".$id_replace_pices_type."', '".$office_name."', '".$replace_pices_type."', '".$dvice_name."', '".$sn."', '".$date_replace_Pices."', '".$location."')
   ";
   $statement = $connect->prepare($query);
   $statement->execute();
   $sql_norepait__move = "DELETE n2 FROM replace_pices_dvice n1, replace_pices_dvice n2 WHERE n1.num > n2.num AND n1.date = n2.date AND n1.sn = n2.sn AND n1.dvice_name = n2.dvice_name AND n1.replace_type = n2.replace_type";
   $statement1 = $connect->prepare($sql_norepait__move);
   $statement1->execute();
   echo "file is loaded";
  }
 }
}
else {
    $query = "
    INSERT INTO replace_pices_dvice (id, office_name,replace_type,dvice_name,sn,date,attachments) 
    VALUES ('".$id_replace_pices_type."', '".$office_name."', '".$replace_pices_type."', '".$dvice_name."', '".$sn."', '".$date_replace_Pices."', '')
    ";
    $statement = $connect->prepare($query);
    $statement->execute();
    $sql_norepait__move = "DELETE n2 FROM replace_pices_dvice n1, replace_pices_dvice n2 WHERE n1.num > n2.num AND n1.date = n2.date AND n1.sn = n2.sn AND n1.dvice_name = n2.dvice_name AND n1.replace_type = n2.replace_type";
    $statement1 = $connect->prepare($sql_norepait__move);
    $statement1->execute();
}

?>