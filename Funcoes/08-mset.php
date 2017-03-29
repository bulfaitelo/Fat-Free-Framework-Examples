<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# void mset ( array $vars [, string $prefix = '' [, integer $ttl = 0 ]] )

// Atribuição de múltiplas variáveis usando matriz associativa
$f3->mset(array(
		'var1'=> 'Valor1',
		'var2'=> 'Valor2',
		'var3'=> 'Valor3'
	)
);

var_dump($f3->get('var1'));
var_dump($f3->get('var2'));
var_dump($f3->get('var3'));

// Atribuição de múltiplas variáveis usando matriz associativa com prefixo
$f3->mset(array(
		'var1'=> 'Valor1',
		'var2'=> 'Valor2',
		'var3'=> 'Valor3'
	),
	'pre_'
);

var_dump($f3->get('pre_var1'));
var_dump($f3->get('pre_var2'));
var_dump($f3->get('pre_var3'));