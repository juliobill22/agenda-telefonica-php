<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Título</title>
    </head>
    <body>
        <form action="../../class/faces/contatoInc.php" method="post" class="form-group">
            <div class="control-group">
                <div class="controls">
                    <p><input size= "50" id="incnome"  class="style-edit" name="a_nome"     type="text" placeholder="Nome"     autofocus  value="<?php echo!empty($nome)     ? $nome     : ""; ?>"></p><a id="errorNome"></a>
                    <p><input size= "50" id="inctel"   class="style-edit" name="a_telefone" type="text" placeholder="Telefone" value="<?php echo!empty($telefone) ? $telefone : ""; ?>"></p><a id="errorTelefone"></a>
                    <p><input size= "50" id="incemail" class="style-edit" name="a_email"    type="text" placeholder="E-mail"   value="<?php echo!empty($email)    ? $email    : ""; ?>"></p><a id="errorEmail"></a>
                </div>
                <div class="modal-footer">    
                    <p><button id="btnsalvar" type="submit" class="btn btn-default glyphicon glyphicon-ok"></button>
                </div>
            </div>    
        </form> 
        <div id="idresult"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $("form").submit(function(){
                $("#errorNome").text($("#incnome").val()    ? "" : "O nome não foi preenchido."    , "");
                $("#errorTelefone").text($("#inctel").val() ? "" : "O telefone não foi preenchido.", "");
                $("#errorEmail").text($("#incemail").val()  ? "" : "O e-mail não foi preenchido."  , "");
                if ($("#incnome").val() == "") {return false;}
                if ($("#inctel").val() == "") {return false;}
                if ($("#incemail").val() == "") {return false;}
            });        
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
            $cont = new pojoContato();
            
            $cont->setNome($nome);
            $cont->setTelefone($telefone);
            $cont->setEmail($email);
            
            $cDAO->insert($cont);
        
            header('Location: /index.php');
            
        } else {
            
        }
    }
?>    