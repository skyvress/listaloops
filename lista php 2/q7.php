<?php
$sm = 0;
$alns = 1;
while($alns <= 5){
    echo "digite a nota do aluno $alns:  ";
    $notas = (float) readline ();
    $sm = $sm + $notas;
    $alns ++;
}
echo "a soma das notas é igual a $sm ";

