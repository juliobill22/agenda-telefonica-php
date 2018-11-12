<?php
/**
 * @author juliobillschvenger
 */


class contatoDAO {
    
    public function __construct() {}
    
    public static function insert($objeto){
        try {
            $conn = database::openConection();
            $sql = " INSERT INTO `agendadb`.`AGENDA` ("
                    . "nome, "
                    . "telefone, "
                    . "email) "
                    . "VALUES ('"
                    . $objeto->getNome()      ."','"
                    . $objeto->getTelefone()  ."','"
                    . $objeto->getEmail()
                    . "');";
            $conn->query($sql);
            echo $sql;
            echo "Nova contato criado com sucesso!";
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();
    }        
    
    public static function edit($objeto){
        try {
            $conn = database::openConection();
            $sql = "UPDATE `agendadb`.`AGENDA` SET "
                    . "  NOME = '" . $objeto->getNome() ."'"
                    . ", TELEFONE = '" . $objeto->getTelefone() ."'"
                    . ", EMAIL = '" . $objeto->getEmail() ."'"
                    . " WHERE (IDCONTATO = '" . $objeto->getIdContato() ."')";
            $conn->query($sql);
            echo "Contato alterado com sucesso!";
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();
    }
    
    public static function delete($cod){
        try {
            $conn = database::openConection();
            $sql = " DELETE FROM `agendadb`.`AGENDA` WHERE (IDCONTATO = '". $cod ."')";
            return $conn->query($sql);
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();
    }
    
    public static function locateForCod($cod){
        try {
            $conn = database::openConection();
            $sql = " SELECT NOME, IDCONTATO, NOME, TELEFONE, EMAIL FROM `agendadb`.`AGENDA` WHERE IDCONTATO = $cod order by IDCONTATO";
            return $conn->query($sql);
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();        
    }    
    
    public static function lists(){
        try {
            $conn = database::openConection();
            return $conn->query("SELECT IDCONTATO, NOME, TELEFONE, EMAIL FROM `agendadb`.`AGENDA`");
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();        
    }
}

?>