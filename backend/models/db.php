<?php

namespace models;

use PDO;
use PDOException;

class Db{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){

        $this->servername = "localhost";
        $this->username   = "root";
        $this->password   = "";
        $this->dbname     = "oop";

        try {

            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";port:3308";
            $conn = new PDO($dsn, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}