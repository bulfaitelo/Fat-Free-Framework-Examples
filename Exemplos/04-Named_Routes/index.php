<?php
// FRAMEWORK F3
$f3 = require('../../lib/base.php');

class Beer{
	function list (){
		echo "berrrr list";
	}
}

// 04-Named_Routes
$f3->route('GET /', function(){echo 'home';});
$f3->route('GET /reroute',
	function ($f3){
		$f3->reroute('@beer_list'); // redirecionando para o /beer
	}
);
$f3->route('GET @beer_list: /beer', 'Beer->list');

$f3->run();
?>
<!DOCTYPE html>
<html>
<head>
	<title>// 03-About</title>
</head>
<body>
<br><br>
<a target='' href="reroute"> reroute View Beer list </a><br> 
</body>
</html>