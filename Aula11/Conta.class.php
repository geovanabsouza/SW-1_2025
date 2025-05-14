<?php
     class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){

            if($valor > $this->Saldo){
                $resultado = "Saldo insuficente.";
                return $resultado; 

                //return "Saldo insuficente.";

            }else{
                $resultado = "Saldo atualizado para R$ ". $this->Saldo . "<br>";
                return $resultado;

                //$this->Saldo -= $valor;
                //$this->Saldo = $this->Saldo - $valor
                //return $this->Saldo;
            }
            
        }

        public function Depositar($valor){
            $resultado = "Saldo atualizado para R$ ". $this->Saldo ."<br>";
            return $resultado;

            //$this->Saldo += $valor;
            //$this->Saldo = $this->Saldo + $valor

            //return $this->Saldo;
        }

        public function ConsultarSaldo(){
            echo "NOME: " . $this->Nome . "<br>";
            echo "CPF: " . $this->Cpf . "<br>";
            echo "SALDO ATUAL R$: " . $this->Saldo . "<br>";
        } 
     }
?>