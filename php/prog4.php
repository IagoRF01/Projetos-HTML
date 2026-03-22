<?php

$nome = readline("Digite seu nome: ");
$idade = readline("Digite sua idade: ");

echo "Seu nome é $nome e sua idade é $idade";
echo "\n\n";

if($idade>18){
	echo "Você é de maior.";
}else{
	echo "Você é de menor.";
}