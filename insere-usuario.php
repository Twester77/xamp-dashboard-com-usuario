<?php
  // 1. Recebe os dados do formulário via POST
  $usuario = $_POST['nome'];
  $email   = $_POST['email'];
  $senha   = $_POST['senha'];
  $nivel   = $_POST['nivel']; //  linha para pegar o nível (1, 2 ou 3 - Administrador , Usuário e  Terceiro)

  // 2. No futuro, aqui entrará o seu SQL INSERT:
  // $sql = "INSERT INTO usuarios (nome, email, senha, nivel) VALUES (...)";

  // 3. Feedback para o usuário 
  echo "<h2>Cadastro Realizado com Sucesso!</h2>";
  echo "O usuário <strong>" . htmlspecialchars($usuario) . "</strong> foi enviado para o sistema.<br>";
  echo "E-mail: " . htmlspecialchars($email) . "<br>";
  
  // Exemplo de como mostrar o nível que foi selecionado
  if ($nivel == 1) {
    echo "Perfil: <strong>Usuário Comum</strong>";
} elseif ($nivel == 2) {
    echo "Perfil: <strong>Administrador</strong>";
} elseif ($nivel == 3) {
    echo "Perfil: <strong>Prestador de Serviços / Terceiro</strong>";
}

  // 4. Link para voltar à lista
  echo "<br><br><a href='usuarios.php' style='text-decoration: none; color: teal;'>
            <button style='cursor:pointer;'>Voltar para a Lista</button>
        </a>";
?>