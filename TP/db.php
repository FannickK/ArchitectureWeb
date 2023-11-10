<?php
$hostname = 'localhost'; // Nom d'hôte du serveur MySQL (généralement 'localhost')
$database = 'gestion_comptes_bancaires'; // Nom de votre base de données
$username = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe (laissez vide s'il n'y en a pas)

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
