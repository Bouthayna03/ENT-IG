<?php

namespace models;

use PDO;

class Users extends Db {
    public $id              = '';
    public $name            = '';
    public $email           = '';
    public $password        = '';
    public $Query;

    function setValues($name, $email, $password, $dob){

        $this->name     = $name;
        $this->email    = $email;
        $this->password = $password;
        $this->dob      = $dob;
    }

    public function FetchAll(){
        return $this->Query->fetchAll(PDO::FETCH_OBJ);
    }
    public function Single(){
        return $this->Query->fetch(PDO::FETCH_OBJ);
    }
    function insert(){
        $name     = $this->name;
        $email    = $this->email;
        $password = encryptdata($this->password);

        $sql = "INSERT INTO users (name,email,password) VALUES (?,?,?)";
        $results = $this->connect()->prepare($sql);
        return $results->execute([$name, $email, $password]);
    }
}