<?php 

// Copie este arquivo para Database.php e preencha com os dados do seu banco.

class Database {
    private static $conn;

    public static function conectar() {
        if(!self::$conn) {
            self::$conn = new PDO (
                "pgsql:host=localhost;port=5432;dbname=crudcliente",
                "SEU_USUARIO",
                "SUA_SENHA",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        return self::$conn;
    }
}


?>