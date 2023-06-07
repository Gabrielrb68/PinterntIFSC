<?php
session_start();

// Verifica se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o login e a senha estão corretos (você pode substituir essa lógica pelo seu sistema de autenticação)
    if ($username === 'admin' && $password === 'senha123') {
        // Autenticação bem-sucedida, define a sessão como autenticada
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redireciona para a página principal
        header('Location: index.php');
        exit;
    } else {
        // Autenticação falhou
        $error = 'Usuário ou senha inválidos';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)): ?>
        <div><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Entrar">
    </form>
    <br>
    <a href="registro.php">Cadastrar</a>
</body>
</html>
