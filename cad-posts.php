<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de Postagem </title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body> 
    <div class="dashboard-container">
      <nav>
         <?php include 'menu.php'; ?>
      </nav>
        

        <main style="flex: 1; display: flex; align-items: center; justify-content: center; padding: 20px;"> 
            <section class="card-form"> 
                <div class="form-header">
                    <h2> <i class="fa-solid fa-message"> </i> Nova Postagem  </h2>
                    <p>Compartilhe novidades, dúvidas,  mande aquele correio elegante pro crush ou só cause a discórdia mesmo. </p> 
                </div>
                   <form action="insere-postagem.php" method="POST">
                   <div class="form-group">
                   <label for="titulo">Título da Postagem</label>
                   <input type="text" id="titulo" name="titulo" placeholder="Dê um título ao seu post" required>
                 </div>
                      <div class="form-group"> 
                        <select name="categoria">
                           <option value="1">Dúvidas Acadêmicas</option>
                           <option value="2">Correio Elegante</option>
                           <option value="3">Eventos e Festas</option>
                           <option value="4">Achados e Perdidos</option>
                           <option value="5">Desabafo/Reclamação</option>
                         </select>
                      </div>

                    <div class="form-group">
                          <label for="conteudo">Conteúdo</label>
                          <textarea id="conteudo" name="conteudo" rows="6" maxlength="800" placeholder="Escreva aqui sua mensagem (máximo 800 caracteres)..." required></textarea>
                          <small style="color: #666;">Máximo: 800 caracteres.</small>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn-save"> Publicar </button>
                        <a href="posts.php" class="btn-cancel" style="text-decoration: none;">Cancelar</a>
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