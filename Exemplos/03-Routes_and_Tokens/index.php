<?php
// FRAMEWORK F3
$f3 = require('../../lib/base.php');


// 03-Routes_and_Tokens,
$f3->route('GET /',
    function() {
        echo 'Cervejas!!!';
    }
);
$f3->route('GET /brewGet/@count',
	function($f3){
		echo $f3->get('PARAMS.count').' garrafas de cerveja no balde!';
	}
);
$f3->route('GET /brew/@count',
	function ($f3, $params){
		echo $params['count'].' garrafas de cerveja no balde!';
	}
);
// Nesse caso aqui ele ira retornar true caso qualquer valor após o /brew/* comente os dois Get /brew para realizar o teste.
$f3->route('GET /brew/*',
	function(){
		echo "Estamos sem cerveja :/";		
	}
);
// $f3->route('GET /brew/*',
// 	function($f3, $params){
// 		// echo "Estamos sem cerveja :/";
// 		var_dump($params);
// 	}
// );
$f3->run();
?>
<!DOCTYPE html>
<html>
<head>
	<title>// 03-About</title>
</head>
<body>
<br><br>
<a target='_blank' href="brewGet/99">99 garrafas </a><br>
<a target='_blank' href="brew/120">120 garrafas </a><br>
<a target='_blank' href="brew/Haaaaa/qwe?test=123">Cabou as cervejas </a><br>
</body>
</html>