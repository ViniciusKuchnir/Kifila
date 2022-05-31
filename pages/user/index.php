<?php  
    require('../../backend/conectionBD.php');
    require('../../backend/getDataUser.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('../../components/head.php'); ?>
    <title>Kifila - Usuário</title>
</head>
<body>
    <?php require('../../components/navbar/navbar.php');?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 id="title">Perfil de <?php echo getNameuser($_COOKIE['email']) ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 icon">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="../../backend/editUser.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Nome</label>
                                <input type="text"class="form-control" name="name-user" id="user-name" minlength="3" min aria-describedby="helpId" value="<?php echo getNameuser($_COOKIE['email']) ?>" placeholder="Digite o seu nome" required>
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email"class="form-control" name="email" id="user-email" aria-describedby="helpId" value="<?php echo $_COOKIE['email'] ?>" placeholder="Digite o seu email" readonly>
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Senha</label>
                                <input type="password"class="form-control" name="user-password" id="user-password" minlength="8" maxlength="16" aria-describedby="helpId" placeholder="Digite a sua senha" required>
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Confrimação de Senha</label>
                                <input type="password"class="form-control" name="confirm-password" id="confirm-password" minlength="8" maxlength="16" aria-describedby="helpId" placeholder="Digite novamente a sua senha" required>
                                <small id="helpId" class="form-text text-muted">Help text</small>
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