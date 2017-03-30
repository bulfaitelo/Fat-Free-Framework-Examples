<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string concat ( string $key, string $val )

// Retornar um resultado concatenado. 

$f3->set('count',99);
$f3->set('item', 'chocolate');

$text = $f3->concat('count', ' Barras de '. $f3->get('item'));
$text.= ' na minha geladeira';

$f3->concat('wall', $f3->get('count')); // a chave wall foi criada 
echo $f3->get('wall');
echo "<br>";
echo $text;