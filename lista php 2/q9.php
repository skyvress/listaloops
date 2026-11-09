<?php
/*Um programa deverá solicitar números ao usuário continuamente. Cada número informado deverá ser somado a um total. Quando o usuário informar 0, a entrada de números deverá ser encerrada e o programa deverá apresentar a soma dos valores informados anteriormente.*/

do {
    echo ("digite numeros para soma-los depois \n ");
    $n= readline ("");
    $soma = $n + $n;
    if ($n == 0 ){
        echo $soma;
    }
}
while ($n != 0 );

?>