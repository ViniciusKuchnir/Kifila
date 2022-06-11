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
            <div class="col-md-12 button-create mb-3">
                <a href="../criarFila/index.php">
                    <button type="button" id="btn"><i class="fa fa-plus" aria-hidden="true"></i> Criar Fila</button>
                </a>
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
                                <p><strong><div id="state-queue"><div id="<?php echo getEstadoFila($filas[$i]['idfila']) == 1 ? 'circle-activated' : 'circle-disabled' ?>"></div> <?php echo getEstadoFila($filas[$i]['idfila']) == 1 ? '<span id="queue-activated">Ativada</span>' : '<span id="queue-disabled">Desativada</span>' ?></strong></div></p>
                                <h5 class="card-title mb-3">Código: <?php echo $filas[$i]['idfila']?></h5>
                                <h5 class="card-title">Nome Fila: <?php echo $filas[$i]['nome']?></h5>
                                <h6 class="card-subtitle mb-3 text-muted">Data de Criação: <?php echo $filas[$i]['datafila']?></h6>
                                <p class="card-text">Descrição: <?php echo $filas[$i]['descricao'] ?></p>
                                <div class="row">
                                    <div class="col-md-12 buttons-card">
                                        <?php  
                                            if(getEstadoFila($filas[$i]['idfila']) == 1){
                                        ?>
                                        <a href="../../pages/acompanharFila/index.php?idfila=<?php echo $filas[$i]['idfila'] ?>">
                                            <button type="button" class="button-card" id="follow-button" onclick="">Acompanhar Fila</button>    
                                        </a>
                                        <a href="../../pages/editarFila/index.php?idfila=<?php echo $filas[$i]['idfila'] ?>">
                                            <button type="button" class="button-card" id="edit-button" onclick="">Editar Fila</button>    
                                        </a>
                                        <a href="../../backend/disableQueue.php?idfila=<?php echo $filas[$i]['idfila']?>">
                                            <button type="button" class="button-card" id="disable-button">Desativar Fila</button>    
                                        </a>
                                        <a href="../../backend/excluirFila.php?idfila=<?php echo $filas[$i]['idfila']?>">
                                            <button type="button" class="button-card" id="delet-button" onclick="excluirFila(<?php echo $filas[$i]['idfila']?>)">Excluir Fila</button>    
                                        </a>
                                        <?php
                                            }else{
                                        ?>
                                        
                                        <button type="button" class="button-card" id="follow-button-disabled" disabled>Acompanhar Fila</button>    

                                        <a href="../../pages/editarFila/index.php?idfila=<?php echo $filas[$i]['idfila'] ?>">
                                            <button type="button" class="button-card" id="edit-button" onclick="">Editar Fila</button>    
                                        </a>

                                        <a href="../../backend/activateQueue.php?idfila=<?php echo $filas[$i]['idfila']?>">
                                            <button type="button" class="button-card" id="disable-button">Ativar Fila</button>    
                                        </a>

                                        <a href="../../backend/excluirFila.php?idfila=<?php echo $filas[$i]['idfila']?>">
                                            <button type="button" class="button-card" id="delet-button" onclick="excluirFila(<?php echo $filas[$i]['idfila']?>)">Excluir Fila</button>    
                                        </a>

                                        <?php
                                            }
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                <?php  
                    }
                ?>    
        </div>
    </div>
    
    <?php require('../../components/scripts.php');?>
</body>
</html>