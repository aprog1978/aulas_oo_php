<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lutador
 *
 * @author aprog1978
 */
class lutador {
    //put your code here
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitoria, $derrotas, $empate;
    
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitoria() {
        return $this->vitoria;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpate() {
        return $this->empate;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    function setCategoria() {
        //$this->categoria = $categoria;
        if($this->getPeso() < 52.2){
            $this->categoria = "Invalido";
        }elseif($this->getPeso() <=70.3){
            $this->categoria= "leve";
            
        }elseif($this->getPeso()<= 83.9){
            $this->categoria="medio";
        }elseif($this->getPeso()<=120.2){
            $this->categoria="pesado";
        } else {
            $this->categoria="invalido";
        }
        
    }

    function setVitoria($vitoria) {
        $this->vitoria = $vitoria;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpate($empate) {
        $this->empate = $empate;
    }

    function __construct($nom, $nac, $ida, $alt, $pes, $vit, $der, $emp) {
        $this->nome = $nom;
        $this->nacionalidade = $nac;
        $this->idade = $ida;
        $this->altura = $alt;
        
        //$this->peso = $peso;
        $this->setPeso($pes);
        
        $this->vitoria = $vit;
        $this->derrotas = $der;
        $this->empate = $emp;
    }

    function ganharLuta(){
        $this->setVitoria($this->getVitoria() + 1);
    }
    
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    function empatarLuta(){
        $this->setEmpate($this->getEmpate() + 1);
    }
    
    function apresentar(){
        echo '<p>------------------------------------------------------</p>';
        echo '<p> Chegou a hora! O lutador ' . $this->getNome();
        echo ' veio diretamente de ' . $this->getNacionalidade();
        echo ' tem ' . $this->getIdade() ;
        echo ' anos  e pesa ' . $this->getPeso() . ' Kg';
        echo '<br>  ele tem '.$this->getVitoria() . ' vitorias,';
        echo $this->getDerrotas().' derrotas e ' ;
        echo $this->getEmpate() .' empates </p>';
    }
    
    function status(){
        echo '<p>---------------</p>';
        echo '<p>';
        echo '' . $this->getNome();
        echo ' e peso '. $this->getCategoria();
        echo '</p>';
        echo '<p>'.$this->getVitoria() . ' vitorias, ';
        echo $this->getDerrotas().' derrotas e ' ;
        echo $this->getEmpate() .' empates </p>';
    }
    
    
}
