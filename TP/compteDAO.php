<?php
require_once 'db.php';

class CompteDAO {
    private $pdo;

    public function __construct() {
        global $pdo; // Utilise la connexion PDO globale définie dans le fichier db.php
        $this->pdo = $pdo;
    }

    public function obtenirTousLesComptes() {
        try {
            $query = "SELECT * FROM Comptes";
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur de récupération des comptes : " . $e->getMessage());
        }
    }
}
