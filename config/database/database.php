<?php 
	define("host", "localhost");
	define("user", "root");
	define("pass", "");
	define("data", "webmasters");


	$ConnectionObject = new mysqli(host, user, pass, data)
	or die ("Error: ");

 ?>