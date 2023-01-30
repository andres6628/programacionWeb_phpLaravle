<?php
class Jugador
{
    public $nombre;
    public $posicion;
    public $numero;

    //metodos
    function entrenar(){
        echo "El jugador ".$this->nombre." esta entrenadno";
    }
}

$jugador1 = new Jugador();
$jugador1 -> nombre = "Andres";
$jugador1 -> posicion = "medio campo";
$jugador1 -> numero = 8;
$jugador1 -> entrenar();

echo '<pre>';
var_dump($jugador1);
echo '</pre>';


$jugador2 = new Jugador();
$jugador2 -> nombre = "Pedro";
$jugador2 -> posicion = "Defensa";
$jugador2 -> numero = 4;
$jugador2 -> entrenar();

echo '<pre>';
var_dump($jugador2);
echo '</pre>';
?>