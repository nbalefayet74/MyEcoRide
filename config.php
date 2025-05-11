<?php
$host = 'localhost';
$db   = 'myecoride';       // 🔑 Nom de la base de données
$user = 'root';            // 🔐 Utilisateur MySQL
$pass = '';                // 🔐 Mot de passe (souvent vide en local)
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
