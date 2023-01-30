<?php
/* realice un programa que imprima cual es tu color 
favorito. con switch 
*/

$color_favorito = 'verde';
if($color_favorito == 'azul'){
    echo 'tu color favorito es azul';
}

switch ($color_favorito) {
    case 'azul':
        echo 'color azul';
        break;
    case 'rojo':
        echo 'color rojo';
        break;
    case 'verde':
        echo 'color verde';
        break;    
    default:
        echo 'ningun color';
        break;
}
?>