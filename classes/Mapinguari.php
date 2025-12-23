<?php
require_once("ClasseGenerica.php");

class Mapinguari extends ClasseGenerica {
    public $forca = 100; 
    public $defesa = 65; 
    public $esquiva = 40;
    public $velocidade = 25;
    public $inteligencia = 30;
    public $vida = 97;
    public $img = 'mapinguari.jpg';
    public $descricao = 'Gigante humanoide peludo, com um olho só no centro da testa, braços longos e garras, boca na barriga.';

    public function ataqueEspecial(){
        echo 'Grito Aterrorizante (80) <br>';
        echo 'Destruição (100)';
    }

}
?>