<?php
require_once 'db.php';

class LigneCompteDAO {
    private $pdo;

    public function __construct() {
        global $pdo; // Utilise la connexion PDO globale définie dans le fichier db.php
        $this->pdo = $pdo;
    }

    public function obtenirToutesLesLignesComptes() {
        try {
            $query = "SELECT * FROM Lignes_Comptes";
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur de récupération des lignes de comptes : " . $e->getMessage());
        }
    }
}
?>