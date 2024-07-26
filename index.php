<?php
/*
1 – Escreva um algoritmo para somar dois números e multiplicar o
resultado pelo primeiro número*/

$nota1= 20;
$nota2= 30;

$soma= $nota1 + $nota2;

$mult= ($soma*$nota1);

echo "$mult <br />\n";

/*2– Escreva um algoritmo que leia três números nas variáveis Val1, Val2
e Val3, calcule sua média na variável media e exiba para o usuário o resultado*/

// 1. ler e declarar variaveis
$Val1= 45;
$Val2= 55;
$Val3= 75;

// 2. calcular media
$media= ($Val1+ $Val2+ $Val3)/3;

// 3. exiba para o usuário o resultado
echo "$media <br />\n";

/*
Exercicio 3 – Escreva um algoritmo que receba um valor,
q calcule e 
mostre para usuário 15% deste valor.*/ 

 $a=12;
 $calc= $a*0.15;

 echo "$calc <br />\n";

 /*
 Exercicio 4 – Escreva um algoritmo que receba um valor, 
 calcule e 
 mostre para o usuário 5% 
 e 50% deste valo.*/

 $pudim=15 *0.5;
 $calda= $pudim *0.50;
 
 echo $pudim;
 echo " $calda <br />\n";

 /*5 – Escreva um algoritmo que leia dois números,
  calcule o quadrado de cada um, 
  some os quadrados e mostre o resultado.*/ 

$guarana= 20;
$antartica= $guarana **2;
echo "$antartica <br />\n";

/*6 – Escreva um algoritmo que leia a velocidade de um objeto em m/s
(metros por segundo), calcule e exiba para o usuário a velocidade em
km/h.*/ 

$lasanha= 30 *3.6;
$molhobranco= $lasanha /3.6;

echo "$lasanha <br />\n";
echo "$molhobranco <br />\n";

/*7 - Escreva um algoritmo que leia a altura e o peso de uma pessoa,
calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.*/

$peso= 70;
$altura= 1.80;

$gordura= $peso /$altura **2;

echo "$gordura <br />\n";


/*8 – Escreva um algoritmo que receba um valor, calcule e mostre um
desconto de 9%.*/

$lanchonete = 89 -0.9;
echo $lanchonete;

/*9 – Escreva um algoritmo que receba o valor de um produto e calcule um
desconto de 7%, exibindo para o usuário o valor original, o valor do
desconto e o valor com o desconto*/ 

$preço= 98;
$desc= 98 -0.7;

    echo "$preço <br />\n";
    echo "$desc <br />\n";