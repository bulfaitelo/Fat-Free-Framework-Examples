<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# bool exists ( string $key [, mixed &$val=NULL] )

// verificando se uma variavel existe. 

$f3->set('foo','value');

var_dump($f3->exists('foo')); // true
var_dump($f3->exists('bar')); // false, was not set above)