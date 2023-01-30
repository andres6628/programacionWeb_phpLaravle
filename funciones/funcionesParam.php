<?php

function saludo($nombre){
    echo "hola ".$nombre.", eres un gran programador";
}

saludo('Andres');
echo '<br>';
saludo('pedro');


function operacion($numero1,$numero2,$operacion){
    $op = 0;
    if ($operacion == '+') {
        $op = $numero1 + $numero2;
    }else
    if($operacion =='-'){
        $op = $numero1 - $numero2;
    }else
    if($operacion == '*'){
        $op = $numero1 * $numero2;
    }else{
        $op = $numero1/$numero2;
    }
    echo 'Resultado = '.$op;    
}

operacion(2,5,'+');
operacion(2,5,'*');
operacion(2,5,'/');
?>