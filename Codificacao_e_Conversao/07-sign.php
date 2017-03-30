<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# int sign ( mixed $num )

echo "<pre>"; 
echo $f3->sign(-5); // -1
echo "</pre><pre>"; 
echo $f3->sign(0); //  0
echo "</pre><pre>"; 
echo $f3->sign(6); //  1
echo "</pre>";