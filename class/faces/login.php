<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body ng-app="">
        <form name="myForm" action="../../class/faces/portal.php" method="post" class="form-group">
            <div class="control-group">
                <div class="controls">
                    <p><input ng-model="ngname"  required size= "50" id="idusuario" class="style-edit" name="a_usuario" type="text" placeholder="Usuario" value="<?php echo!empty($usuario)  ? $usuario  : ''; ?>" autofocus></p><a id="errorUsuario"></a>
                    <p><input ng-model="ngsenha" required size= "50" id="idsenha"   class="style-edit" name="a_senha"   type="text" placeholder="Senha"   value="<?php echo!empty($senha)    ? $senha    : ''; ?>"></p><a id="errorSenha"></a>
                </div>
                <div class="modal-footer">    
                    <p><button id="btnlogar" type="submit" class="btn btn-default">Logar</button>
                </div>
            </div>    
        </form> 
        <div id="idresult"></div>

        <script>
            $("form").submit(function(){
                $("#errorUsuario").text($("#idusuario").val()  ? '' : "O usuário não foi preenchido." , "");
                $("#errorSenha").text($("#idsenha").val()      ? '' : "A senha não foi preenchida."   , "");
                if ($("#idusuario").val() == "") {return false;}
                if ($("#idsenha").val() == "") {return false;}
            });        
        </script>

    </body>
    
</html>

<?php

    $usuario  = "";
    $senha    = "";

    if (!empty($_POST)) {
        
        $usuarioErro  = null;
        $senhaErro    = null;

        $usuario  = $_POST['a_usuario'];
        $senha    = $_POST['a_senha'];
        
        if (empty($usuario)) {
            $usuarioErro = 'Por favor digite o seu usuário!';
            $validou = false;
        }
        if (empty($senha)) {
            $senhaErro = 'Por favor digite a sua senha!';
            $validou = false;
        }
        
        if ($validou) {
            
            
            //header('Location: class/faces/Portal.php');
            
        } else {
            
            echo "usuário inválido";
            
        }
    }