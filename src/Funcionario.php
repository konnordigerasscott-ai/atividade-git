<?php

class Funcionario {

    private $nome;
    private $idade;
    private $salario;
    private $cargo;

    public function __construct($nome, $idade, $salario, $cargo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    // GETTERS
    public function getNome() { return $this->nome; }
    public function getIdade() { return $this->idade; }
    public function getSalario() { return $this->salario; }
    public function getCargo() { return $this->cargo; }

    // SETTERS
    public function setNome($nome) { $this->nome = $nome; }
    public function setIdade($idade) { $this->idade = $idade; }
    public function setSalario($salario) { $this->salario = $salario; }
    public function setCargo($cargo) { $this->cargo = $cargo; }

    // 🔥 NOVO MÉTODO
    public function aumentarSalario($valor) {
        $this->salario += $valor;
    }

    // 🔥 NOVO MÉTODO
    public function exibirFuncionario() {
        return "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: {$this->salario}";
    }
}