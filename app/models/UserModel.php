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
        $stm = $this->pdo->query("SELECT * FROM user");

        return $stm->rowCount() > 0 ? $stm->fetchAll(PDO::FETCH_ASSOC) : [];
    }

    public function fetchById($id)
    {
        $stm = $this->pdo->prepare("SELECT * FROM user WHERE id = ?");
        $stm->execute([$id]);

        return $stm->rowCount() > 0 ? $stm->fetch(PDO::FETCH_ASSOC) : [];
    }

    public function store($request)
    {
        try
        {
            $stm = $this->pdo->prepare("INSERT INTO user VALUES(null, ?, ?, ?, ?)");
            return $stm->execute([$request['first_name'], $request['last_name'], $request['email'], $request['password']]);
        }
        catch(PDOException $e)
        {
            return false;
        }
    }
}