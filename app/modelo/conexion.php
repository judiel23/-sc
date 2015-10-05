<?php
class Connex extends PDO{
    private $user;
    private $clave;
    private $servidor;
    private $db;
    private $port;
    private $conn;

    function __construct()
    {
        $this->user = 'root';
        $this->clave='';
        $this->servidor ='localhost';
        $this->db = 'movilnet';
        $this->port = 3306;
        $this->conn='';


try {
        $this->conn = new PDO("mysql:host=localhost;dbname=movilnet",$this->user,$this->clave);


    }catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    }

    public function orm()
    {
        require('NotORM.php');

            $orm=new NotORM($this->conn);
            return $orm;

    }
    public function close_con()
    {

        $this->conn = null;

    }
}
?>