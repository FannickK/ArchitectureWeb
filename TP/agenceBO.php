<?php
class AgenceBO {
    public $ID_Agence;
    public $Nom_Agence;
    public $Adresse;
    public $Ville;
    public $Code_Postal;
    public $Pays;

    public function __construct($id, $nomAgence, $adresse, $ville, $codePostal, $pays) {
        $this->ID_Agence = $id;
        $this->Nom_Agence = $nomAgence;
        $this->Adresse = $adresse;
        $this->Ville = $ville;
        $this->Code_Postal = $codePostal;
        $this->Pays = $pays;
    }
}
?>