<style>
    <?php include 'style.css'; ?>
</style>

<?php 
    include_once ('C:/xampp/htdocs/Kifila/backend/getDataUser.php')
?>

<nav>
    <div class="navbar">
        <div class="logo">
            <h2 id="logo">Kifila</h2>
        </div>
        <div class="navbar-menu">
            <ul class="menu">
                <?php if(verificaTipoUsuario() == 2) { ?>
                    <li class="menu-item">
                        <a href="../../pages/dashboard_pj">
                            Dashboard
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="../../pages/filas">
                            Filas
                        </a>
                    </li>
                <?php }?>
                <li class="menu-item">
                    <a href="../../pages/user">
                        Perfil
                    </a>
                </li>       
            </ul>
        </div>
    </div>
</nav>