<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string base64 ( string $data, string $mime )

echo $saida = $f3->base64('<b> Stronnnng! </b>','text/html'); //data:text/html;base64,PGI+IFN0cm9ubm5uZyEgPC9iPg==
echo "<br>";

echo base64_decode('PGI+IFN0cm9ubm5uZyEgPC9iPg=='); // <b> Stronnnng! </b>