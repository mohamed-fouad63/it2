<?php
//delete.php

include('database_connection.php');

if(isset($_POST["image_id"]))
{
 $file_path = $_POST["image_src"];
//  $file_path = '../Attachments/replace_pices_dvice/2022-09-04_other.jpg';
 if(unlink($file_path))
 {
//   $query = "DELETE FROM replace_pices_dvice WHERE num = '".$_POST["image_id"]."'";
  $query = "UPDATE replace_pices_dvice set attachments = '' WHERE num = '".$_POST["image_id"]."' ";
  $statement = $connect->prepare($query);
  $statement->execute();
  echo "تم حذف المرفق";
 } else {
   // $query = "UPDATE replace_pices_dvice set attachments = '' WHERE num = '".$_POST["image_id"]."' ";
   // $statement = $connect->prepare($query);
   // $statement->execute();
 }
}

?>