<?php
/**
 * @author juliobillschvenger
 */


class usuarioDAO {
        
    public function __construct() {}

    public static function insert(Object $obj){
        try {
            $conn = database::openConection();
            $sql = " INSERT INTO USUARIO (IDUSUARIO, "
                                        . "NOME, "
                                        . "SENHA, "
                                        . "DATAINC) "
                    . "VALUES ("
                    . $obj->getIdUsuario() .","
                    . $obj->getNome()      .","
                    . $obj->getSenha()  .","
                    . $obj->getDataInc()
                    . ")";
            $conn->exec($sql);
            echo "Nova usuário criado com sucesso!";
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();
    }        
    
    public static function edit(Object $obj){
        try {
            $conn = database::openConection();
            $sql = "UPDATE USUARIO SET "
                    . "IDUSUARIO = " . $obj->getIdUsuario()
                    . "NOME = " . $obj->getNome()
                    . "SENHA = " . $obj->getSenha()
                    . "DATAINC = " . $obj->getDataIncr()
                    . "WHERE IDUSUARIO = " . $obj->getIdUsuario();
            $conn->exec($sql);
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();
    }
    
    public static function delete($cod){
        try {
            $conn = database::openConection();
            $sql = " DELETE FROM USUARIO WHERE IDUSUARIO = $cod";
            return $sql->execute();
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();
    }
    
    public static function locateForCod($cod){
        try {
            $conn = database::openConection();
            $sql = " SELECT IDUSUARIO, NOME, SENHA, DATAINC FROM USUARIO WHERE IDUSUARIO = $cod";
            return $conn->query($sql);
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();        
    }    
    
    public static function lists(){
        try {
            $conn = database::openConection();
            return $conn->query("SELECT IDUSUARIO, NOME, SENHA, DATAINC FROM USUARIO");
        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        database::closeConection();        
    }
}

?>