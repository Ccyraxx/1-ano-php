<?php

$segundos = 0;//Valor do segundo inicial!
$minutos = 0;//Valor do minuntos inicial!
$horas = 0;//Valor do horas inicial!
$dias = 0;//Valor do dias inicial!

$escolhe = readline("Escolha uma opção:1-Segundos:2-Minutos:3-Horas:4-Dias\n");//Mostrar quais opções tem!

if ($escolhe == 1) {//Vendo se $escolhe é igual a 1!
    $cronometro = readline("Informe quantos segundos você deseja cronometrar: ");//Escolhe quantos segundos deseja!
    while ($segundos < $cronometro) {//Faz uma comparação com $segundos e menor $cronometro, se for ele continuar!
        $segundos++;//Acrecentar um número na variável $segundos!
        echo $segundos . "-";//Escreve a variável $segundos!
        sleep(1); // espera 1 segundo!
    }//Fim do while!
    echo "\nNo cronômetro deu $segundos segundos.\n";//Escreve quantos segundos deu!
}//Fim do if!

elseif ($escolhe == 2) {//Vendo se $escolhe é igual a 2!
    $cronometro = readline("Informe quantos minutos você deseja cronometrar: ");//Escolhe quantos minutos deseja!
    $totalSegundos = $cronometro * 60;//Ele multiplicar por 60 o minutos desejado pra transforma em segundos!
    while ($segundos < $totalSegundos) {//Faz uma comparação que o $segundos e menor $totalSegundos, se for ele continuar!
        $segundos++;//Acrecentar um número na variável $segundos!
        echo $segundos . "-";//Escreve a variável $segundos!
        sleep(1);// espera 1 segundo!
    }//Fim do while!
    $minutos = $segundos / 60;//Ele faz com que os minutos multiplicado por 60 dividir por 60 pra ele volta ao minutos informado!
    echo "\nNo cronômetro deu $minutos minutos e $segundos segundos.\n";//Escreve quantos minuntos e segundos deu!
}//Fim do senão-se!

elseif ($escolhe == 3) {//Vendo se $escolhe é igual a 3!
    $cronometro = readline("Informe quantas horas você deseja cronometrar: ");//Escolhe quantos horas deseja!
    $totalSegundos = $cronometro * 3600;//Ele multiplicar por 3600 as horas desejada pra transforma em segundos!
    while ($segundos < $totalSegundos) {//Faz uma comparação que o $segundos e menor $totalSegundos, se for ele continuar!
        $segundos++;//Acrecentar um número na variável $segundos!
        echo $segundos . "-";//Escreve a variável $segundos!
        sleep(1);// espera 1 segundo!
    }//Fim do while!
    $horas = $segundos / 3600;//Ele faz com que os horas multiplicado por 3600 dividir por 3600 pra ele volta ao horas informado!
    $minutos = $segundos / 60;//Ele dividir a variável $segundos por 60!
    echo "\nNo cronômetro deu $horas horas, $minutos minutos e $segundos segundos.\n";//Escreve quantos horas, minuntos e segundos deu!
}//Fim do senão-se!

elseif ($escolhe == 4) {//Vendo se $escolhe é igual a 1!
    $cronometro = readline("Informe quantos dias você deseja cronometrar: ");//Escolhe quantos dias deseja!
    $totalSegundos = $cronometro * 86400;//Ele multiplicar por 86400 os dias desejada pra transforma em segundos!
    while ($segundos < $totalSegundos) {//Faz uma comparação que o $segundos e menor $totalSegundos, se for ele continuar!
        $segundos++;//Acrecentar um número na variável $segundos!
        echo $segundos . "-";//Escreve a variável $segundos!
        sleep(1);// espera 1 segundo!
    }//Fim do while!
    $dias = $segundos / 86400;//Ele faz com que os dias multiplicado por 86400 dividir por 86400 pra ele volta ao horas informado!
    $horas = $segundos / 3600;//Ele faz com que os horas multiplicado por 3600 dividir por 3600 pra ele volta ao horas informado!
    $minutos = $segundos / 60;//Ele faz com que os horas multiplicado por 60 dividir por 60 pra ele volta ao horas informado!
    echo "\nNo cronômetro deu $dias dias, $horas horas, $minutos minutos e $segundos segundos.\n";//Escreve quantos dias, horas, minuntos e segundos deu!
}//Fim do senão-se!

else {
    echo "Opção inválida. Tente novamente.\n";
}
