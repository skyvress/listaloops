<?php

/*Uma escola está preparando uma atividade para a Semana da Informática. Para iniciar uma apresentação, o sistema deverá realizar uma contagem regressiva de 10 até 1 e, ao final, exibir a mensagem "Início!". 
*/


$c = 10;
while ($c >= 2) {
    echo (" $c / ");
    $c--;
    if (  $c == 1 ){
    echo (" 1 ");
    }
}
