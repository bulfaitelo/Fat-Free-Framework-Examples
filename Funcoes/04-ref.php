<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
#mixed &ref ( string $key [, bool $add = true ] )

// Trabalhando com o ref;
$f3->set('nome','Bulfaitelo'); // Declaro em nome a palavra Bulfaitelo
$a = &$f3->ref('nome'); // gero a referencia do nome a variável $a
$a = 'Fat-Free Framework'; // declaro atraves da referencia $a o novo valor da chave 'nome'
echo $f3->get('nome'); // ira imprimir Fat-Free Framework
echo "<br>";
echo "<br>";

// Seguno exemplo
$new = &$f3->ref('newVar'); // Criando a nova variavel 'newVar' e sua referencia ($new). 
$new = 'Olá Mundo';
echo $f3->get('newVar');
echo "<br>";

// Terceiro Exemplo (trabalhando com Objetos);
$newObject = &$f3->ref('newObj->name');
$newObject = "<br> Bull Project";
echo $f3->get('newObj')->name; // Bull Project
echo $f3->get('newObj->name'); // Bull Project
echo $f3->get("newObj.name"); // Bull Project
echo "<br>";
echo "<br>";
// outras fromas de trabalhar o ref()
$a = &$f3->ref('hero.name');
$a = "Goku";
echo $f3->get('hero')['name']; // Goku
echo "<br>";
echo $f3->get('hero.name'); // Goku 
echo "<br>";
// ou 
$b = &$f3->ref('hero'); // variavel
$b['name'] = "Saitama"; // criando o vetor e a posição 'name' dentro da variavel hero
$myArray = $f3->get('hero');

echo $myArray['name']; // Saitama