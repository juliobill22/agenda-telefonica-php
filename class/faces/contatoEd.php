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
    </head>
    <body>
        <form action="../../class/faces/contatoEd.php" method="post" class="form-group">
            <div class="control-group">
                <div class="controls">
                    <div id="id-menu-editar-excluir" class="dropdown dropleft float-right">
                      <button type="button" class="btn btn-default glyphicon glyphicon-th-list" data-toggle="dropdown" aria-expanded="true"></button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="../../class/faces/contatoDel.php?a_contato=<?php echo $contato?>">Excluir</a>
                      </div>
                    </div>                    
                    <p><input size= "50" id="ed-codigo" class="style-edit" name="a_contato"  type="text"  placeholder="Contato"  readonly value="<?php echo!empty($contato) ? $contato : ''; ?>"></p>
                    <p><input size= "50" id="ed-nome"   class="style-edit" name="a_nome"     type="text"  placeholder="Nome"     autofocus required value="<?php echo!empty($nome) ? $nome : ''; ?>"></p>
                    <p><input size= "50" id="ed-tel"    class="style-edit" name="a_telefone" type="tel"   placeholder="Telefone" required data-mask="(00) 00000-0000" value="<?php echo!empty($telefone) ? $telefone : ''; ?>"></p>
                    <p><input size= "50" id="ed-email"  class="style-edit" name="a_email"    type="email" placeholder="E-mail"   required value="<?php echo!empty($email) ? $email : ''; ?>"></p>
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
            $("#ed-tel").mask("(00) 00000-0000");
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

            echo $contato;
            
            $cont->setIdContato($contato);
            $cont->setNome($nome);
            $cont->setTelefone($telefone);
            $cont->setEmail($email);
            
            $cDAO->edit($cont);
            
            echo $cont->getIdContato();
            
            header('Location: /index.php');
            
        } else {

        }
    }
    
?>