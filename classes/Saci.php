<?php
require_once("ClasseGenerica.php");
class Saci extends ClasseGenerica{
    public $forca = 60; 
    public $defesa = 70; 
    public $esquiva = 65;
    public $velocidade = 70;
    public $inteligencia = 90;
    public $vida = 95;
    public $img = 'saci';
    public $descricao = 'Um travesso espírito folclórico, que usa truques e astúcia para confundir e enganar seus adversários.';

    public function ataqueEspecial(){
        echo 'Furacão (70)<br>';
        echo 'Vento da mata (50)';
    }
}   
?>