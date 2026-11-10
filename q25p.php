<?php
$soma=0;
for ( $i = 1 ; $i <=7 ; $i++){
$n= readline ("escreva a temperatura do dia $i \n");
$soma+=$n;
}

$maior = 0; 
$media=$soma / 7;
echo ("a media de temperatura é $media");

?>