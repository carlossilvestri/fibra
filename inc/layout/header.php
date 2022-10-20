<?php
    // Definir un nombre para cachear
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
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

    $pages = [
        "index.php" => "Inicio",
        "fibra.php" => "Fibra Óptica",
        "movil.php" => "Planes Móvil",
        "fibra-y-movil.php" => "Fibra + Móvil",
        "contacto.php" => "Contacto",
    ];
	$titles = [
		"index.php" => "Inicio",
		"fibra.php" => "Tarifas Fibra",
		"movil.php" => "Tarifas Móvil",
		"fibra-y-movil.php" => "Ofertas Fibra + Móvil",
		"contacto.php" => "Atención disponible 24h",
		"politica-de-privacidad.php" => "Política de Privacidad",
		"aviso-legal.php" => "Aviso Legal",
	];
?>

<header class="header">
		<div class="container">
			<div class="header-content">
				<div class="logo-wrapper">
					<a href="index.php" style="text-decoration:none">
						<h3 class="logo-header"><span class="header-name"><?php echo $serverName; ?> | </span><span class="logo-color"><?php echo $titles[$archivo] ?></span></h3>
					</a>
				</div>
				<div class="nav-wrapper nav-wrapper-d">
					<div class="nav-content">
						<ul class="nav">
                            <?php foreach($pages as $key => $value) {   ?>
                                <?php $mapPage = str_replace(".php", "", $key); ?>   
                                <li <?php if($mapPage == $pagina) echo 'class="active"'; ?>><a href="<?php echo $key ?>"><?php echo $value ?></a></li>
                            <?php } ?>
						</ul>
					</div>
				</div>
				<div class="mobile-nav-trigger"><span class="material-icons-two-tone">menu</span></div>
			</div>
		</div>
	</header>