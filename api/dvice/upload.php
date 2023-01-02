<?php
session_start();
if(!empty($_POST)){
$countfiles = count($_FILES["fileToUpload"]["name"]);
$sn = $_PST[''];
$target_dir = "../../../it2/Attachments/replace_pices_dvice";
$count = 0;

// for($i=0;$i < $countfiles;$i++){
  $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"][0],PATHINFO_EXTENSION));

$uploadOk = 1;

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][0]);
  if($check !== false) {
    // echo "File is an image - " . $check["mime"] . "."; //File is an image - image/jpeg
    $uploadOk = 1;
  } else {
    echo "هذا المرفق ليست صوره";
    $uploadOk = 0;
  }


// Check if file already exists


// Check file size
if ($_FILES["fileToUpload"]["size"][0] > 500000) {
  echo " , هذا المرفق حجمه كبير , ";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  echo "فقط الامتدادات JPG, JPEG, PNG & GIF المسموح به فقط.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo " , لم يتم تحميل المرفق .";
// if everything is ok, try to upload file
} else {

  $conn=mysqli_connect("localhost","root","12345678","post");
  $search = $_POST['dvice_num'];
  $query_all_in_it = 'SELECT num,sn,dvice_name FROM in_it WHERE count_in_it  = "'.$search.'%" ';
  $result = mysqli_query($conn, $query_all_in_it);
  $row_count = mysqli_num_rows($result);
  if($row_count > 0){
    while($row=mysqli_fetch_assoc($result)){
            $dv_sn = $row['sn'];
             $sn = $_POST['date_replace_Pices']."_".$row['sn'];
        }
      };
      $index = $i+1;
      $target_file = $target_dir."/".$sn.".".$imageFileType;
      // if (file_exists($target_file)) {
      //   echo "هذا المرفق موجود بالفعل";
      //   $uploadOk = 0;
      // }

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][0],$target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"][0])). " has been uploaded.";
    $query_update = 'UPDATE replace_pices_dvice set src = "'.$target_file.'" WHERE sn  = "'.$dv_sn.'" AND date = "'.$_POST['date_replace_Pices'].'" ';
    $result2 = $conn->prepare($query_update); 
    $result2->execute();
  } else {
    echo "عذرا, هناك خطأ فى تحميل المرفق.";
  }

}
} else {
  header('location:../../views');
}
// }




?>