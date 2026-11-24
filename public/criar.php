<?php 

require_once __DIR__ . '/../repositories/ClienteRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = new Cliente (
        $_POST['nome'],
        $_POST['email'],
        $_POST['documento']
    );
    (new ClienteRepository())->criar($cliente);
    header("Location: index.php");
    exit;
}

?>
    <form action="" method="POST">
        <input type="text" id="nome" name="nome" placeholder="Nome" required><br>
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <input type="text" id="documento" name="documento" placeholder="CPF/CNPJ" required><br>
        <button>Salvar</button>
    </form>