<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# void clear ( string $key )

// remove a chave completamente da memória. 

$f3->set('foobar','VALOR valorzãum');
var_dump($f3->get('foobar')); // imprime VALOR valorzãum
$f3->clear('foobar');
var_dump($f3->get('foobar')); // NULL

$f3->set('myArray', array(0 => 'abc', 1 => 'def'));
var_dump($f3->get('myArray')); // array(2) { [0]=> string(3) "abc" [1]=> string(3) "def" } 
$f3->clear('myArray.0');
var_dump($f3->get('myArray')); // array(1) { [1]=> string(3) "def" } 

// Casos especiais 
$f3->clear('SESSION'); // Destroi a SESSION do usuario
$f3->clear('COOKIE.foobar'); // Remove o 'foobar' do COOKIE
$f3->clear('CACHE'); // Limpa todos os caches 