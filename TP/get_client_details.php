<?php
// Inclure le fichier de connexion à la base de données
require_once 'db.php';

// Vérifier si le paramètre client_id est passé dans l'URL
if (isset($_GET['client_id'])) {
    $client_id = $_GET['client_id'];

    try {
        // Préparer la requête SQL pour récupérer les détails du client
        $query = "SELECT * FROM Clients WHERE ID_Client = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$client_id]);

        // Récupérer les résultats de la requête
        $client_details = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier si le client existe
        if ($client_details) {
            // Convertir les résultats en JSON et les renvoyer
            header('Content-Type: application/json');
            echo json_encode($client_details);
        } else {
            // Le client n'existe pas
            echo 'Client non trouvé.';
        }
    } catch (PDOException $e) {
        // Gérer les erreurs de base de données
        echo 'Erreur de base de données : ' . $e->getMessage();
    }
} else {
    // Paramètre client_id manquant dans l'URL
    echo 'Paramètre client_id manquant dans l\'URL.';
}
?>

