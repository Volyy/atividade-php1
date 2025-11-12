<?php

$chute = 0;
$tentativas = 10;


$min = readline("escolha o valor minimo: ");
$max = readline("escolha o valor maximo: ");

$sorteado = rand($min,$max);

while($tentativas > 0 and $chute != $sorteado){

    $chute = (int) readline("digite um número: ");
    $tentativas--;

if ($chute == $sorteado) {

    print("\033[32mVoce ganhou!!!\033[0m\n");
    
    $pontuacao = 100 * ($tentativas + 1);
    print("\033[32mSua pontuacao foi: $pontuacao \033[0m\n");

    
} else{
    print("\033[31mVoce perdeu!!!\033[0m\n");

    if( $chute < $sorteado) {
        print("seu chute foi baixo!!\n");
    } else{
        print("seu numero foi alto!!\n");
    }
    print("\033[33mTentativas restantes: $tentativas\033[0m\n");
}
}

if($tentativas == 0){
  print("\033[35mSuas tentativas acabaram. O número era $sorteado.\033[0m\n");
}


