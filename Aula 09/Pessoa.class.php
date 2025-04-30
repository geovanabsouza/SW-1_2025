<?php
    // DEFINIÇÃO DA CLASSE PESSOA
    class Pessoa{
        //ATRIBUTOS
        public $Nome;
        public $Peso;
        public $Altura;

        //MÉTODO DA FUNÇÃO DA CLASSE PESSOA (UMA AÇÃO QUE CLASSE PODE EXECUTAR)
        public function MostrarDados (){
            echo "O nome é: " . $this->Nome . "<br>";
            echo "O peso é: " . $this->Peso . "<br>";
            echo "A altura é: " . $this->Altura . "<br>";
            echo "<hr>";
        }

        public function Apresentar () {
            echo "Olá! Meu nome é " . $this->Nome . ", eu tenho " . $this->Altura . " e peso " . $this->Peso . " quilos.";
            echo "<hr>";
        }
    }
?>
