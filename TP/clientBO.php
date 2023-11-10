<?php
class ClientBO {
    public $ID_Client;
    public $ID_Conseiller;
    public $Prenom;
    public $Nom;
    public $Adresse;
    public $Telephone;
    public $Email;
    public $DOB;
    public $Situation_F;

    public function __construct($id, $idConseiller, $prenom, $nom, $adresse, $telephone, $email, $dob, $situationF) {
        $this->ID_Client = $id;
        $this->ID_Conseiller = $idConseiller;
        $this->Prenom = $prenom;
        $this->Nom = $nom;
        $this->Adresse = $adresse;
        $this->Telephone = $telephone;
        $this->Email = $email;
        $this->DOB = $dob;
        $this->Situation_F = $situationF;
    }
}
?>