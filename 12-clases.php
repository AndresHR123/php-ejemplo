<?php  

    class Calculadora{

        public $primerNumero;
        public $segundoNumero;

        function __construct($num1 = 0,$num2 = 0) {
            $this->primerNumero=$num1;
            $this->segundoNumero=$num2;
        }

        public function sumar() {
            return $this->primerNumero+$this->segundoNumero;
            
        }
        public function restar() {
            return $this->primerNumero-$this->segundoNumero;
        }
        public function multiplicar() {
            return $this->primerNumero*$this->segundoNumero;
            
        }
        public function dividir() {
            
            if ($this->segundoNumero == 0) {
                return "El numero no es divisible";
            }
            else {
                return $this->primerNumero/$this->segundoNumero;
            }
        }
        public function potencia() {
            echo "PRIMER NUMERO".$this->primerNumero;
            ECHO "EL SEGUNDO NUMERO".$this->segundoNumero;
            return pow($this->primerNumero,$this->segundoNumero);

        }
        public function raiz() {
            return sqrt($this->primerNumero);
        }
    }
?>