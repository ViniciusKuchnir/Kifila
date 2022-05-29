<?php  
    require('C:/xampp/htdocs/Kifila/backend/conectionBD.php');
    require('C:/xampp/htdocs/Kifila/backend/listUsersFila.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('../../components/head.php'); ?>
    <title>Kifila - Acompanhar Filas</title>
</head>
<body>
    <?php require('C:/xampp/htdocs/Kifila/components/navbar/navbar.php') ?>

    <div class="container">
        <div class="row mt-3 button">
            <a href="../../backend/calluser.php?idfila=<?php echo $_GET['idfila']?>">
                <button type="button" class="button-call" id="call-button">Chamar Próximo</button>                             
            </a>
        </div>
        <div class="row">
            <table class="table table-responsive caption-top table-striped table-hover">
                <caption>Faltam <?php echo countNaoAtendidos($_GET['idfila']) ?> atendimentos </caption>
                <thead id="table-head">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Data Ingresso</th>
                    <th scope="col">Hora Ingresso</th>
                    <th scope="col">Atendido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $ingressos = listUsers($_GET['idfila']);
                        for ($i=0; $i < count($ingressos) ; $i++) { 
                    ?>
                        <tr>
                        <th scope="row"> <?php echo $ingressos[$i]['codIngresso'] ?></th>
                            <td><?php echo $ingressos[$i]['nome'] ?> </td>
                            <td><?php echo $ingressos[$i]['sobrenome'] ?></td>
                            <td><?php echo $ingressos[$i]['dataingresso'] ?></td>
                            <td><?php echo $ingressos[$i]['horaingresso'] ?></td>
                            <td><?php echo $ingressos[$i]['atendido'] == 1 ? "Sim" : "Não" ?></td>
                        </tr>
                    <?php
                        }
                    ?>

                </tbody>
                <tfoot>
                    <th scope="col">Atendidos: <?php echo countAtendidos($_GET['idfila']) ?></th>
                    <th scope="col">Não atendidos: <?php echo countNaoAtendidos($_GET['idfila']) ?></th>
                </tfoot>
            </table>
        </div>
    </div>
    
    <?php require('../../components/scripts.php');?>
</body>
</html>