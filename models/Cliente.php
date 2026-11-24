<?php 
class Cliente {
    private string $nome ; 
    private string $email ;
    private string $documento ;

    //Métodos :

    public function __construct($n, $e, $d)
    {
        $this -> nome = $n;
        $this -> email = $e;
        $this -> documento = $d;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of documento
     */ 
    public function getDocumento()
    {
        return $this->documento;
    }
}

?>