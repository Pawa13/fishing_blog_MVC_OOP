<?php
    class DB {
    
    public static function getConnect() {
        
        $host = 'localhost'; // адрес сервера 
        $database = 'blog'; // имя базы данных
        $user = 'root'; // имя пользователя
        $password = '58792'; // пароль  
        $db = new PDO("mysql:host=$host; dbname=$database", $user, $password);
    
        return $db;
        }

    }