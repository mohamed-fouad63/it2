<?php
class Office{
    //db stuff
    private $conn;
    private $table = 'all1';

    //post properties
    // public $id;
    // public $office_name;
    // public $dvice_type;
    // public $dvice_name;

 function __construct($db){

$this->conn = $db;
}
// creat query
  function read(){
    $query = 'SELECT * FROM '.$this->table.' ORDER BY office_name ';
    // $query = 'SELECT * FROM '.$this->table.' WHERE office_name = "'.$this->office_name.'" ORDER BY office_name ';
    // prepare statment
$stmt = $this->conn->prepare($query);
//execte query
$stmt ->execute();
return $stmt;
}

function read_one($id_office){
  $query = 'SELECT * FROM '.$this->table.' WHERE office_name = "'.$id_office.'" ';
  // prepare statment
$stmt = $this->conn->prepare($query);
//execte query
$stmt ->execute();
return $stmt;
}
}
?>