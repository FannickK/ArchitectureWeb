<?php
require_once 'CompteDAO.php';

class CompteDO {
    private $compteDAO;

    public function __construct() {
        $this->compteDAO = new CompteDAO();
    }

    public function obtenirTousLesComptes() {
        return $this->compteDAO->obtenirTousLesComptes();
    }
}
