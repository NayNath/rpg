<?php

    abstract class ClasseGenerica{
        //Atributos
        public $forca, $defesa, $esquiva, $velocidade, $inteligencia, $vida, $raca, $tipo, $classe, $img, $descricao;

        //Métodos
        public function ataqueComum(){
            echo "Ataque Comum (20) <br>";
        }
        public function defender(){
            echo "Defender (50) <br>";
        }
        public function esquivar(){
            echo "Esquivar (60) <br>";
        }
        public function fugir(){
            echo "Fugir (-10) <br>";
        } 
        
        public function __set($atributo,$valor){
            $this->$atributo = $valor;
        }

        public function __get($atributo){
            return $this -> $atributo;
        }
    }


?>