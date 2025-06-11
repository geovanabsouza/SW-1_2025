<?php
class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($porcentagem) {
        $this->salario += $this->salario * ($porcentagem / 100);
    }

    public function exibirInformacoes() {
        return "Nome: {$this->nome} | Salário: R$ " . number_format($this->salario, 2, ',', '.');
    }
}
?>
