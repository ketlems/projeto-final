<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Biblioket</title>
</head>
<body class="body2">
    <div class="login">

        <img src="img/logo.png" class="logo">
        <form action="/login" method="POST">
            <label for="username">Usuário</label>
            <input type="text" id="username" name="username" placeholder="Digite seu nome de usuário" required>
            
            <p> <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required></p>
            
            <a href="seuslivros.php" class="button">Entrar</a>
        </form>
        <div class="link">
            Não tem uma conta? <p>
            <a href="cadastro.php" class="button">Cadastrar</a></p>
            
        </div>
    </div>
<?php
session_start(); // Inicia os trabalhos com sessão
require_once 'conexao.php'; // Inclui a conexão com o banco
include('msg.php'); // Inclui o arquivo que mostra mensagens
if ($_SERVER["REQUEST_METHOD"] === "POST") { //verifica se será chamado via método post
    $nome = $_POST["nome"]; //pega a variável prontuario q vem via POST
    $senha = $_POST["senha"]; //pega a variavel nome que vem via POST
    $sql = "SELECT * from login (nome, senha) VALUES ('$nome', '$senha')"; //Cria o insert!
    if ($conn->query($sql) === TRUE) { // Executa o insert e verifica!
        $_SESSION['message'] = "Login aceito"; //Cria a mensagem!
        header("Location: index.php"); //Chama o index!
        exit(0);
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); //Fecha a conexão com o banco
}
?>
</body>
</html>