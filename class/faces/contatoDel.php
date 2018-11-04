<?php

    require("./class/conection/database.php");
    require("./class/DAO/contatoDAO.php");
    require("./class/pojo/pojoContato.php");

    $contato  = "";

    if (!empty($_GET)) {
        $contato  = $_GET['a_contato'];
        contatoDAO::delete($contato);
        //header('Location: /index.php');
    }
