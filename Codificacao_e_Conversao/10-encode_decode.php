<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string encode ( string $str )
# string decode ( string $str )

echo $encoded = $f3->encode("Aqui será <b> Codificado </b>"); // Aqui será &lt;b&gt; Codificado &lt;/b&gt
echo "<br>";
echo $f3->decode($encoded);  // Aqui será Codificado (codificado em strong)