<?php

class OrdemProducao {

    private $codigo;
    private $quantidade;

    public function __construct($codigo, $quantidade) {
        $this->codigo = $codigo;
        $this->quantidade = $quantidade;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
}
