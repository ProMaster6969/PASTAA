<?php
class DataBaseConfig
{
    private $connection;

    private $host = "localhost";
    private $username = "root";
    private $dbName = "pastadb";
    private $password = "";

    public function getConnection()
    {
        $this->createConnection();
        return $this->connection;
    }

    public  function createConnection()
    {
        try{
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo 'faild'.$e.getMessage();
        }
    }

}