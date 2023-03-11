<?php
session_start();
$db = $_SESSION['db'];
if (!empty($_POST)) {
  include_once "../../../conn/conn.php";
  $office_name = $_POST['office_name'];
  $money_code = $_POST['money_code'];
  $bitel_terminal = $_POST['bitel_terminal'];
  $dvice_name = $_POST['dvice_name'];
  $sn = $_POST['sn'];
  $stuff_name = $_POST['stuff_name'];
  $stuff_auth = $_POST['stuff_auth'];
  $stuff_id = $_POST['stuff_id'];
  $stuff_auth_action = $_POST['stuff_auth_action'];

  $query_terminal = mysqli_query($conn, '
SELECT
COUNT(CASE WHEN pos_terminal = "' . $bitel_terminal . '" AND stuff_action <> "removing" AND auth = "موظف"  THEN 1 ELSE NULL END) AS count_this_pos_stuffs ,
COUNT(CASE WHEN money_code = "' . $money_code . '" AND stuff_name = "' . $stuff_name . '" AND stuff_action <> "removing" AND auth = "موظف"  THEN 1 ELSE NULL END) AS count_auth_this_pos_stuff_in_this_office ,
COUNT(CASE WHEN money_code = "' . $money_code . '" AND stuff_name = "' . $stuff_name . '" AND stuff_action <> "removing" AND auth = "مدير"  THEN 1 ELSE NULL END) AS count_auth_this_pos_manager_in_this_office ,
COUNT(CASE WHEN money_code = "' . $money_code . '" AND stuff_action <> "removing" AND auth = "مدير + موظف"  THEN 1 ELSE NULL END) AS count_auth_pos_stuff_manager_in_this_office ,
COUNT(CASE WHEN money_code = "' . $money_code . '" AND stuff_name <> "' . $stuff_name . '" AND stuff_action <> "removing" AND auth = "مدير"  THEN 1 ELSE NULL END) AS count_auth_pos_manager_in_this_office ,
COUNT(CASE WHEN pos_terminal = "' . $bitel_terminal . '" AND stuff_action <> "removing" AND auth = "مدير"  THEN 1 ELSE NULL END) AS count_this_pos_manager ,
COUNT(CASE WHEN pos_terminal = "' . $bitel_terminal . '" AND stuff_action <> "removing" AND auth = "مدير + موظف"  THEN 1 ELSE NULL END) AS count_this_pos_stuff_manager ,
COUNT(CASE WHEN pos_terminal = "' . $bitel_terminal . '" AND stuff_name = "' . $stuff_name . '"  THEN 1 ELSE NULL END)  AS count_this_stuff_in_this_pos
FROM bitel_users ');
  $adding_stuff = "
INSERT INTO `bitel_users`
(`stuff_name`, `id`, `auth`, `money_code`, `office_name`,`dvice_name`, `sn`, `pos_terminal`, `stuff_action`)
VALUES
('$stuff_name','$stuff_id','$stuff_auth','$money_code','$office_name','$dvice_name','$sn','$bitel_terminal','adding')
";
  $removing_stuff = "
UPDATE `bitel_users` SET
`stuff_action`='removing'
WHERE
pos_terminal = '$bitel_terminal' AND stuff_name = '$stuff_name'
";
  $resetting_stuff = "
UPDATE `bitel_users` SET
`stuff_action`='resetting'
WHERE
pos_terminal = '$bitel_terminal' AND stuff_name = '$stuff_name'
";
  $editting_post_terminal = "
UPDATE `bitel_users` SET
`pos_action`='editting'
WHERE
pos_terminal = '$bitel_terminal'
";
  while ($row = mysqli_fetch_assoc($query_terminal)) {
    $count_this_stuff_in_this_pos = $row['count_this_stuff_in_this_pos']; //عدد نفس المستخدم على نفس الماكينه
    $count_this_pos_manager = $row['count_this_pos_manager']; // عدد المستخدمين بصلاحيه مدير على هذه الماكينه
    $count_this_pos_stuff_manager = $row['count_this_pos_stuff_manager']; // عدد المستخدمين بصلاحيه مدير + موظف على هذه الماكينه
    $count_this_pos_stuffs = $row['count_this_pos_stuffs']; // عدد المستخدمين بصلاحيه موظف على هذه الماكينه
    $count_auth_this_pos_stuff_in_this_office = $row['count_auth_this_pos_stuff_in_this_office']; //عدد صلاحيه موظف لنفس المستخدم فى نفس المكتب
    $count_auth_this_pos_manager_in_this_office = $row['count_auth_this_pos_manager_in_this_office']; //عدد صلاحيه مدير لنفس المستخدم فى نفس المكتب
    $count_auth_pos_manager_in_this_office = $row['count_auth_pos_manager_in_this_office']; //عدد صلاحيه مدير  لمستخدم اخر فى نفس المكتب
    $count_auth_pos_stuff_manager_in_this_office = $row['count_auth_pos_stuff_manager_in_this_office']; //عدد صلاحيه مدير + موظف  لمستخدم اخر فى نفس المكتب
  }
  switch ($stuff_auth_action) {
    case 'adding':
      switch ($stuff_auth) {
        case 'موظف':
          if ($count_this_pos_stuffs < 2) { // اذا كان عدد الموظفين على هذه الماكينه اقل من 2 
            if ($count_this_pos_stuff_manager < 1) {
              if ($count_this_stuff_in_this_pos == 0) { // اذا كان الموظف غير مكرر الصلاحيه على نفس الماكينه من قبل
                if ($count_auth_this_pos_manager_in_this_office < 1) {
                  $result = $conn->prepare($adding_stuff);
                  $result->execute();
                  $result1 = $conn->prepare($editting_post_terminal);
                  $result1->execute();
                  echo "done";
                } else {
                  echo "المستخدم مضاف على الماكينه بالفعل";
                }
              } else {
                echo "2المستخدم مضاف على الماكينه بالفعل";
              }
            } else {
              echo "يوجد صلاحيه مدير + موظف لمستخدم على هذه الماكينه";
            }
          } else {
            echo "هذه الماكينه مكتمله المستخدمين";
          }
          break;
        case 'مدير':
          if ($count_this_pos_manager < 1) { // اذا كان لا يوجد مدير على الماكينه 
            if ($count_this_pos_stuff_manager < 1) { // اذا كان لا يوجد مدير + موظف على الماكينه 
              if ($count_auth_this_pos_stuff_in_this_office < 1) {
                if ($count_auth_pos_manager_in_this_office < 1) {
                  $result = $conn->prepare($adding_stuff);
                  $result->execute();
                  $result1 = $conn->prepare($editting_post_terminal);
                  $result1->execute();
                  echo "done";
                } else {
                  echo "يوجد مستخدم اخر بصلاحيه مدير لهذا المكتب";
                }
              } else {
                echo "لا يجوز اضافه صلاحيه مدير لمستخدم له صلاحيه موظف";
              }
            } else {
              echo "يوجد صلاحيه مدير + موظف لمستخدم على هذه الماكينه";
            }
          } else {
            echo "يوجد صلاحيه مدير لمستخدم على هذه الماكينه";
          }
          break;
        case 'مدير + موظف':
          if ($count_this_pos_stuff_manager < 1) { // اذا كان لا يوجد مدير + موظف على الماكينه 
            if ($count_this_pos_manager < 1) { // اذا كان لا يوجد مدير على الماكينه 
              if ($count_auth_this_pos_stuff_in_this_office < 1) {
                if ($count_auth_pos_manager_in_this_office < 1) {
                  if ($count_auth_pos_stuff_manager_in_this_office < 1) {
                    $result = $conn->prepare($adding_stuff);
                    $result->execute();
                    $result1 = $conn->prepare($editting_post_terminal);
                    $result1->execute();
                    echo "done";
                  } else {
                    echo "يوجد صلاحيه مدير + موظف لمستخدم على ماكينه اخرى";
                  }
                } else {
                  echo "يوجد مستخدم اخر بصلاحيه مدير لهذا المكتب";
                }
              } else {
                echo "لا يجوز اضافه صلاحيه مدير + موظف لمستخدم له صلاحيه موظف";
              }
            } else {
              echo "يوجد صلاحيه مدير لمستخدم على هذه الماكينه";
            }
          } else {
            echo "يوجد صلاحيه مدير + موظف لمستخدم على هذه الماكينه";
          }
          break;

        default:
          echo "يجب تحديد صلاحيه المستخدم";
          break;
      }

      break;
    case 'removing':
      // echo 'طلب حذف مستخدم';
      $result = $conn->prepare($removing_stuff);
      $result->execute();
      $result1 = $conn->prepare($editting_post_terminal);
      $result1->execute();
      echo "done";
      break;
    case 'resetting':
      // echo 'طلب استعاده كلمه مرور مستخدم';
      $result = $conn->prepare($resetting_stuff);
      $result->execute();
      $result1 = $conn->prepare($editting_post_terminal);
      $result1->execute();
      echo "done";
      break;
    default:
      echo 'الطلب خالى';
      break;
  }
} else {
  header('location:../views');
}