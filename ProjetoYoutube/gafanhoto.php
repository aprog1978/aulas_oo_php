<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gafanhoto
 *
 * @author aprog1978
 */
require_once './pessoa.php';
class gafanhoto extends pessoa{
    //put your code here
    
    private $login, $totAssistido;
    
    function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido=0;
    }
    
    function getLogin() {
        return $this->login;
    }

    function getTotAssistido() {
        return $this->totAssistido;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

        
    public function assistirMaisUm() {
        $this->totAssistido++;
        
    }
}
