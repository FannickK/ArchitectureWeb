<?php
class LigneCompteBO {
    public $ID_Ligne_Compte;
    public $ID_Compte;
    public $Historique_Transactions;
    public $Montant;
    public $Date_Transaction;
    public $Heure_Transaction;

    public function __construct($id, $idCompte, $historiqueTransactions, $montant, $dateTransaction, $heureTransaction) {
        $this->ID_Ligne_Compte = $id;
        $this->ID_Compte = $idCompte;
        $this->Historique_Transactions = $historiqueTransactions;
        $this->Montant = $montant;
        $this->Date_Transaction = $dateTransaction;
        $this->Heure_Transaction = $heureTransaction;
    }
}
?>