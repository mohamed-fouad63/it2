<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initializing our api
include '../../core/initialize.php';
require_once(INCLUDES_PATH.DS.'config.php');
require_once(CORE_PATH.DS.'office.php');
$id_office = $_POST['id_office'];

//instantiate dvice
$office_details = new Office($db);

// if($dvice->id != ''){
// $dvice->id = $_POST['id'];
// }
//blog dvice query
$read_office_details = $office_details->read_one($id_office);

//get the row count
$num_read_office_details = $read_office_details->rowCount();

if($num_read_office_details > 0){
    $num_read_office_details = array();

    while($row_read_office_details = $read_office_details->fetch(PDO::FETCH_ASSOC)){

        $row_read_office_details_json[] = $row_read_office_details;
    }
    echo json_encode($row_read_office_details_json,JSON_UNESCAPED_UNICODE);
}
else {
    echo json_encode(array('message' => 'no data found'));
}
?>