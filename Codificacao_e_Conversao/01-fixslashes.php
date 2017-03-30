<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string fixslashes ( string $str )

$old_file_path = __FILE__;
echo "<pre>";
var_export($old_file_path); // \www\meusite\meu_arquivo.txt
echo "</pre>";

$new_file_path = $f3->fixslashes($old_file_path); 
echo "<pre>";
var_export($new_file_path); // /www/meusite/meu_arquivo.txt
echo "</pre>";