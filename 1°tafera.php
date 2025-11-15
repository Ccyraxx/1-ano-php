<?php

    $erros = 0;//Valor da variável!

    echo "Você terar que acerta um número de 1 até 10 só vai poder errar 5 vezes\n";//Instruçoes do programa!

    while($erros <= 5){//Vendo se a variàvel $erros igual-menor que 5!
        $sorteio = rand( 1,10);//Sorteia um número de 1 ate 10!
        $numerosorteado = readline ("Informe o número!\n");//Pergunta qual números você acha que è!
            if($numerosorteado == $sorteio){//Vendo se o números que você informou e igual ao números sorteado!
                echo "voce acertou\n";//Escreve que você acertou o números sorteado!
            }else{//Caso você tenha errado!
                echo "Você errou!\n";//Escreve que você errou o números sorteado
                $erros++;//Acrecentar um a maìs!
                if($erros == 5){//Vendo se a variàvel $erros è igual a 5!
                    echo "Nossa que ruim!kkk";//Escreve que você errou as 5 chanches!
                    break;//Parar tudo!
                }//Fim do if
            }//Fim do senão
    }//Fim do while
