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

    static function search_id($id)
    {
        try {
            $pdo = Database::Connect();
            $sql = "SELECT * FROM amigos where id=:id";

            $stm = $pdo->prepare($sql);
            $stm->bindValue(':id', $id);
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

    static function edit($id, $nombre, $paterno, $materno)
    {
        try {
            $pdo = Database::Connect();
            $sql = "update amigos set nombre=:nombre, paterno=:paterno, materno=:materno where id=:id";

            $stm = $pdo->prepare($sql);
            $stm->bindValue(':id', $id);
            $stm->bindValue(':nombre', $nombre);
            $stm->bindValue(':paterno', $paterno);
            $stm->bindValue(':materno', $materno);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    static function remove($id)
    {
        try {
            $pdo = Database::Connect();
            $sql = "delete from amigos where id=:id";

            $stm = $pdo->prepare($sql);
            $stm->bindValue(':id', $id);
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
