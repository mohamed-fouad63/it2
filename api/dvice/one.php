<?php

include '../../core/initialize.php';
require_once(CONNECTION_PATH.DS.'pdo.php');
require_once(QUERY_PATH.DS.'dvice_table.php');

$obj = new Dvice();
$count = $obj->getCount();
echo $count;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="file" id="input">
    <input type="button" id="submit">
    <div id="demo"></div>
    </form>
    <script>
        
        document.getElementById('submit').addEventListener("click", function(){
  document.getElementById("demo").innerHTML = "Hello World";
});
    </script>
</body>
</html>