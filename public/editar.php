<?php 

require_once __DIR__ . '/../repositories/ClienteRepository.php';

$repo = new ClienteRepository();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = new Cliente(
        $_POST['nome'],
        $_POST['email'],
        $_POST['documento']
    );
    $repo->atualizar($_POST['id'], $cliente);
    header("Location: index.php");
    exit;
}

$cliente = $repo->buscarPorId($_GET['id'] ?? 0);

if (!$cliente) {
    header("Location: index.php");
    exit;
}

?>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
        <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" required><br>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" required><br>
        <input type="text" id="documento" name="documento" value="<?= htmlspecialchars($cliente['documentos']) ?>" required><br>
        <button>Atualizar</button>
    </form>