<?php  
    require('../../backend/conectionBD.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('../../components/head.php'); ?>
    <title>Kifila - Criação Filas</title>
</head>
<body>
    <?php require('../../components/navbar/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="title">Criar Fila</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="../../backend/criarFilas.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="name-queue" id="name-queue" minlength="2" aria-describedby="helpId" placeholder="Digite o nome da fila" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                              <label for="" class="form-label">Tempo de Tolerância</label>
                              <input type="time" class="form-control" name="tolerance-time" id="tolerance-time" aria-describedby="helpId" placeholder="Informe o tempo de tolerância para atrasos" required>
                              <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Descrição</label>
                                <textarea class="form-control" name="description-queue" id="description-queue" rows="3" placeholder="Digite uma descrição para a fila" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 buttons">
                            <button type="submit" class="button">Criar Fila</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require('../../components/scripts.php');?>
</body>
</html>