<?php
session_start();

// Verifica se o formulário de cadastro foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $senha = $_POST['senha'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    // Cria um novo usuário com os dados fornecidos
    $user = array(
        'email' => $email,
        'nome' => $nome,
        'idade' => $idade,
        'senha' => $senha,
        'altura' => $altura,
        'peso' => $peso
        
    );

    // Adiciona o novo usuário à lista de usuários cadastrados na sessão
    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = array();
    }
    $_SESSION['users'][] = $user;

    // Redireciona para a página de login
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" required><br><br>
        
        <label for="peso">Peso:</label>
        <input type="number" id="peso" name="peso" required><br><br>
        <input type="submit" value="Cadastrar">

    </form>
</body>
</html>
