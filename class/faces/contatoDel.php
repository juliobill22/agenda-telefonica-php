<?php

    $contato  = "";

    if (!empty($_GET)) {
        $idcontato  = intval($_GET['a_contato']);
        
        include("../../class/conection/database.php");
        include("../../class/DAO/contatoDAO.php");
        include("../../class/pojo/pojoContato.php");
        
        $contato = new contatoDAO();
        $contato->delete($idcontato);
        
        header('Location: /index.php');
    
    }
