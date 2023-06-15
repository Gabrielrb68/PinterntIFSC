<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

// Obtém todos os usuários cadastrados
$users = isset($_SESSION['users']) ? $_SESSION['users'] : array();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <button><a href="logout.php">Sair</a></button> 

    <table>
        <tr>
            <th>Email</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Altura</th>
            <th>Peso</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['nome']; ?></td>
                <td><?php echo $user['idade']; ?></td>
                <td><?php echo $user['altura']; ?></td>
                <td><?php echo $user['peso']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button type="button"><a href="registro.php">Cadastrar</a></button> 
</body>
</html>
