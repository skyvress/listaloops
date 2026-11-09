<?php
$soma=0;
for ( $i = 1 ; $i <=5 ; $i++){
$n= readline ("escreva a nota do aluno $i \n");
$soma+=$n;
}

$media=$soma / 5;
echo ("a media é $media");

?>