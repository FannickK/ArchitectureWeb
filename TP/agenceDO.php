<?php
require_once 'AgenceDAO.php';

class AgenceDO {
    private $agenceDAO;

    public function __construct() {
        $this->agenceDAO = new AgenceDAO();
    }

    public function obtenirToutesLesAgences() {
        return $this->agenceDAO->obtenirToutesLesAgences();
    }
}
?>