<?php
class CompteBO {
    public $ID_Compte;
    public $ID_Agence;
    public $ID_Client;
    public $Type_Compte;
    public $Solde;
    public $Date_Ouverture;

    public function __construct($id, $idAgence, $idClient, $typeCompte, $solde, $dateOuverture) {
        $this->ID_Compte = $id;
        $this->ID_Agence = $idAgence;
        $this->ID_Client = $idClient;
        $this->Type_Compte = $typeCompte;
        $this->Solde = $solde;
        $this->Date_Ouverture = $dateOuverture;
    }
}
?>