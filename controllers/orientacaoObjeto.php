<?php

class Funcionario {

    private $nome;

    public function converteNome($nome) {
        $this->nome = ucwords(strtolower($nome));
        return $this->nome;
    }  

    public function converteNomeParaEmail(&$emailsGerados, $nome) {
        $ultimoNome = substr(strrchr($nome, ' '), 1);   
        $emailSufixo = '@empresax.com.br';
        $separator = '_';
    
        $email = strtolower($nome[0] . $separator . $ultimoNome . $emailSufixo);
    
        if (in_array($email, $emailsGerados)) {
            $primeiroNome = explode(' ', $nome)[0];
            $email = strtolower($primeiroNome . $separator . $ultimoNome . $emailSufixo);
        }
        array_push($emailsGerados, $email);
       
        return $email;
    }

}

?>