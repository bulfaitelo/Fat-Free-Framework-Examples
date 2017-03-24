<?php
// FRAMEWORK F3
$f3 = require('../../lib/base.php');

class webPage {
	function display(){
		echo "Eu não posso instanciar a um objeto";
	}
}
class user {
	public static function greet($args){ // $args são to dipo Vetor
		echo "Olá ".$args['name'];
	}
}

// 02-About
	// HOME
	$f3->route('GET /', 
	    function() {
	        echo 'Hello, world!';
	    }
	);
	// reroute para home /
	$f3->route('GET /home', 
	    function($f3) {
	        $f3->reroute('/');
	    }
	);
	// About
	$f3->route('GET /about',
		function() {
			echo "estamos exibindo o About";
		}
	);
	$f3->route('GET /aboutObject','webPage->display');
	$f3->route('GET /hello/@name', 'user::greet');
	$f3->run();
?>
<!DOCTYPE html>
<html>
<head>
	<title>// 02-About</title>
</head>
<body>
<br><br>
<a href="home">home</a><br>
<a href="about">about</a><br>
<a href="aboutObject">aboutObject</a><br>
<a href="hello/PessoinhaLegal">hello/ Pessoinha Legal</a><br>
</body>
</html>