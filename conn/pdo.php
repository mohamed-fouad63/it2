<?php

// $host = 'localhost';
// $db = 'post';
// $user = 'root';
// $pass = '12345678';
// $charset = 'UTF8';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// $db = new PDO($dsn, $user, $pass);
// //set come db attributes
// $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
// $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
// $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
class PdoConn{
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "g_shrkia";
    private $username = "root";
    private $password = "12345678";
    protected $conn;
  
    // get the database connection
    public function __construct(){
  
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
    }
}
?>