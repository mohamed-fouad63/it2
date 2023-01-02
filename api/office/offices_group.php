<?php

include_once "../../conn/conn.php";
if(!empty($_POST)){
$input_search = 'الزقازيق اول';
// $query_office_name = "SELECT office_name FROM `all1` WHERE post_group = '$input_search '";
// $query_post_group = "SELECT * FROM `post_group`";
// $result = mysqli_query($conn, $query_all_in_it);

$result = mysqli_query($conn,"SELECT post_group_name FROM `post_group`"); 
    $json_response = array(); //Create an array
    while ($row = mysqli_fetch_array($result))
    {
        $row_array = array();
        $row_array['post_group_name'] = $row['post_group_name'];        
        $row_array['office_name'] = array();
        $post_group_name = $row['post_group_name'];  

        $option_qry = mysqli_query($conn,"SELECT office_name FROM `all1` WHERE post_group = '$post_group_name'");
        while ($opt_fet = mysqli_fetch_array($option_qry))
        {
            $row_array['office_name'][] = array(
                'office_name' => $opt_fet['office_name']
            );

        }
        array_push($json_response, $row_array); //push the values in the array
    }
    echo json_encode($json_response,JSON_UNESCAPED_UNICODE);
    } else {
   header('location:../views');
}

//     $json = json_encode(array(
//    "client" => array(
//       "build" => "1.0",
//       "name" => "xxxx",
//       "version" => "1.0"
//    ),
//    "protocolVersion" => 4,
//    "data" => array(
//       "distributorId" => "xxxx",
//       "distributorPin" => "xxxx",
//       "locale" => "en-US"
//    )
// ));
?>


