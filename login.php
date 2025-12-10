<?php
require_once 'config.php';
require_once 'mensagens.php';

// Verificar se o usuário já está logado
if (isset($_SESSION['usuario_id'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Financeiro</title>
    <link rel="stylesheet" href="style-login.css">
</head>

<body>
    <h1 class="loginh1">Login - Sistema Financeiro</h1>

    <?php exibir_mensagem(); ?>

    <form action="autenticar.php" method="post" class="formlogin">
        <div>
            <label for="email"><b>E-mail:</b></label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="senha"><b>Senha:</b></label>
            <input type="password" name="senha" id="senha" required>
        </div>
        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>

    <p>Não tem conta? <a href="registro.php">Cadastre-se aqui.</a></p>

</body>

</html>