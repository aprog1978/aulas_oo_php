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
    
    private $matricula;
    private $curso;
    
    public function cancelarMatricula() {
        echo '<p>Matricula será cancelada</p>';
    }
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }


}
