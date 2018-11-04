<?php

/**
 * Description of pojoUsuario
 *
 * @author juliobillschvenger
 */
class pojoUsuario {
    
    private $idusuario;
    private $nome;
    private $senha;
    private $datainc;

    public function getIdUsuario() {
        return $this->idusuario;
    }
    
    public function setIdUsuario($idUsuario) {
        $this->idusuario;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getDataIncr() {
        return $this->datainc;
    }
    
    public function setDataInc($datainc) {
        $this->datainc = $datainc;
    }

}

?>