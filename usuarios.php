<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao Sistema</title>
    <link rel= "stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<main>
    <div class="header-content">
        <h2> Gestão de Usuários </h2>
        <p> Visualize e gerencie as permissões de usuários do sistema. </p>
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
                <td> Ativo </td>
               <td> <a href="#"class="btn-acao btn-editar"> Editar
                   <i class="fa-solid fa-pen-to-square"> </i> 
                </a>
                <a href="#"class="btn-acao btn-excluir"> Excluir 
                   <i class="fa-solid fa-trash"> </i>
                 </a>
                 <a href="#"class="btn-acao btn-visualizar"> Visualizar
                  <i class="fa-utility fa-magnifying-glass-plus"> </i> 
                </a>
               </td>

            </tr>

            <tr>
                <td> 02 </td>            
                <td>João Lucas </td>
                <td> Joaolucas_eh_gay@unifev.edu.br</td>
                <td> Administrador </td>
                <td> Ativo </td>
                <td>
                <a href="#"class="btn-acao btn-editar"> Editar
                     <i class="fa-solid fa-pen-to-square" > </i> 
                </a>
                <a href="#"class="btn-acao btn-excluir"> Excluir </a>
                     <i class="fa-solid fa-trash"> </i> 
                </a>
                <a href="#"class="btn-acao btn-visualizar"> Visualizar
                     <i class="fa-utility fa-magnifying-glass-plus"> </i>
                 </a>
                </td>
            </tr>           
    
         </tbody>

   </table>              
        
    
</div>
</main>
<body>
</body>
</html>