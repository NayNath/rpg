<?php
require_once("ClasseGenerica.php");

class CorpoSeco extends ClasseGenerica {
    public $forca = 100; 
    public $defesa = 75; 
    public $esquiva = 75;
    public $velocidade = 75;
    public $inteligencia = 30;
    public $vida = 85;
    public $img = 'corpoSeco';
    public $descricao = 'Cadáver ressequido, com ossos e couro à mostra, unhas e cabelos longos que não param de crescer.';

    public function ataqueEspecial(){
        echo 'Sugar sua energia (70) <br>';
        echo 'Corte profundo (50)';
    }
}
?>