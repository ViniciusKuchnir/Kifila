<?php
    require('../../backend/conectionBD.php');
    require('../../backend/dashboard_pj.php');
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
                <h2>Olá, <?php echo companyName($_COOKIE['email'])?></h2>
            </div>
        </div>
    </div>
    
    <?php require('../../components/scripts.php');?>
</body>
</html>