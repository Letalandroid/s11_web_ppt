<?php

require_once 'db.php';

class Amigo
{

    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = Database::Connect();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    static function list()
    {
        try {
            $pdo = Database::Connect();
            $sql = "SELECT * FROM amigos";

            $stm = $pdo->prepare($sql);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
