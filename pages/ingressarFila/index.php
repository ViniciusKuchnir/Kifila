<?php
    require('../../backend/conectionBD.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('../../components/head.php'); ?>
    <title>Kifila - Ingressar Fila</title>
</head>
<body>
    <?php require('../../components/navbar/navbar.php') ?>

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 search">
                <div class="mb-3 form">
                  <label for="name-queue" class="form-label">Pesquisar Fila</label>
                  <input type="text" class="form-control" name="name-queue" id="name-queue" onkeyup="searchQueue(this)" aria-describedby="helpId" placeholder="Informe o ID ou NOME da fila">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="queues" id="queues">
                <!--Cards-->
            </div>
        </div>
    </div>
    
    <?php require('../../components/scripts.php');?>
</body>
</html>