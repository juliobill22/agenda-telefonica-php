<?php

    $contato  = "";
    $nome     = "";
    $telefone = "";
    $email    = "";

    if (!empty($_GET)) {
        
        $nomeErro     = null;
        $telefoneErro = null;
        $contatoErro  = null;
        $validou      = true;

        $contato  = $_GET['a_contato'];
        $nome     = $_GET['a_nome'];
        $telefone = $_GET['a_telefone'];
        $email    = $_GET['a_email'];
        
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
        <link href="../class/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="../../class/faces/contatoEd.php" method="post" class="form-group">
            <div class="control-group">
                <div class="controls">
                   <div id="id-menu-editar-excluir" class="dropdown dropleft float-right">
                      <button type="button" class="btn btn-default glyphicon glyphicon-th-list" data-toggle="dropdown"></button>
                      <div class="dropdown-menu">
                          <button id="ed-excluir-item" type="submit" class="btn btn-default glyphicon glyphicon-ok"> Excluir</button>
                      </div>
                    </div>                    
                    <p><input style="visibility: hidden;" id="edcontato" name="a_contato"  type="text" value="<?php echo!empty($contato) ? $contato : ''; ?>">
                    <p><input size= "50" id="ednome"  class="style-edit" name="a_nome"     type="text" placeholder="Nome"     value="<?php echo!empty($nome)     ? $nome     : ''; ?>"></p><a id="errorNome"></a>
                    <p><input size= "50" id="edtel"   class="style-edit" name="a_telefone" type="text" placeholder="Telefone" value="<?php echo!empty($telefone) ? $telefone : ''; ?>"></p><a id="errorTelefone"></a>
                    <p><input size= "50" id="edemail" class="style-edit" name="a_email"    type="text" placeholder="E-mail"   value="<?php echo!empty($email)    ? $email    : ''; ?>"></p><a id="errorEmail"></a>
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
                $("#errorNome").text($("#ednome").val()     ? '' : "O nome não foi preenchido."    , "");
                $("#errorTelefone").text($("#edtel").val()  ? '' : "O telefone não foi preenchido.", "");
                $("#errorEmail").text($("#edemail").val()   ? '' : "O e-mail não foi preenchido."  , "");
                if ($("#ednome").val() == "") {return false;}
                if ($("#edtel").val() == "") {return false;}
                if ($("#edemail").val() == "") {return false;}
            });
        </script>

    </body>
    
</html>

<?php 

    if (!empty($_POST)) {
        
        $nomeErro     = null;
        $telefoneErro = null;
        $contatoErro  = null;
        $validou      = true;
        
        $contato  = $_POST['a_contato'];
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
            $emailErro = 'Por favor digite o e-mail!';
            $validou = false;
        }
        
        if ($validou) {

            include("../conection/database.php");
            include("../DAO/contatoDAO.php");
            include("../pojo/pojoContato.php");

            $cDAO = new contatoDAO();
            $cont = new pojoContato();

            $cont->setIdContato($contato);
            $cont->setNome($nome);
            $cont->setTelefone($telefone);
            $cont->setEmail($email);
            
            $cDAO->edit($cont);
            
            header('Location: /index.php');
            
        } else {

        }
    }
    
?>