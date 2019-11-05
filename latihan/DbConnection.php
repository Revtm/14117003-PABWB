<?php
 class DbConnection{
 private $host = 'localhost';
 private $username = 'id6538358_14117003';
 private $password = '123456';
 private $database = 'id6538358_prak9';
 protected $connection;
     public function __construct(){
         if (!isset($this->connection)) {
         $this->connection = new mysqli($this->host, $this->username, $this->password,$this->database);
             if (!$this->connection) {
             echo 'Cannot connect to database server';
             exit;
             }
         }
     return $this->connection;
     }
 }
?>