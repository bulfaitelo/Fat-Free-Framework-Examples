<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# mixed mock ( string $pattern [, array $args = NULL [, array $headers = NULL [, string $body = NULL ]]] )

//$f3->mock('GET /pagina/view [ajax]'); // exemplo basico de uso. 

$f3->route('GET @grub:/food/@nome',
    function($f3) {
        echo 'Olá, '.$f3->get('PARAMS.nome') ;
    }
);
$f3->mock('GET @grub(@nome=Bull)');

var_dump($f3->get('PARAMS')); // verificando que o nome recebei o valor Bull.