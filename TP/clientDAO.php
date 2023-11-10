<?php
require_once 'db.php';
require_once 'ClientDTO.php';

class ClientDAO {
    private $pdo;

    public function __construct() {
        global $pdo; // Utilise la connexion PDO globale définie dans le fichier db.php
        $this->pdo = $pdo;
    }

    public function obtenirTousLesClients() {
        try {
            $query = "SELECT * FROM clients";
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_CLASS, 'ClientDTO');
        } catch (PDOException $e) {
            die("Erreur de récupération des clients : " . $e->getMessage());
        }
    }

    public function obtenirDetailsClient($clientId) {
        try {
            $query = "SELECT * FROM clients WHERE ID_Client = ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$clientId]);
            return $stmt->fetchObject('ClientDTO');
        } catch (PDOException $e) {
            die("Erreur de récupération des détails du client : " . $e->getMessage());
        }
    }
}
?>
