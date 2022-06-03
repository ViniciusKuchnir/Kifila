<?php
    require('../../backend/conectionBD.php');
    require('../../backend/dashboard_pf.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('../../components/head.php'); ?>
    <title>Kifila - Dashboard</title>
</head>
<body>
    <?php require('../../components/navbar/navbar.php') ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h2>Olá, <?php echo nameUser($_COOKIE['email'])?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <h2>Filas que você se encontra:</h2>
                <div class="queue-user">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Fila SUS - Uberaba</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Você está na posição:</h6>
                                    <div class="position">
                                        <i class="fa-solid fa-person-arrow-down-to-line"></i>
                                        <p class="position-number">8</p>
                                    </div>
                                    <div class="buttons">
                                        <a href="#">
                                            <button class="btn">Sair da Fila</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('../../components/scripts.php');?>
</body>
</html>