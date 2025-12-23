<?php
require_once("ClasseGenerica.php");

class Lobisomem extends ClasseGenerica{
    public $forca = 90; 
    public $defesa = 50; 
    public $esquiva = 80;
    public $velocidade = 80;
    public $inteligencia = 50;
    public $vida = 100;
    public $img = 'lobisomem';
    public $descricao = 'Um humano amaldiçoado que se transforma em uma fera à noite, combinando força animal com inteligência humana.';

    public function ataqueEspecial(){
        echo 'Garra feroz (50)<br>';
        echo 'Uivo da morte (70)';
    }
}

?>