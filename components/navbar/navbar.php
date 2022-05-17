<style>
    <?php include 'style.css'; ?>
</style>

<?php 
    include_once ('C:/xampp/htdocs/Kifila/backend/getDataUser.php')
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 head">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        <h2 id="logo">Kifila</h2>
                    </div>
                </div>
                <div class="col-md-10">
                    <ul class="menu-items">
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
                            <a href="../../pages/pesquisarFilas">
                                Filas
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../../pages/user">
                                Perfil
                            </a>
                        </li>
                    </ul>
                </div>
            </div>        
        </div>
    </div>
</div>




<!-- <ul class="menu">
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
                            </ul> -->