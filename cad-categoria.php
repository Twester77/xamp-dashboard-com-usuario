
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de Categoria </title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body> 
    <div class="dashboard-container">
      <nav>
         <?php include 'menu.php'; ?>
      </nav>
    <main>    
      <section class="card-form"> 
       <div class="form-header"> 
         <h2>
             <i class="fa-solid fa-list-check" style="margin-bottom:10px;"> </i> Nova Categoria 
        </h2>
         <p> Crie uma nova seção para organizar os desabafos e dúvidas da galera.</p> 
       </div>

       <form action="insere-categoria.php" method="POST">
        <div class="form-group">
            <label for="nome_categoria"> Nome da Categoria </label>
            <input type="text" id="nome_categoria" name="nome_categoria" 
            maxlength="50" placeholder="Ex: Vagas de República" required>
             <small>Máximo 50 caracteres.</small>
        <div class="form-group">
            <label for="descricao">Descrição / Regras</label>
            <textarea id="descricao" name="descricao" rows="4" 
              maxlength="200" placeholder="Explique as regras desta categoria..."></textarea>
            <small>Máximo 200 caracteres.</small>

        <div class="form-group">
            <label for="status">Status da Categoria</label>
            <select id="status" name="status">
                <option value="ativo">Ativo (Lançar agora)</option>
                <option value="inativo">Inativo (Deixar como Rascunho)</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">Criar Categoria</button>
            <a href="categorias.php" class="btn-cancel" style="text-decoration: none;">Cancelar</a>
        </div>
     </form>
 </section>
</main>
</div>
<footer>
<?php include 'footer.php'; ?>
</footer>    
</body>
</html>