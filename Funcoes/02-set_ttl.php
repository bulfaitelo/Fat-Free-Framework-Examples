<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

// por padrão o cache fica desativado, entamos precisamos Ativar 
$f3->set('CACHE',FALSE);
# lógica:
#mixed set (String $key, mixed $val [, int $ttl = 0])

// Trabalhando com o set;

// Exmeplos variados de variaveis :)
$f3->set('a',123, 3600); // a variavel a  = 123, salvas no cache por 1 hora
$f3->set('b','c', 60); // a variavel b ='c'  (string), salvas no cache por 60 segundos
$f3->set('c','qualqer coisa', 2); // a variavel c = 'qualquer coisa' (string), salvas no cache por 3 segundos

// Imprimindo saidas 
echo "<pre>";
echo "set 'a' saida=> ";
var_dump($f3->get('a'));
echo "set 'b' saida=> ";
var_dump($f3->get('b'));
echo "set 'c' saida=>  antes do sleep: \n";
var_dump($f3->get('c'));
echo "set 'c' saida=>  antes do sleep: \n";
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

