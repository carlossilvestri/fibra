<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
	<head>
	<?php
		// Definir un nombre para cachear
		$file = basename($_SERVER['PHP_SELF']);
		$pagina = str_replace(".php", "", $file);
		// Definir archivo para cachear (puede ser .php también)
		$archivoCache = 'cache/'.$pagina.'.php';
		// Cuanto tiempo deberá estar este archivo almacenado
		$tiempo = 36000;
		// Checar que el archivo exista, el tiempo sea el adecuado y muestralo
		if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
		include($archivoCache);
			exit;
		}
		// Si el archivo no existe, o el tiempo de cacheo ya se venció genera uno nuevo
		ob_start();
		$serverName = "server-moón";   // $_SERVER['SERVER_NAME'] not working because it takes localhost from container;
		$actual_link = "https://" . $serverName . ".com/";
		$year = date("Y");
		$phone = "919891119"; //web normal 931350811 . web oculta 919891119
		$titles = [
			"index.php" =>  "La conexión más rápida 5G",
			"fibra.php" =>  "Tarifas Fibra",
			"movil.php" =>  "Tarifas Móviles",
			"fibra-y-movil.php" =>  "Oferta Fibra + Móviles",
			"contacto.php" =>  "Contacto",
			"politica-de-privacidad.php" =>  "Política de Privacidad",
			"aviso-legal.php" =>  "Aviso Legal",
		];
	?>
		<title><?php echo $titles[$file] ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="Descubre las mejores ofertas en telefónia del mercado, planes diseñados para ti con Fibra + Móvil a precios muy económicos." /> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="icon" type="image/ico" href="img/favicon.ico" />
		<!-- Icons -->
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Two+Tone|" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;500;600&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
		<?php if($file == 'politica-de-privacidad.php' || $file == 'aviso-legal.php') echo '<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">' ?>
		<link href="css/bootstrap.min.css" rel="stylesheet" />  
		<link href="css/animate.min.css" rel="stylesheet" />
		<link href="css/magnific-popup.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
				
	</head>