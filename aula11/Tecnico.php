<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tecnico
 *
 * @author aprog1978
 */
require_once './Aluno.php';
class Tecnico extends Aluno{
    //put your code here
    private $registroProfissional;
    
    public function praticar() {
        echo "<p>Pratica $this->registroProfissional</p>";
        
    }
    
    function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }


}
