<?php

class Database
{
    public function connection()
    {
        try
        {
            return $pdo = new PDO("mysql:dbname=mvc;host=127.0.0.1", "root", "Prodigy@2023");
        }
        catch (PDOException $e)
        {
            echo "ERRO: $e";
        }
    }
}