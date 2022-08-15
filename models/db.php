<?php

class DB {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "users";

    public function connect() {
        $dsn = "mysql:host=" . $this->host ."; dbname=" . $this->dbName;//designated network? ne moze da se seti tacno data source network
        $pdo = new PDO ($dsn, $this->username, $this->password);
        //dodajemo dodatni atribut koji ce praviti niy od nasih informacija
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //zapamtiti, pravimo asocijativni niz
        return $pdo;
    }
}



?>