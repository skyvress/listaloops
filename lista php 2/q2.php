<?php

/*Um professor de Matemática deseja apresentar aos alunos todos os números pares entre 1 e 30. Desenvolva um programa em PHP. */

$n = 2 ;
while ($n <= 28){
    echo ("$n / ") ;
    $n = $n +2;
    if ($n == 30){
        echo ( 30 );
    }
}
?>