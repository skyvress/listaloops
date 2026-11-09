<?php
$menu = "Selecione uma opção \n 1- CADASTRAR ALUNO \n 2- CONSULTAR ALUNO \n 3-EXCLUIR ALUNO DA FACE DA TERRA \n 0- SAIR\n";


do {
    
    echo "$menu";
    $sel = readline ( "selecione sua opção ou nada haver :  ");

    if ($sel == 1){
        echo ("DIGITE AS INFORMAÇÕES DO ALUNO  :  ");
        $info = readline (" ");
    }
    
    if ($sel == 2){
        echo (" ESSE É O NUMERO DO ALUNO  ");
    }
    
    if ($sel == 3){
        echo ("VOCÊ TEM CERTEZA? \n 1-SIM \n 2- NÃO ");
        $pexc= readline (" ");
    }
}while ($sel > 0);

?>