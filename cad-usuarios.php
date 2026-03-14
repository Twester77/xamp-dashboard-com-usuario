<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<section class card="card-form">
   <div class= "form header">
    <h2> <i class= "fa solid fa-user-plus"> Novo Usuário </i>
<p> Preencha os dados abaixo para registrar um novo usuário.</p>

</div>

 <form action= "processa.php" method="POST">
 <div class="form-group">
    <label for="nome"> Nome Completo > </label>
    <input type="text" if="nome" name="nome" placeholder ="Ex: Leonardo Rodrigues" required>
 </div>

 <div class= "form group">
    <label for="email"> E-mail > </label>
    <input type= "email" id="email" name="email" placeholder="nome@empresa.com" required>
 </div>

 <div class="form-row">
    <div class="form-group flex-1">
            <label for="senha"> Senha> </label>
            <input type="password" id="senha" name="senha" required>
 </div>
 <div class="form-group flex-1">
    <label for="nivel"> Nivel </label>
    <select id="nivel" name="nivel">
        <option value="1"> Usuario </option>
    </select>
 </div>

 <div>

 <div class="form-actions">
    <button type="submit" class="btn-save"> Finalizar Cadastro </button>
    <a href="index.php" class="btn-cancel"> Cancelar </a>


 </div>
</form>
<body>
    
</body>
</html>
