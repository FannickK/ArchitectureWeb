<?php
require_once 'ConseillerDAO.php';

class ConseillerDO {
    private $conseillerDAO;

    public function __construct() {
        $this->conseillerDAO = new ConseillerDAO();
    }

    public function obtenirTousLesConseillers() {
        return $this->conseillerDAO->obtenirTousLesConseillers();
    }
}
?>