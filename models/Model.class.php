<?php
abstract class Model {
    private static $pdo; //represente la connexion à la base de données

    private static function setBdd() {
        self::$pdo = new PDO("mysql:host=localhost;dbname=bbd;charset=utf8", 'root', '');
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd() {
        if(self::$pdo === null) // si vrai, alors la connexion n'a pas encore été établie
         self::setBdd(); //ne pas utiliser $this->setBdd() car setBdd est static
        return self::$pdo; //retourne la connexion
    }

    }