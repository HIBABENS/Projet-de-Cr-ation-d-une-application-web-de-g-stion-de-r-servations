<?php
class Connexion{
public static function getConnexion(){
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=agencetouristique', 'root', '');
        return $pdo;
    } catch (Exception $e) {
        die("Impossible de se connecter: " . $e->getMessage());
    }
}
}
