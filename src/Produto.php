<?php

class Produto {

    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    // GETTERS
    public function getNome() { return $this->nome; }
    public function getPreco() { return $this->preco; }
    public function getEstoque() { return $this->estoque; }

    // SETTERS
    public function setNome($nome) { $this->nome = $nome; }
    public function setPreco($preco) { $this->preco = $preco; }
    public function setEstoque($estoque) { $this->estoque = $estoque; }

    // 🔥 NOVO MÉTODO
    public function adicionarEstoque($quantidade) {
        $this->estoque += $quantidade;
    }

    // 🔥 NOVO MÉTODO
    public function removerEstoque($quantidade) {
        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
        } else {
            return "Estoque insuficiente";
        }
    }

    // 🔥 NOVO MÉTODO
    public function exibirProduto() {
        return "Produto: {$this->nome}, Preço: {$this->preco}, Estoque: {$this->estoque}";
    }
}