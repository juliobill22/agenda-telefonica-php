<?php

/**
 * Description of pojoContato
 *
 * @author juliobillschvenger
 */
class pojoContato {
    
    private $idcontato;
    private $nome;
    private $telefone;
    private $email;

    public function __construct() {}
    
    public function getIdContato() {
        return $this->idcontato;
    }
    
    public function setIdContato($idContato) {
        $this->idcontato = $idContato;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getTelefone() {
        return $this->telefone;
    }
    
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }

}

?>