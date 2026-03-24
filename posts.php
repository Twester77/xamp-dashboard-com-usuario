<?php
 $nivelAcesso = 2;
if($nivelAcesso == 2) { echo '<span class="badge ativo" >Administrador</span>';}
else {
    echo '<span class = "badge inativo"> Usuário Comum </span>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Acesso ao Sistema </title>
    <link rel= "stylesheet" href="dash.css">
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
            <p> Visualize e gerencie as permissões de usuários do sistema. </p>
        </div>

       <button type="button" class = "btn-acao btn-cadastrar" >
        <a href = "cad-usuarios.php">  <i class="fa-solid fa-user-plus"> </i> Novo Usuário </a>
    </div>

<div class="table-responsive">

    <table>
        <thead>
            <tr>
                <th> ID</th> 
                <th> Nome </th>
                <th> E-mail </th>
                <th> Acesso </th>
                <th> Status </th>
                <th> Acões </th>
            </tr>
        </thead>

    
        <tbody>
            <tr>
                <td> 01 </td>
                <td> Leonardo Florindo </td>
                <td> 87826@unifev.edu.br </td>
                <td> Administrador </td>

                <td> <span class="badge ativo"> Ativo </span> </td>
               <td> 
                <button type="button" class="btn-acao btn-editar">
                    <i class="fa-solid fa-pen-to-square"> </i> 
                </button>
                <button type="button" class="btn-acao btn-excluir">  
                    <i class="fa-solid fa-trash"> </i>
                </button>
                <button type="button" class="btn-acao btn-visualizar"> 
                    <i class="fa-solid fa-magnifying-glass-plus"> </i>
                </button>
               </td>
            </tr>

            <tr>
                <td> 02 </td>            
                <td> João Lucas </td>
                <td> lucasjoao@unifev.edu.br</td>
                <td> Administrador </td>
                <td> <span class="badge ativo"> Ativo </span> </td>
                <td>
                <button type="button" class="btn-acao btn-editar"> 
                     <i class="fa-solid fa-pen-to-square" > </i> 
                </button>
            
                <button type="button" class="btn-acao btn-excluir">
                     <i class="fa-solid fa-trash"> </i> 
                </button>