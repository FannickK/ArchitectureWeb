<?php
require_once 'ClientDAO.php';
require_once 'ClientBO.php';

class ClientDO {
    private $clientDAO;

    public function __construct() {
        $this->clientDAO = new ClientDAO();
    }

    public function obtenirTousLesClients() {
        $clientsDTO = $this->clientDAO->obtenirTousLesClients();
        $clientsBO = [];

        foreach ($clientsDTO as $clientDTO) {
            $clientsBO[] = new ClientBO(
                $clientDTO->ID_Client,
                $clientDTO->ID_Conseiller,
                $clientDTO->Prénom,
                $clientDTO->Nom,
                $clientDTO->Adresse,
                $clientDTO->Telephone,
                $clientDTO->Email,
                $clientDTO->DOB,
                $clientDTO->Situation_F
            );
        }

        return $clientsBO;
    }

    public function obtenirDetailsClient($clientId) {
        $clientDTO = $this->clientDAO->obtenirDetailsClient($clientId);

        return new ClientBO(
            $clientDTO->ID_Client,
            $clientDTO->ID_Conseiller,
            $clientDTO->Prenom,
            $clientDTO->Nom,
            $clientDTO->Adresse,
            $clientDTO->Telephone,
            $clientDTO->Email,
            $clientDTO->DOB,
            $clientDTO->Situation_F
        );
    }
}
?>