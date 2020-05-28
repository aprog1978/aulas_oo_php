<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author aprog1978
 */
require_once './Pessoa.php';
class Aluno extends Pessoa{
    //put your code here
    private $matricula, $curso;
    
    public function pagarMensalidade() {
        echo "<p> Pagando mensalidade do aluno $this->nome";
        
    }    
    
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


}
