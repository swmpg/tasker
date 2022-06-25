<?php
/**
 * Класс конфигурации БД
 */

class DB{
    const USER = "root";
    const PASS = "";
    const HOST = "localhost";
    const DB = "tasker";

    /**
     * Подключение к БД
     */
    public static function connToDB() {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        // объект соединения
        $conn = new PDO ("mysql:dbname=$db;host=$host", $user, $pass);
        return $conn;
    }
}