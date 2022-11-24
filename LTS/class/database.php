<?php
class Database 
{
    private $servername;
    private $username;
    private $password;
    private $dbname;


    public function Connect()
    {
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="land_system";
        try{
            $dsn="mysql:host=".$this->servername.";dbname=".$this->dbname;
            $pdo=new PDO($dsn,$this->username,$this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }catch(PDOException $e){
            echo "Failed to connect: ".$e->getMessage();
        }
    }
}

?>