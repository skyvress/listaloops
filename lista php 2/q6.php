<?php
/*Um sistema possui uma senha numérica definida como 1234. O programa deverá solicitar uma senha ao usuário e continuar solicitando uma nova tentativa enquanto a senha informada estiver incorreta. Quando a senha correta for informada, o programa deverá exibir: Acesso permitido. Desenvolva o programa em PHP.*/

$s = 1234;
$t= readline ("Digite sua senha : ");

while ($s != $t){
    echo ("senha incoreta! \n");
    $t = readline ("digite sua senha : ");
}
if ($s == $t ){
    echo (" senha correta , mo *kisses*");
}