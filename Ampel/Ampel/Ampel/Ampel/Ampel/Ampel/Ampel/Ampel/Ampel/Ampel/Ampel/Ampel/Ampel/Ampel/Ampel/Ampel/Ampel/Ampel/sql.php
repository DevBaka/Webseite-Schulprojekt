<?php
class DB{
    private static $_db_username = "devbaka";
    private static $_db_password = "Hapsoxy33";
    private static $_db_host = "devbaka.ddns.net";
    private static $_db_port = "3306";
    private static $_db_name = "Ampel";
    private static $_db;
    
    function __construct() {
        try{
            //self::$_db = new PDO("mysql:host=" . self::$_db_host . ";mysql:port=" . self::$_db_port . ";mysql:dbname=" . self::$_db_name . ";mysql:username=" .self::$_db_username . ";mysql:passwd=" . self::$_db_password . ";");
            self::$_db = new PDO("mysql:host=192.168.2.101; dbname=Ampel", "devbaka", "Hapsoxy33");
            echo "hello world";
        } 
        catch (PDOException $e) {
          echo "Datenbankverbindung gescheitert!";
          die();
        }
    }
    
}

?>
