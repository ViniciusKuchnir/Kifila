<?php  
    require('../../backend/conectionBD.php');
    require('../../backend/filas.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('../../components/head.php'); ?>
    <title>Kifila - Filas</title>
</head>
<body>
    <?php require('../../components/navbar/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="title">Filas</h1>
            </div>
        </div>
        <div class="row">
            
                <?php 
                    $filas = getFilas();
                    for ($i=0; $i < count($filas) ; $i++) { 
                ?>
                    <div class="col-md-12 mb-3"> 
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Código: <?php echo $filas[$i]['idfila']?></h5>
                                <h5 class="card-title">Nome Fila: <?php echo $filas[$i]['nome']?></h5>
                                <h6 class="card-subtitle mb-3 text-muted">Data de Criação: <?php echo $filas[$i]['datafila']?></h6>
                                <p class="card-text">Descrição: <?php echo $filas[$i]['descricao'] ?></p>
                                <div class="row">
                                    <div class="col-md-12 buttons-card">
                                        <a href="../../backend/excluirFila.php?idfila=<?php echo $filas[$i]['idfila']?>">
                                            <button type="button" class="button-card" id="delet-button" onclick="excluirFila(<?php echo $filas[$i]['idfila']?>)">Excluir Fila</button>    
                                        </a>
                                        <a href="../../pages/acompanharFila/index.php?idfila=<?php echo $filas[$i]['idfila'] ?>">
                                            <button type="button" class="button-card" id="follow-button" onclick="">Acompanhar Fila</button>    
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                <?php  
                    }
                ?>
                
        </div>
        <div class="row">
            <div class="col-md-12 button-create">
                <a href="../criarFila/index.php">
                    <button type="button" id="btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </a>
            </div>
        </div>
    </div>
    
    <?php require('../../components/scripts.php');?>
</body>
</html>