<?php

// $bdd = new PDO("mysql:host=localhost;dbname=gestionnaire_contact;charset=utf8","root","") or die(print_r(("Erreur de connexion à la bdd")));

class DataBase{
    private static $connection = null;
    private static $host = "localhost";
    private static $dbname = "gestionnaire_contact";
    private static $user = "root";
    private static $password = "";
    public static function connect(){
        if(self::$connection == null){
            try{
                self::$connection = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8",self::$user,self::$password) or die(print_r(("Erreur de connexion à la bdd")));
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    public static function disconnect(){
        self::$connection = null;   
    }
}



?>