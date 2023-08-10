<?php

class Database
{
    public function connection()
    {
        try
        {
            return $pdo = new PDO('', '');
        }
        catch (PDOException $e)
        {
            echo "ERRO: $e";
        }
    }
}