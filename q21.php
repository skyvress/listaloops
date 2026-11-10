<?php
$soma=0;
for ( $i = 1 ; $i <=7 ; $i++){
$n= readline ("escreva seu consumo do dia $i em litros \n");
$soma+=$n;
}

$conta=$soma;
echo ("seu consumo foi $conta L ");

?>