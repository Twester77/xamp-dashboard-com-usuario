<div class="perfil-usuario">
    <img src="https://ui-avatars.com/api/?name=Leonardo+Florindo&background=008080&color=fff" alt="Avatar">
    <span>
        <?php 
            echo isset($usuarioLogado) ? $usuarioLogado : "Leonardo Florindo"; 
        ?>
    </span>
</div>

<ul>
    <li><a href="index.php">Início</a></li>
    <li><a href="categorias.php">Categorias</a></li>
    <li><a href="posts.php">Postagens</a></li>
    <li><a href="usuarios.php">Usuários</a></li>
</ul>