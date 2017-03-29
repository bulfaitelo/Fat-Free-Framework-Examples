<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# bool exists ( string $key [, mixed &$val=NULL] )

// verificando se uma variavel existe.
$f3->set('foo','value');

var_dump($f3->exists('foo')); // true
var_dump($f3->exists('bar')); // false, porque a variavel não foi definida)

// para funcionar tem que usar a função $f3->sync(); para sincronizar as as globais
var_dump($f3->exists('COOKIE.userid')); 
var_dump($f3->exists('SESSION.login')); 
var_dump($f3->exists('POST.submit')); 
// todas retornam false, não foram definidas antes.