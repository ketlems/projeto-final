<?php
session_start(); // Inicia a sessão
require_once 'conexao.php'; // Inclui a conexão com o banco

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $senha = $_POST["senha"];
   $stmt = $conn->prepare("INSERT INTO cadastro (nome, email, senha) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $nome, $email, $senha); 

   if ($stmt->execute()) {
       $_SESSION['message'] = "Conta criada com sucesso!";
       header("Location: index.php"); // Redireciona para a página inicial
       exit(0);
   } else {
       echo "Erro ao inserir os dados: " . $stmt->error;
   }

   
   $stmt->close();
   $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Biblioket</title>
</head>
<body>
   <div class="cadastro">
       <img src="img/logo.png" class="logo">

       <form action="" method="POST">
           <label for="name">Nome Completo</label>
           <input type="text" id="name" name="nome" placeholder="Digite seu nome completo" required>

           <p>
               <label for="email">E-mail</label>
               <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
           </p>

           <p>
               <label for="password">Senha</label>
               <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
           </p>

           <p>
               <label for="confirm-password">Confirmar Senha</label>
               <input type="password" id="confirm-password" name="confirmar_senha" placeholder="Confirme sua senha" required>
           </p>
           
           <button type="submit" class="button">Cadastrar</button>
       </form>
   </div>

   <script>
       // Validação de senha (no lado do cliente)
       const form = document.querySelector('form');
       form.addEventListener('submit', (e) => {
           const senha = document.getElementById('password').value;
           const confirmarSenha = document.getElementById('confirmar_senha').value;


            if (senha !== confirmarSenha) {
                 e.preventDefault();
                alert('As senhas não coincidem!');
              }
              });
</script>
</body>
</html>
