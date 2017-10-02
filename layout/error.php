<html>
	<head>
		<title>Error | Webmasters</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/ui.css">
	</head>
	<body>
		 <div class="show-error">
		 	<p class="message-error">La página <?php $viewError = $_GET['view'];echo $viewError; ?> que estabas buscando, no existe.</p>
		 	<p class="go-back"><a href="index.php?view=inicio">Regresar al inicio</a></p>
		 </div>
	</body>
</html>