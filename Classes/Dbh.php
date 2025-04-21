<?php

class Dbh {
    private $host = "";
    private $dbname = "";
    private $dbusername = "";
    private $dbpassword = "";

    protected function connect() {
        try {
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" .
            $this->dbname, $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            //MAKE SURE TO RETURN $PDO
            return $pdo;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}