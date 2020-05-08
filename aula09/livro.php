<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of livro
 *
 * @author aprog1978
 */
require_once './pessoa.php';
require_once './publicacao.php';

class livro implements publicacao {
    //put your code here
    private $titulo,
            $autor,
            $totPaginas,
            $pagAtual,
            $aberto,
            $leitor;
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    
    function detalhes(){
        echo '<hr>';
        //echo '<br>';
        echo 'Livro '. $this->titulo . " escrito por " . $this->autor;
        echo '<br>';
        echo 'Paginas: ' . $this->totPaginas . ' atual: ' .$this->pagAtual;
        echo '<br>';
        echo 'Sendo lido por ' . $this->leitor->getNome();
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        if($this->getPagAtual() > 0 && $this->getPagAtual() < $this->getTotPaginas()){
            $this->pagAtual ++;
        }
    }

    public function fechar() { 
        $this->aberto = false;
    }

    public function folhear($p) {
        if($p > $this->getTotPaginas()){
            $this->setPagAtual(0);
            
        }else{
            $this->setPagAtual($p);
        }
       
    }

    public function voltarPag() {
        if($this->getPagAtual() > 0 && $this->getPagAtual() < $this->getTotPaginas()){
            $this->pagAtual --;
        }
    }

}
