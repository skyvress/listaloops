<?php
/*Um jogo possui um número secreto definido pelo programa. O usuário deverá tentar descobrir qual é esse número. A cada tentativa, o programa deverá informar se o número digitado é maior ou menor que o número secreto. As tentativas deverão continuar até que o usuário acerte. Quando acertar, exiba: Parabéns! Você acertou!*/

$val= 888;

do {
    echo ( "tente acertar a senha! \n ");
    $ten= readline ();
    
    if ($ten < $val){
        echo (" seu número é menor que o valor secreto, desista! \n");
    }

    if ($ten > $val ){
        echo ("seu número é maior  que o valor secreto, morra! \n");
    }
}while ($ten != $val );

while ($ten == $val ){
    echo ("voce acertou, arrasa!");
    break;
}