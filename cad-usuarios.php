<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de Usuário </title>
     <link rel= "stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<section class ="card-form">
   <div class= "form header">
    <h2> <i class= "fa solid fa-user-plus"> Novo Usuário </i> </h2>
<p> Preencha os dados abaixo para registrar um novo usuário.</p>

</div>

 <form action= "processa.php" method="POST">
 <div class="form-group">
    <label for="nome">  Nome Completo  </label>
    <input type="text" if="nome" name="nome" placeholder = "Ex: Leonardo Rodrigues" required>
 </div>

 <div class= "form-group">
    <label for="email"> E-mail > </label>
    <input type= "email" id="email" name="email" placeholder="nome@empresa.com" required>
 </div>

 <div class="form-row">
    <div class="form-group flex-1">
            <label for="senha"> Senha  </label>
            <input type="password" id="senha" name="senha" required>
 </div>
 <div class="form-group flex-1">
    <label for="nivel"> Nivel </label>
    <select id="nivel" name="nivel">
        <option value="1"> Usuario </option>
        <option value="2"> Administrador </option>
        <option value="3"> Terceiro </option>
    </select>
</div>

 <div class="form-actions">
    <button type="submit" class="btn-save"> Finalizar Cadastro </button>
    <a href="index.php" class="btn-cancel"> Cancelar </a>


 </div>
</form>
<body>
    <footer>
    <p> &copy; <?php echo date ('Y'); ?> - Desenvolvido na  aula de Web I - Entre em contato conosco: 0800-7070-6969 </p>
</footer>
</body>
</html>
