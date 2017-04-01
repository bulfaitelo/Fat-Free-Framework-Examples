<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string format( string $format [, mixed $arg0 [, mixed $arg1...]] )

echo $f3->format("Nome: {0} - Idate: {1}", 'Bull', '28');