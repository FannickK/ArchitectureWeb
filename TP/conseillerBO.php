<?php
class ConseillerBO {
    public $ID_Conseiller;
    public $ID_Agence;
    public $Prenom;
    public $Nom;
    public $Email;
    public $Telephone;

    public function __construct($id, $idAgence, $prenom, $nom, $email, $telephone) {
        $this->ID_Conseiller = $id;
        $this->ID_Agence = $idAgence;
        $this->Prenom = $prenom;
        $this->Nom = $nom;
        $this->Email = $email;
        $this->Telephone = $telephone;
    }
}
?>