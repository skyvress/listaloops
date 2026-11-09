<?php


/*Um aluno está estudando multiplicação e deseja consultar a tabuada de um número informado pelo usuário. Desenvolva um programa em PHP que solicite um número e apresente sua tabuada de 1 a 10. Utilize $variavel = readline("Digite: "); para entrada de dados.*/

$n = readline ("Digite um número:   ");
$m = 1;

while  ($m <=10){
    $m = ($m + 1) ;
    echo ($n * $m . "\n");
    $m++;
    
}