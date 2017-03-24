<?php
// FRAMEWORK F3
$f3 = require('../../lib/base.php');


// 02-Routes_and_Tokens,
$f3->route('GET /',
    function() {
        echo 'Cervejas!!!';
    }
);
$f3->route('GET /brew/@count',
	function($f3){
		echo $f3->get('PARAMS.count').' garrafas de cerveja no balde!';
	}
);
$f3->run();
?>
<!DOCTYPE html>
<html>
<head>
	<title>// 02-About</title>
</head>
<body>
<br><br>
<a href="brew/99">99 garrafas </a><br>
</body>
</html>