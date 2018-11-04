<?php

    $usuario  = "";
    $senha    = "";

    if (!empty($_POST)) {
        
        $usuarioErro = null;
        $senhaErro   = null;
        $validou     = true;

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
            
        } else {
            
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        
        <?php 
        
        echo 'portal';
        
        
        ?>
        
        
    </body>
    
</html>
