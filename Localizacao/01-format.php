<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');
header('Content-Type: text/html; charset=utf-8');
# lógica:
# string format( string $format [, mixed $arg0 [, mixed $arg1...]] )

// Formatando Numeros e textos:
echo "<pre>";
echo $f3->format("Nome: {0} - Idate: {1} \n", 'Bull', '28'); // Nome: Bull - Idate: 28 
echo $f3->format("Data Atual: {0, date} - Hora atual: {0, time}\n", time()); // Data Atual: 01/04/2017 - Hora atual: 14:33:59
echo $f3->format("Criado em: {0, date, custon, %A, Semana: %V}\n", time()); // Criado em: sábado, Semana: 13 (dia do teste)
echo $f3->format("{0} é exibido um numero decimal, enquanto {0,number,integer} é um numero arredondado\n", 12.54); // 12,54 é exibido um numero decimal enquanto 12,54 é um numero arredondado
echo $f3->format("Preço: {0, number, currency}\n", 29.90); // Preço: R$ 29,90
echo $f3->format("Porcentagem: {0,number, percent}\n", 0.175); // Porcentagem: 18%
echo $f3->format("Numero Decimal: {0, number, decimal,2}\n", 0.171232235); // Numero Decimal: 0,17
echo $f3->format("Numero Decimal: {0, number}\n", 1235488); // Numero Decimal: 1.235.488,00

echo "\n";
// Dialogos:
$lista_dialogo ='{0, plural,'.
		'zero	{Seu carrinho está vazio.},'.
		'one	{Um (#) item em seu carrinho.},'.
		'two	{Um par de itens em seu carrinho.},'.
		'other	{Você tem # itens en seu carrinho.}
}';

echo $f3->format($lista_dialogo."\n",0); // Seu carrinho está vazio.
echo $f3->format($lista_dialogo."\n",1); // Um (1) item em seu carrinho.
echo $f3->format($lista_dialogo."\n",2); // Um par de itens em seu carrinho.
echo $f3->format($lista_dialogo."\n",6); // Você tem 6 itens en seu carrinho.

echo "\n";
// Dialogos Segundo Exemplo: (GET)
$f3->set('os_livros',
	'{0, plural,'.
		'zero 	{Não a livros s#bre a mesa},'.
		'one 	{O livro está sobre a mesa},'.
		'two 	{Dois (#) livros sobre a mesa},'.
		'other 	{Existem # livros sobre a mesa (que mesa grande não?)},'.
	'}'
);

echo $f3->get('os_livros', 0)."\n"; // Não a livros s0bre a mesa
echo $f3->get('os_livros', 1)."\n"; // O livro está sobre a mesa
echo $f3->get('os_livros', 2)."\n"; // Dois (2) livros sobre a mesa
echo $f3->get('os_livros', 5)."\n"; // Existem 5 livros sobre a mesa (que mesa grande não?)
echo $f3->get('os_livros', 30)."\n"; // Existem 30 livros sobre a mesa (que mesa grande não?)
echo "</pre>";