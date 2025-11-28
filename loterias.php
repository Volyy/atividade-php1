<?php

$pagar = 0;

function menu(&$pagar):void {
  $continuar = true;
  do{
    
        print("voce ja gastou R$ $pagar \n\n");
      print("\n ***-ESCOLHA UMA DAS LOTERIAS--*** \n");
        print("[1]- MEGA SENA \n");
        print("[2]- QUINA \n");
        print("[3]- LOTOMANIA \n");
        print("[4]- LOTOFACIL \n");
        print("[0]- SAIR \n");
        $opcao = (int) readline("\nDigite a opção desejada: ");

        switch ($opcao) {
            case 1:
                print("\nVocê escolheu:MEGA SENA!\n");
                megasena($pagar);
                
                break;
            case 2:
                print("\nVocê escolheu:QUINA!\n");
                quina($pagar);
                break;
            case 3:
                print("\nVocê escolheu:LOTOMANIA!\n");
                lotomania($pagar);
                break;
            case 4:
                print("\nVocê escolheu:LOTOFACIL!\n");
                lotofacil($pagar);
                break;
            case 0:
                print("\nSaindo...\n");
               
                $continuar = false;
                break;
            default:
                print("\nOpção inválida. Tente novamente.\n");
                break;
        }


  }while($continuar);
}  

function megasena(&$pagar):void
{
    $qntdJogos = readline("Quantos jogos você quer fazer? ");
    
    
   $aceito = false;

        while($aceito == false){
            $qntdDezenas = readline("Quantas dezenas você quer jogar a cada jogo?(6 a 20) ");
            if($qntdDezenas >= 6 and $qntdDezenas <= 20){
                $aceito = true;
            }else{
                print("Número inválido! Tente novamente.\n");
            }
        }

  jogar($qntdJogos, $qntdDezenas,60);

   // Tabela de preços da Mega-Sena
    $precos = [
        6  => 5.00,
        7  => 35.00,
        8  => 140.00,
        9  => 420.00,
        10 => 1050.00,
        11 => 2310.00,
        12 => 4620.00,
        13 => 8580.00,
        14 => 15015.00,
        15 => 25025.00,
        16 => 40040.00,
        17 => 61880.00,
        18 => 92820.00,
        19 => 135660.00,
        20 => 193800.00
    ];
    $pagar +=  $precos[$qntdDezenas] * $qntdJogos;
  
    }
    
    function quina(&$pagar):void{
        $qntdJogos = readline("Quantos jogos você quer fazer? ");
      
        $aceito = false;

        while($aceito == false){
            $qntdDezenas = readline("Quantas dezenas você quer jogar a cada jogo?(5 a 15) ");
            if($qntdDezenas >= 5 and $qntdDezenas <= 15){
                $aceito = true;
            }else{
                print("Número inválido! Tente novamente.\n");
            }
        }
        
      
      jogar($qntdJogos, $qntdDezenas,80);
  
  
      // Tabela de preços da Quina
      $precos = [
        
          5  => 3.00,
          6  => 18.00,
          7  => 63.00,
          8  => 168.00,
          9  => 378.00,
          10 => 756.00,
          11 => 1386.00,
          12 => 2376.00,
          13 => 3861.00,
          14 => 6006.00,
          15 => 9009.00

        ];
        $pagar +=  $precos[$qntdDezenas] * $qntdJogos;}


    function lotomania(&$pagar):void{
        $qntdJogos = readline("Quantos jogos você quer fazer? ");
        
      
      jogar($qntdJogos, 50 ,100);

      $pagar += 3.00 * $qntdJogos;
    }
    function lotofacil(&$pagar):void{
        $qntdJogos = readline("Quantos jogos você quer fazer? ");
       $aceito = false;

        while($aceito == false){
            $qntdDezenas = readline("Quantas dezenas você quer jogar a cada jogo?(15 a 20) ");
            if($qntdDezenas >= 15 and $qntdDezenas <= 20){
                $aceito = true;
            }else{
                print("Número inválido! Tente novamente.\n");
            }
        }
      
      jogar($qntdJogos, $qntdDezenas,25);

      $precos = [
        15 => 3.50,
        16 => 56.00,
        17 => 476.00,
        18 => 2856.00,
        19 => 13566.00,
        20 => 54264.00
    ];
    $pagar +=  $precos[$qntdDezenas] * $qntdJogos;
    }

function sortear($qntdDezenas,$maxNumero) : void {
    $numerosSorteados = [];
    while (count($numerosSorteados) < $qntdDezenas) {
        $numero = rand(1, $maxNumero);
        if (!in_array($numero, $numerosSorteados)) {
            $numerosSorteados[] = $numero;
        }
    }
    sort($numerosSorteados);
   
   for($i = 0; $i < count($numerosSorteados); $i++) {
        if ($i == count($numerosSorteados) - 1) {
            print($numerosSorteados[$i] . "\n");
        } else {
            print($numerosSorteados[$i] . " - ");
        }
    }
    print("\n");
}
function jogar($qntdJogos, $qntdDezenas, $maxNumero): void {
    $contador = 0;
    while ($qntdJogos > $contador) {
        print("jogo " . ($contador + 1) . ": ");
        sortear($qntdDezenas,$maxNumero);
        $contador++;
    }
}

menu($pagar);
