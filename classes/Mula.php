<?php
require_once("ClasseGenerica.php");

class Mula extends ClasseGenerica {
    public $forca = 90; 
    public $defesa = 70; 
    public $esquiva = 60;
    public $velocidade = 95;
    public $inteligencia = 100;
    public $vida = 79;
    public $img = "mula";
    public $descricao = 'Mulher amaldiçoada que se transforma em uma mula escura (marrom ou preta) com uma bola de fogo no lugar da cabeça.';

    public function ataqueEspecial(){
        echo 'Disparar fogo (60) <br>';
        echo 'Coices (70)';
    }
}
?>