<?php

class Database {

    static function Connect() {

        // Change this credentials
        $host = 'localhost';
        $db = 'php2020';
        $charset = 'utf8';
        $user = 'letalandroid'; // default: root
        $password = 'root'; // default: empty

        $sql = "mysql:host=$host;dbname=$db;charset=$charset";

        $pdo = new PDO($sql, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }

}