<?php
require_once("ClasseGenerica.php");

class MatindaPereira extends ClasseGenerica {
    public $forca = 70; 
    public $defesa = 90; 
    public $esquiva = 80;
    public $velocidade = 93;
    public $inteligencia = 80;
    public $vida = 56;
    public $img = 'matindaPereira.jpg';
    public $descricao = 'Velha bruxa que se transforma em um pássaro noturno agourento.';

    public function ataqueEspecial(){
        echo 'Lançar feitiços (80) <br>';
        echo 'Assobio Perturbador (70)';
    }

}
?>