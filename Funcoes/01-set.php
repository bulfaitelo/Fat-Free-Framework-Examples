<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
#mixed set (String $key, mixed $val [, int $ttl = 0])

// Trabalhando com o set;

// Exmeplos variados de variaveis 

$f3->set('a',123); // a variavel a  = 123
$f3->set('b','c'); // a variavel b ='c'  (string)
$f3->set('c','qualqer coisa'); // a variavel c = 'qualquer coisa' (string)

// Imprimindo saidas 
echo "<pre>";
echo "set 'a' saida=> ";
var_dump($f3->get('a'));
echo "set 'b' saida=> ";
var_dump($f3->get('b'));
echo "set 'c' saida=> ";
var_dump($f3->get('c'));
echo "</pre>";

// Exemplos de vetores 

$f3->set('hash',array ('x'=> 1, 'y'=> 2, 'z'=> 3));

//Támbém é possivel usar o ponto para criação de vetores
$f3->set('vetor.x',1);
$f3->set('vetor.y',2);
$f3->set('vetor.x',3);

// Imprimindo saidas
echo "<pre>";
echo "set 'hash' saida=> ";
var_dump($f3->get('hash'));
echo "set 'vetor' saida => ";
var_dump($f3->get('vetor'));
echo "</pre>";

// Exemplo de configração de propriedade de objeto
$f3->set('a', new\stdClass);
$f3->set('a->hello','Word');
echo $f3->get('a')->hello; // imprimie Word

// Imprimindo saidas
echo "<pre>";
echo "set 'a' <= 'new\stsClass' ";
var_dump($f3->get('a'));
echo "</pre>";

// Modo curto de uso.
/*
Cuidado para não definir nomes de de funções nativas do sistema.
*/
$f3->LANGUAGE = 'en';
$f3->foo = 1234;
$f3['bar']= "huehueBr";

// Imprimindo saidas
echo "<pre>";
echo "set '$f3->LANGUAGE' saida=> ";
var_dump($f3->LANGUAGE);
echo "set '$f3->foo' saida=> ";
var_dump($f3->foo);
echo 'set $f3[\'bar\'] saida=> ';
var_dump($f3['bar']);
echo "</pre>";