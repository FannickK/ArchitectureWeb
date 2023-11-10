<?php
require_once 'ClientDO.php';

$clientDO = new ClientDO();
$clients = $clientDO->obtenirTousLesClients();

header('Content-Type: application/json');
echo json_encode($clients);
?>
