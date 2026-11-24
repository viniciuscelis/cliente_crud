<?php 

require_once __DIR__ . '/../repositories/ClienteRepository.php';

if (isset($_GET['id'])) {
    (new ClienteRepository())->excluir($_GET['id']);
}

header("Location: index.php");
exit;
