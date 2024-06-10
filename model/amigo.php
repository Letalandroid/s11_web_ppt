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

    static function add($nombre, $paterno, $materno)
    {
        try {
            $pdo = Database::Connect();
            $sql = "insert into amigos (nombre, paterno, materno) values (:nombre, :paterno, :materno)";

            $stm = $pdo->prepare($sql);
            $stm->bindValue(':nombre', $nombre);
            $stm->bindValue(':paterno', $paterno);
            $stm->bindValue(':materno', $materno);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
