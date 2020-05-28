<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author aprog1978
 */
require_once './Pessoa.php';
class Professor extends Pessoa{
    //put your code here
    private $especialidade, $salario;
    
    public function receberAumento() {
        $this->salario++;
        echo "$this->nome recebeu aumento de salario";
    }
     
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


         
}
