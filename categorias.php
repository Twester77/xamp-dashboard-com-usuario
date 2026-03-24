<?php
 $nivelAcesso = 2; // Simulação
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gestão de Postagens </title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <nav>
            <?php include 'menu.php'; ?> 
        </nav>

        <main> 
            <div class="header-content"> 
                <div class="header-title">
                    <h2> Gestão de Categorias </h2>
                    <p> Visualize e gerencie as categorias das postagens. </p>
                    <?php 
                    if($nivelAcesso == 2) { echo '<span class="badge ativo">Administrador</span>'; }
                    else { echo '<span class="badge inativo">Usuário Comum</span>'; }
                    ?>
                </div>
                <a href="cad-categoria.php" class="btn-acao btn-cadastrar" style="text-decoration: none;">
                    <i class="fa-solid fa-plus"></i> Nova Categoria
                </a>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th> ID </th> 
                            <th> Nome da Categoria </th>
                            <th> Descrição </th>
                            <th> Status </th>
                            <th> Ações </th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <td> 01 </td>
                            <td> Eventos e Festas </td>
                            <td> Postagens sobre festas, eventos da atléticas e afins. </td>
                            <td> <span class="badge ativo"> Ativo </span> </td>
                            <td> 
                                <button type="button" class="btn-acao btn-editar"><i class="fa-solid fa-pen"></i></button>
                                <button type="button" class="btn-acao btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td> 02 </td>
                            <td> Desabafo/Reclamação </td>
                            <td> Críticas da comunidade, bem como exposição das mazelas do meio Universitário contemporâneo. </td>
                            <td> <span class="badge ativo"> Ativo </span> </td>
                            <td> 
                                <button type="button" class="btn-acao btn-editar"><i class="fa-solid fa-pen"></i></button>
                                <button type="button" class="btn-acao btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr>
                           <td> 03 </td>
                            <td> Perguntas e Dúvidas </td>
                            <td> Conteúdos de aula e materiais acadêmicos. </td>
                            <td> <span class="badge ativo"> Ativo </span> </td>
                            <td> 
                                <button type="button" class="btn-acao btn-editar"><i class="fa-solid fa-pen"></i></button>
                                <button type="button" class="btn-acao btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </td> 
                        </tr>
                        <tr>
                           <td> 04 </td>
                            <td> Correio Elegante </td>
                            <td> Paqueras, cantadas e pedidos de namoro </td>
                            <td> <span class="badge ativo"> Ativo </span> </td>
                            <td> 
                                <button type="button" class="btn-acao btn-editar"><i class="fa-solid fa-pen"></i></button>
                                <button type="button" class="btn-acao btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </td> 
                        </tr>
                        <tr>
                           <td> 05 </td>
                            <td> Perguntas e Dúvidas </td>
                            <td> Conteúdos de sala de aula e materiais acadêmicos. </td>
                            <td> <span class="badge ativo"> Ativo </span> </td>
                            <td> 
                                <button type="button" class="btn-acao btn-editar"><i class="fa-solid fa-pen"></i></button>
                                <button type="button" class="btn-acao btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </td> 
                    </tbody>
                </table> 
            </div> 
        </main>
    </div> <footer>
        <?php include 'footer.php'; ?> 
    </footer>
</body>
</html>