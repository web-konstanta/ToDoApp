<?php

class Db
{
    public static function getConnection()
    {
        $host = 'localhost';
        $dbname = 'todoapp';
        $user = 'root';
        $password = '';
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->exec("set names utf8");

        return $db;
    }
}
