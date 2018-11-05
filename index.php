<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Agenda Telefônica</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
        <link href="../class/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../class/js/js-index.js"></script>

    </head>
    <body>

        <!--HEADER-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Agenda Telefônica</a>
                </div>
                <form class="navbar-form navbar-left" action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar" name="search">
                        <div class="input-group-btn">
                        </div>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li id="btn-login"><a id="a-link-login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>

        <!--LISTA DE CONTATOS-->
        <div class="media">
            <div class="media">
                <p></p><br>
                <div id="index-list-contatos">
                    <?php
                        require("./class/conection/database.php");
                        require("./class/DAO/contatoDAO.php");
                        require("./class/pojo/pojoContato.php");
                        require("./class/faces/contatoList.php");
                    ?>
                </div>
            </div>
        </div>

        <!--FRAMES DE INCLUSÃO-->
        <div class="container">
            <div class="modal fade" id="modal-insert-contato" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title glyphicon glyphicon-user"> Inserir</h4>
                        </div>
                        <div id="ic-modal-body" class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>    

        <!--LOGIN-->
        <div class="modal fade" id="modal-login" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login do Portal</h4>
                    </div>
                    <div id="lg-modal-body" class="modal-body">
                    </div>                    
                </div>
            </div>
        </div>        
        
        <!--FRAMES DE EDIÇÃO-->
        <div class="modal fade" id="modal-edit-contato" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title glyphicon glyphicon-user"> Alterar</h4>
                    </div>
                    <div id="ed-modal-body" class="modal-body">
                    </div>                    
                </div>
            </div>
        </div>

        <!--BOTÃO DE INCLUSÃO-->
        <div class="button-rodape">
            <button id="btn-inc-contato" class="btn-width-heigt w3-button w3-circle w3-black glyphicon glyphicon-user">+</button>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </body>
</html>