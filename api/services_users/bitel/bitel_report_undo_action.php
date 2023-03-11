<?php
session_start();
$db = $_SESSION['db'];
if (!empty($_POST)) {
  include_once "../../../conn/conn.php";
  $action_date = $_POST['action_date'];
  $stuff_auth = $_POST['auth'];
  $stuff_id = $_POST['id'];
  $money_code = $_POST['money_code'];
  $num = $_POST['num'];
  $office_name = $_POST['office_name'];
  $pos_action = $_POST['pos_action'];
  $bitel_terminal = $_POST['pos_terminal'];
  $sn = $_POST['sn'];
  $stuff_auth_action = $_POST['stuff_action'];
  $stuff_name = $_POST['stuff_name'];

  $undo_adding_stuff = "
DELETE FROM `bitel_users`
WHERE
pos_terminal = '$bitel_terminal' AND num = '$num'
";
  $undo_removing_stuff = "
UPDATE `bitel_users` SET
`stuff_action`='',
`pos_action`=''
WHERE
pos_terminal = '$bitel_terminal' AND num = '$num'
";
  $undo_resetting_stuff = "
UPDATE `bitel_users` SET
`stuff_action`='',
`pos_action`=''
WHERE
pos_terminal = '$bitel_terminal' AND num = '$num'
";
  switch ($stuff_auth_action) {
    case 'adding':
      $result = $conn->prepare($undo_adding_stuff);
      $result->execute();
      echo "done";
      break;
    case 'removing':
      $result = $conn->prepare($undo_removing_stuff);
      $result->execute();
      echo "done";
      break;
    case 'resetting':
      $result = $conn->prepare($undo_resetting_stuff);
      $result->execute();
      echo "done";
      break;
    default:
      echo 'الطلب خالى';
      break;
  }
} else {
  header('location:../views');
}