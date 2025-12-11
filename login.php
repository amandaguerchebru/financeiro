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
<html lang="pt-br" data-bs-theme="light>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Financeiro</title>
    <link rel="stylesheet" href="style-login.css">
</head>

<body>
    <?php include 'bootstrap.php' ?>
    
    <script>
    // Alterna entre claro e escuro manualmente
    function alternarTema() {
        const html = document.documentElement;
        const temaAtual = html.getAttribute("data-bs-theme") || "light";
        html.setAttribute("data-bs-theme", temaAtual === "light" ? "dark" : "light");
    }
    </script>

    <div class="minion"></div>

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

    <p class="registrar">Não tem conta? <a href="registro.php">Cadastre-se aqui.</a></p>

    <!-- BOTÃO DE TEMA -->
    <button class="btn btn-light mt-3" onclick="alternarTema()">Alterar Tema</button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SCRIPT PARA TROCAR O TEMA -->
    <script>
        function alternarTema() {
            const html = document.documentElement;
            const temaAtual = html.getAttribute("data-bs-theme") || "light";
            html.setAttribute("data-bs-theme", temaAtual === "light" ? "dark" : "light");
        }
    </script>


</body>

</html>