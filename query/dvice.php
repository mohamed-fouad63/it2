<?php
class Dvice{
    //db stuff
    private $conn;
    private $table = 'dvice';

    //post properties
    // public $id;
    // public $office_name;
    // public $dvice_type;
    // public $dvice_name;


// creat query
  function read(){
    $query = 'SELECT * FROM '.$this->table.' ORDER BY office_name ';
    // $query = 'SELECT * FROM '.$this->table.' WHERE office_name = "'.$this->office_name.'" ORDER BY office_name ';
    // prepare statment
$stmt = $this->dbobj->prepare($query);
//execte query
$stmt ->execute();
return $stmt;
}

function read_one($id,$office_name1){
  $query = '';
  $output= array();
  $query .= 'SELECT * FROM '.$this->table.' ';
  $query .= 'WHERE office_name = "'.$office_name1.'" AND id= "'.$id.'"';

  // prepare statment
$stmt = $this->conn->prepare($query);
//execte query
$stmt ->execute();
return $stmt;
}
}
?>