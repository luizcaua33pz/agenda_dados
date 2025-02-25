<?php
session_start();

// Defina as variáveis de usuário e senha corretas
$email_correto = "email";
$senha_correta = "senha";

// Verifique se o usuário e senha estão corretos
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == $email_correto && $senha == $senha_correta) {
        // Acesso concedido, defina a variável de sessão e redirecione
        $_SESSION['acesso'] = true;
        header('Location: sistema.php');
        exit;
    } else {
        // Acesso negado, exiba mensagem de erro
        echo "Usuário ou senha incorretos!";
    }
}
?>

<!-- Formulário de login -->
<form action="usuario.php" method="post">
    <label for="usuario">Usuário:</label>
    <input type="text" id="usuario" name="usuario"><br><br>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha"><br><br>
    <input type="submit" value="Entrar">
</form>