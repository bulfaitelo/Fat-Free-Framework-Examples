<?php

// FRAMEWORK F3
$f3 = require('../lib/base.php');

# lógica:
# string build ( string $url [, array $params = array() ] )

$f3->set('PARAMS.canal','Bullboladao');

echo "<br>";
echo $f3->build('@canal'); // exibe 'Bullboladao'
echo "<br>";
echo $f3->build('/get-it/now/@canal'); // exibe '/get-it/now/Bullboladao'
echo "<br>";
echo $f3->build('/subscribe/@canal');  // exibe '/subscribe/Bullboladao'
echo "<br>";
echo  $f3->build('/resize/@format/*/sep/*', array(
	'format'=>'100x100',
	2		=>'foo/bar',
	3		=>'baz.gif'
	));

echo $f3->build('/resize/@format/*/sep/*',array(
  'format'=>'200x200',// 1=>'200x200' também deferia funcionar. 
  2=>'foo/bar',
  3=>'baz.gif'
));

