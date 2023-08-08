<?php

class UserModel extends Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->connection();
    }

    public function fetch()
    {
        $stm = $this->pdo->query("SELECT * FROM users");

        return $stm->rowCount() > 0 ? $stm->fetchAll(PDO::FETCH_ASSOC) : [];
    }

    public function fetchById($id)
    {
        $stm = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stm->execute([$id]);

        return $stm->rowCount() > 0 ? $stm->fetch(PDO::FETCH_ASSOC) : [];
    }
}