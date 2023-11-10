<?php
require_once 'LigneCompteDAO.php';

class LigneCompteDO {
    private $ligneCompteDAO;

    public function __construct() {
        $this->ligneCompteDAO = new LigneCompteDAO();
    }

    public function obtenirToutesLesLignesComptes() {
        return $this->ligneCompteDAO->obtenirToutesLesLignesComptes();
    }
}
?>