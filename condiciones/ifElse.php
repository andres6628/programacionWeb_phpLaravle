<?php
/*
Programa que envie un mensaje solo si este contiene menos
de 100 letras, sino mensaje de error
*/

 $total_letras = strlen("Hola. Como estras? Que estas haciendo?");

 if($total_letras<100){
    echo "el mensaje se envio correctamente";
 }else{
    echo "mensaje no enviado, el mensaje tiene ".$total_letras." de caracteres";
 }
?>