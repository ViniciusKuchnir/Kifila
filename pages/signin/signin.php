<!DOCTYPE html>
<html lang="pt-br">
<?php 
    require('C:/xampp/htdocs/Kifila/components/head.php');
?>    
<title>Kifila - Sign Up</title>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 left">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h1 id="msg-welcome">Seja bem-vindo de volta</h1>
                        <p id="msg-data">Seja bem-vindo de volta! Por favor entre com seus dados.</p> 
                    </div>
                </div>
                <div class="row form ">
                   <form action="">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="mb-4">
                                 <label for="" class="form-label">Email</label>
                                 <input type="email" class="form-control" name="email-user" id="email" aria-describedby="helpId" placeholder="Digite o seu email" required>
                               </div>
                           </div>
                           <div class="col-md-12">
                               <div class="mb-4">
                                 <label for="" class="form-label">Senha</label>
                                 <input type="password" class="form-control" name="email-user" id="email" aria-describedby="helpId" placeholder="Digite a sua senha">
                               </div>
                           </div>
                           <div class="col-md-12 mb-3 forgot-password">
                                <a href="">Esqueci minha senha</a>
                           </div>
                           <div class="col-md-12 mb-3">
                               <button type="submit" class="btn">Entrar</button>
                           </div>
                           <div class="col-md-12 signup">
                                <span class="text">Não possui uma conta?</span>
                                <a href="">Se cadastre de graça</a>
                           </div>
                       </div>
                   </form>
                </div>
            </div>
            <div class="col-md-7 right">
                <div class="row">
                    <div class="col-md-12">
                        <h1 id="logo">Kifila</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    require('C:/xampp/htdocs/Kifila/components/scripts.php');
?>
</body>
</html>