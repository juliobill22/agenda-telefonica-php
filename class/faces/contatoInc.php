<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form id="form-ed" action="../../class/faces/contatoInc.php" method="post" class="form-group">
            <div class="control-group">
                <div class="controls">
                    <p><input size= "50" id="inc-nome"  class="style-edit" name="a_nome"     type="text"  placeholder="Nome"     autofocus required value="<?php echo!empty($nome) ? $nome : ""; ?>"></p><a id="ic-error-nome"></a>
                    <p><input size= "50" id="inc-tel"   class="style-edit" name="a_telefone" type="tel"   placeholder="Telefone" required data-mask="(00) 00000-0000" value="<?php echo!empty($telefone) ? $telefone : ""; ?>"></p><a id="ic-error-telefone"></a>
                    <p><input size= "50" id="inc-email" class="style-edit" name="a_email"    type="email" placeholder="E-mail"   required value="<?php echo!empty($email) ? $email : ""; ?>"></p><a id="ic-error-email"></a>
                </div>
                <div class="modal-footer">    
                    <p><button id="btnsalvar" type="submit" class="btn btn-default glyphicon glyphicon-ok"></button>
                </div>
            </div>    
        </form> 
        <div id="idresult"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script>
            $("#inc-tel").mask("(00) 00000-0000");
        </script>

    </body>
    
</html>

<?php

    $nome     = "";
    $telefone = "";
    $email    = "";

    if (!empty($_POST)) {
        
        $nomeErro     = null;
        $telefoneErro = null;
        $emailErro    = null;
        $validou      = true;

        $nome     = $_POST['a_nome'];
        $telefone = $_POST['a_telefone'];
        $email    = $_POST['a_email'];

        if (empty($nome)) {
            $nomeErro = 'Por favor digite o seu nome!';
            $validou = false;
        }
        if (empty($telefone)) {
            $telefoneErro = 'Por favor digite o telefone!';
            $validou = false;
        }
        if (empty($email)) {
            $emailErro = 'Por favor digite o email!';
            $validou = false;
        }
        
        if ($validou) {

            include("../conection/database.php");
            include("../DAO/contatoDAO.php");
            include("../pojo/pojoContato.php");

            $cDAO = new contatoDAO();
            $contato = new pojoContato();
            
            $contato->setNome($nome);
            $contato->setTelefone($telefone);
            $contato->setEmail($email);
            
            echo $contato->getEmail();
            
            $cDAO->insert($contato);
        
            header('Location: /index.php');
            
        } else {
            
        }
    }
?>    