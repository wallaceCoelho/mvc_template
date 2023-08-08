<?php

class Database
{
    public function connection()
    {
        try
        {
            $pdo = new PDO("mysql:dbname=EXAMPLE;host=127.0.0.1", "", "");
        }
        catch (PDOException $e)
        {
            echo "ERRO: $e";
        }
    }
}