<?php  
    require('../../backend/conectionBD.php');
    require('../../backend/getDataQueue.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('../../components/head.php'); ?>
    <title>Kifila - Editar Fila</title>
</head>
<body>
    <?php require('../../components/navbar/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="title">Edição da Fila: <?php echo getQueue($_GET['idfila'])['nome'] //Id passado via GET pela página filas ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 icon">
                <i class="fas fa-people-arrows"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="../../backend/editQueue.php?idfila=<?php echo $_GET['idfila'] ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Nome</label>
                                <input type="text"class="form-control" name="name-queue" id="queue-name" minlength="3" min aria-describedby="helpId" value="<?php echo getQueue($_GET['idfila'])['nome'] ?>" placeholder="Digite o nome da fila" required>
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Tempo de Tolerância</label>
                                <input type="time"class="form-control" name="tolerance-time" id="tolerance-time" aria-describedby="helpId" value="<?php echo getQueue($_GET['idfila'])['toleranciamedia'] ?>" placeholder="Digite o tempo de tolerância da fila">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Descrição</label>
                                <textarea class="form-control" name="description-queue" id="description-queue" rows="3" placeholder="Digite uma descrição para a fila" required><?php echo getQueue($_GET['idfila'])['descricao']; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 button">
                            <button type="submit" class="btn">Editar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <?php require('../../components/scripts.php');?>
</body>
</html>