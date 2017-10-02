<?php 

	function GetRouter(){
		if (isset($_GET['view'])) {
			$view = $_GET['view'];
		}else{
			$view = "home";
		}


		Router($view);
	}


	function Router($_view){
		switch ($_view) {
			case 'inicio':
				Renderview("inicio");
				break;

			case 'proyectos':
				Renderview("proyectos");
				break;

			case 'nosotros':
				Renderview("nosotros");
				break;	

			case 'contactanos':
				Renderview("contacto");
				break;

			default:
				Renderview("error");
				break;
		}
	}

	function Renderview($_viewname){


		$filename = "layout/".$_viewname.".php";
		if (file_exists($filename)) {
			include($filename);
		}else{
			echo "Error, no existe el archivo.";
		}
	}
 ?>