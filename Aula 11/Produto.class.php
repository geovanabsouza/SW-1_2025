<?php 
    class Produto {

        private $Nome;
        private $Preco;
        private $Quantidade;

        //Construtor

        public function __construct($nome_produto, $preco_produto, $quantidade_produto = 0 ) {
            $this -> Nome = $nome_produto;
            $this -> Preco = $preco_produto;
            $this -> Quantidade = $quantidade_produto;
        }


        // Método Getters 

        public function getNome () {
            return $this -> Nome;
        }

        public function getPreco () {
            return $this -> Preco;
        }

        // Método Setters

        public function setNome ($nome_produto) {
            $this -> Nome = $nome_produto;
        }

        public function setPreco ($preco_produto) {
            $this -> Preco = $preco_produto;
        }

        //Estoque e Detalhe

        public function adicionarEstoque ($quant) {
            $this -> Quantidade += $quant;
        }

        public function removerEstoque ($quant) {
            $this -> Quantidade -= $quant;
        }

        public function mostrarDetalhes () {
            echo "Nome do produto: ". $this -> Nome ."<br>";
            echo "Preço do produto: ". $this -> Preco ."<br>";
            echo "Quantidade do produto: ". $this -> Quantidade ."<br>";
        }


    }            

?>