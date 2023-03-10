<?php
include 'inc/layout/head.php';
include 'inc/layout/validate-recapchat.php';
?>

<body class="page-subpage page-subpage-fnp page-subpage-contact">

	<?php
	include 'inc/layout/header.php';
	?>
	<section class="c-s section-main-contact-method">
		<div class="container">
			<div class="section-content section-four-content">
				<div class="row dm">
					<div class="col-lg-12 dp">
						<span class="hero-contact-title text-center" style="color:white!important;">Contacta con nosotros</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c-s section-call-cta text-center">
		<div class="container">
			<div class="section-content section-call-cta-content">
				<div class="section-title-wrapper text-center">
					<h2 class="section-title text-white text-center" style="color:var(--default-color-invert)!important;text-transform:none;">Teléfono Disponible 24 horas</h2>
					<div class="modal-end-cta-button-w">
						<form method="post" class="container m-4">
							<p class="text-white text-center call-cta-text">Verifica que no seas un robot:</p>
							<div class="container">
								<div class="d-flex justify-content-center">
									<div class="g-recaptcha" data-sitekey="6LeNQOskAAAAAEie5LeWVZQWTDMDBfzyOXVdUQX-"></div>
									<button class="btn btn-primary"type="submit" name="submit">Verificar</button>
								</div>
							</div>
						</form>
						<?php if($real_user){?>
							<a class="button content-button call-cta-big-button" onclick="saveOption(this, 'conversion');" href="tel:<?php echo $phone ?>"><i class="fas fa-phone-alt" aria-hidden="true" style="margin-left: 15px;margin-right: 5px;"></i><span><?php echo $phone ?></span></a>
							<p class="text-legal"><?php echo $footerInfo ?></p>
						<?php }?>
						</div>
				</div>
				<p class="text-white text-center call-cta-text">¿Necesita Ayuda? Contacte con nuestro equipo en cualquier momento, disponemos de técnicos especializados que solucionarán cualquier incidencia con su línea. El servicio de atención al cliente está disponible los 365 días del año, 24 horas al día. Llámenos en cualquier momento y le ayudaremos.</p>

			</div>
		</div>
	</section>
	<section class="c-s section-about">
		<div class="container">
			<div class="section-content section-about-content">
				<div class="row dm">
					<div class="col-lg-6 dp">
						<div class="about-img-w mimg-t">
							<img src="img/about-1-im.jpg" class="about-img img-fluid" alt="" />
						</div>
					</div>
					<div class="col-lg-6 dp">
						<div class="about-text about-text-1">
							<span class="primary-accent about-subtitle">ACERCA DE <span class="domain"><?php echo $serverName; ?></span></span>
							<h2 class="about-title">¡Disfruta de la mejor Fibra 5G y el contenido multimedia 4K y <span class="primary-accent">mucho más</span> !</h2>
							<p>Te damos acceso a las mejores plataformas de Streaming con la máxima calidad 4K, cargará a la velocidad de la luz con tu conexión 5G.</p>
							<div class="button-wrapper">
								<a class="button contact-modal-trigger">Quiero más información</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row dm row-mt">
					<div class="col-lg-6 dp">
						<div class="about-text about-text-2 text-right">
							<span class="primary-accent about-subtitle">¿Tu internet es muy lento?</span>
							<h2 class="about-title">Contrata la línea móvil 5G <span class="primary-accent">Velocidad de vértigo</span></h2>
							<p>Nunca más volverás a sufrir por cargas lentas, ahora con la velocidad 5G de tu línea móvil podrás descargar juegos y películas en segundos.</p>
							<div class="button-wrapper">
								<a class="button contact-modal-trigger">Contratar Línea 5G</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 dp">
						<div class="about-img-w mimg-t">
							<img src="img/about-2-im.jpg" class="about-img img-fluid" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	include 'inc/layout/footerLayout.php';
	?>