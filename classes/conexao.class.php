<?php

class Conexao {

    const SERVER = "localhost";
    const BASE = "subrac";
    const USER = "root";
    const PASSWORD = "";

    private static $INSTANCE = null;

    public static function conectar() {
        try {
            if (self::$INSTANCE == null):
                $DSN = "mysql:host=" . self::SERVER . ";dbname=" . self::BASE . "";
                self::$INSTANCE = new PDO($DSN, self::USER, self::PASSWORD);
                self::$INSTANCE->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            endif;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return self::$INSTANCE;
    }

    protected static function getDB() {
        return self::conectar();
    }

}

?>