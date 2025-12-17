<?php
require_once 'config.php';
require_once 'mensagens.php';

// Se já estiver logado, redireciona para o index
if (isset($_SESSION['usuario_id'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Sistema Financeiro</title>

    <style>
        /* REGISTRO */
        body {
            font-family: "Popins", sans-serif;
            margin: 0;
            padding: 0;
            transition: 0.35 ease, color 0.35 ease;
        }

        /* O que está no centro */
        form,
        .register-box {
            max-width: 420px;
            margin: 40px auto;
            padding: 25px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            transition: 0.3s ease, box shadow 0.3s ease;
        }

        h1,
        h2 {
            text-align: center;
            font-weight: 600;
        }

        /* Inputs */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            border: 2px solid transparent;
            background: #ffffff;
            transition: 0.25s;
            margin-bottom: 15px;
            font-size: 15px;
        }

        input focus {
            outline: none;
            border-color: #8884;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.15);
        }

        /* botão */
        button {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            border: none;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: 0.25 ease;
        }

        /* Links */
        a {
            text-decoration: none;
            font-weight: 500;
        }

        /* MODO CLARO - Amarelo  */
        .light-mode {
            background: linear-gradient(135deg, #ffe45c, #fff1a8);
            color: #2a2a2a;
        }

        /* caixa */
        .light-mode form,
        .light-mode .register-box {
            background: rgba(255, 255, 255, 0.9);
        }

        /* inputs */
        .light-mode input {
            background: #ffffff;
        }

        /* botão */
        .light-mode button {
            background: #ffeb3b;
            color: #4a4a04;
        }

        .light-mode button:hover {
            background: #ffe127;
        }

        /* links */
        .light-mode a {
            color: #4a4300;
        }

        /* MODO ESCURO  */
        .dark-mode {
            background: linear-gradient(135deg, #4b007a, #300049);
            color: #f2d9ff;
        }

        /* caixa com o email, senha... */
        .dark-mode form,
        .dark-mode .register-box {
            background: rgba (40, 0, 60, 0.7);
            color: #000;
        }

        /* inputs */
        .dark-mode input {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(255, 255, 255, 0.2);
            color: #f3dfff;
        }

        .dark-mode input::placeholder {
            color: #e6caff;
        }

        /* botão */
        .dark-mode button {
            background: #9b4bd6;
            color: white;
        }

        .dark-mode a {
            color: #eac4ff;
        }

        .jatemconta {
            text-align: center;
        }

        .modo-btn {
            position: fixed;
            top: 15px;
            width: 40px;
            height: 40px;
            right: 15px;
            font-size: 18px;
            border: none;
            border-radius: 50%;
            padding: 0;
            cursor:pointer;
        }

        .light-mode .modo-btn {
            background: #fff6a3;
        }

        .dark-mode .modo-btn {
            background: #9c4bcc;
            ;
            color: white;
        }
    </style>

</head>

<body class="light-mode">

    <?php include 'bootstrap.php' ?>

    <h1>Sistema Financeiro Pessoal</h1>
    <h2>Cadastro de Usuário</h2>

    <?php exibir_mensagem(); ?>

    <form action="registrar.php" method="POST">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required minlength="6">
        </div>

        <div>
            <label for="confirmar_senha">Confirmar Senha:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" required minlength="6">
        </div>

        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>

    <p class="jatemconta">Já tem conta? <a href="login.php">Faça login aqui</a></p>

    <button id="toggleTheme" class="modo-btn">💡</button>

    <script>
        const body = document.body;
        const toggle = document.getElementById("toggleTheme");

        toggle.addEventListener("click", () => {
            body.classList.toggle("dark-mode");
            body.classList.toggle("light-mode");
        });
    </script>

</body>

</html>