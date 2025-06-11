<?php
class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true; 
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            return "Livro emprestado com sucesso.";
        } else {
            return "Livro indisponível para empréstimo.";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        return "Livro devolvido e disponível para empréstimo.";
    }

    public function exibirStatus() {
        $status = $this->disponivel ? "Disponível" : "Emprestado";
        return "Título: {$this->titulo} | Status: {$status}";
    }
}
?>
