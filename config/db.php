<?php

class Database {
    public static function connect() {
        $db  = new mysqli("localhost", "root", "root", "tienda_master", 3307);
        $db->query("SET NAMES 'UTF8'");
        return $db;
    }
}