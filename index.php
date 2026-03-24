<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard aleatório</title>
    <link rel= "stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body> 
    <div class="dashboard-container">
        <nav>
            <?php include 'menu.php';?>
        </nav>
        <main>
            <section class="container-cards">

                <article>
                    <h2> Módulo de Usuários </h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área; </p>
                    <a href="usuarios.php" class="btn"> Acessar</a>
                </article>
                <article>
                    <h2> Módulo de Postagens </h2>
                    <p>Gerencie os projetos e tarefas do sistema nesta área; </p>
                    <a href="#" class="btn"> Acessar</a>
                </article>
                <article>
                    <h2> Módulo de Categorias </h2>
                    <p> Gerencie e exporte relatórios do sistema nessa área</p>
                    <a href="#" class="btn"> Acessar</a>
                </article>
            </section>
        </main>
    </div>
   
</body>

<footer>
    <?php include 'footer.php'; ?>
</footer>

</html>