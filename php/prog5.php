<?php

echo "\nJOGO DA ROLETA RUSSA\n\nOlá, seja bem vindo\n\n";
$num = rand(1,100);
for($i=0; $i<7 ; $i++){
	$a=7-$i;
	echo "\nVocê tem um total de $a chances!\n";
	$valor = readline("Digite um número aleatório entre 1 a 100: ");
	if($valor == $num){
		echo "\nVocê acertou!\nParabéns você sobreviveu!";
		$a=0;
		break;
	}elseif($valor > $num){
		echo "\nVocê errou!\nO número que você deu é muito alto!\n\n";
		sleep (5);
		system ("cls");
	}else{
		echo "\nVocê errou!\nO número que você deu é muito baixo!\n\n";
		sleep (5);
		system ("cls");
	}
}
if($a!=0){
	echo "Você morreu!\n";
}