<?php

class Cafe_model {
    private $dbh;
    private $stmt;

    public function __construct()
    {

        $dsn = 'mysql:host=127.0.0.1;dbname=phpmvc'; 
    
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    
    }

    public function getAllCafe()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM cafe');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }



}