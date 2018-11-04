<?php
/**
 * @author juliobillschvenger
 */


class contatoDAO {
    
    public function __construct() {}
    
    public static function insert(Object $obj){
        try {
            $conn = database::openConection();
            $sql = " INSERT INTO AGENDA ("
                    . "nome, "
                    . "telefone, "
                    . "email) "
                    . "VALUES ('"
                    . $obj->getNome()      ."','"
                    . $obj->getTelefone()  ."','"
                    . $obj->getEmail()
                    . "');";
            $conn->query($sql);
            echo "Nova contato criado com sucesso!";
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();
    }        
    
    public static function edit(Object $obj){
        try {
            $conn = database::openConection();
            $sql = "UPDATE AGENDA SET "
                    . "  NOME = '" . $obj->getNome() ."'"
                    . ", TELEFONE = '" . $obj->getTelefone() ."'"
                    . ", EMAIL = '" . $obj->getEmail() ."'"
                    . " WHERE (IDCONTATO = '" . $obj->getIdContato() ."')";
            echo $sql;
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
            $sql = " DELETE FROM AGENDA WHERE (IDCONTATO = '". $cod ."')";
            return $sql->execute();
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();
    }
    
    public static function locateForCod($cod){
        try {
            $conn = database::openConection();
            $sql = " SELECT NOME, IDCONTATO, NOME, TELEFONE, EMAIL FROM AGENDA WHERE IDCONTATO = $cod order by IDCONTATO";
            return $conn->query($sql);
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();        
    }    
    
    public static function lists(){
        try {
            $conn = database::openConection();
            return $conn->query("SELECT IDCONTATO, NOME, TELEFONE, EMAIL FROM AGENDA");
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();        
    }
}

?>