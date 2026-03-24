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
                    <h2> Gestão de Postagens </h2>
                    <p> Visualize e gerencie as postagens da comunidade. </p>
                    <?php 
                    if($nivelAcesso == 2) { echo '<span class="badge ativo">Administrador</span>'; }
                    else { echo '<span class="badge inativo">Usuário Comum</span>'; }
                    ?>
                </div>

                <a href="cad-postagem.php" class="btn-acao btn-cadastrar" style="text-decoration: none;">
                    <i class="fa-solid fa-plus"></i> Nova Postagem
                </a>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th> Autor </th> 
                            <th> Título </th>
                            <th> Conteúdo </th>
                            <th> Categoria </th>
                            <th> Status </th>
                            <th> Ações </th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <td> Leonardo </td>
                            <td> Holiday foi Muito </td>
                            <td class="col-conteudo"> A festa de ontem seria interditada pela polícia. Só os brabo! Valeu galera da Octabit, campeonato de CSzinho e Fifinha e a festa tava foda demais bora marcar mais vezes! </td>
                            <td> Eventos e Festas </td>
                            <td> <span class="badge ativo"> Ativo </span> </td>
                            <td> 
                                <button type="button" class="btn-acao btn-visualizar" 
                                    data-title="A festa de ontem seria interditada pela polícia. Só os brabo! Valeu galera da Octabit, campeonato de CSzinho e Fifinha e a festa tava foda demais bora marcar mais vezes!">
                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                </button>
                                <button type="button" class="btn-acao btn-editar"><i class="fa-solid fa-pen"></i></button>
                                <button type="button" class="btn-acao btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td> Eric </td>
                            <td> Monitoria de Programação Web 1 </td>
                            <td class="col-conteudo"> Em breve mais informações sobre os horários da Monitoria pra vocês, fiquem no aguardo! Provavelmente será realizado de sábado e domingo e aos feriados, já estamos acertando isso com os monitores. </td>
                            <td> Perguntas e Dúvidas </td>
                            <td> <span class="badge ativo"> Ativo </span> </td>
                            <td> 
                                <button type="button" class="btn-acao btn-visualizar" 
                                    data-title="Em breve mais informações sobre os horários da Monitoria pra vocês, fiquem no aguardo! Provavelmente será realizado de sábado e domingo e aos feriados, já estamos acertando esses detalhes com os monitores.">
                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                </button>
                                <button type="button" class="btn-acao btn-editar"><i class="fa-solid fa-pen"></i></button>
                                <button type="button" class="btn-acao btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td> João Lusca </td>
                            <td> Ranço desse povo ! </td>
                            <td class="col-conteudo"> Oração hoje as 23:99 pela prova de Lógica de Programação... NÃO AGUENTO MAIS VOU TRANCAR ESSA PORRA! </td>
                            <td> Desabafo/Reclamação </td>
                            <td> <span class="badge ativo"> Ativo </span> </td>
                            <td> 
                                <button type="button" class="btn-acao btn-visualizar" 
                                    data-title="Oração hoje as 23:99 pela prova de Lógica de Programação... NÃO AGUENTO MAIS VOU TRANCAR ESSA PORRA!">
                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                </button>
                                <button type="button" class="btn-acao btn-editar"><i class="fa-solid fa-pen"></i></button>
                                <button type="button" class="btn-acao btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td> Anônimo </td>
                            <td> Que mina linda, meu señor... </td>
                            <td class="col-conteudo"> Gente alguém sabe da menina do período da tarde que tava subindo o ônibus da Facul ( acho que era de VG , alguém me socorre aí 😅), de cabelo ruivo e meio curtinho. Gata me chama de hacker e bora fazer um programa qualquer dia desses. </td>
                            <td> Correio Elegante </td>
                            <td> <span class="badge ativo"> Ativo </span> </td>
                            <td> 
                                <button type="button" class="btn-acao btn-visualizar" 
                                    data-title="Gente alguém sabe da menina do período da tarde que tava subindo o ônibus da Facul ( acho que era de VG , alguém me socorre 😅), de cabelo ruivo e meio curtinho. Gata me chama de hacker e bora fazer um programa qualquer dia desses.">
                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                </button>
                                <button type="button" class="btn-acao btn-editar"><i class="fa-solid fa-pen"></i></button>
                                <button type="button" class="btn-acao btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table> 
            </div> 
        </main>
    </div> <footer>
        <?php include 'footer.php'; ?> 
    </footer>
</body>
</html>