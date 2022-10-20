<div id="question-modal-wrapper" class="question-modal-wrapper mfp-hide animate__animated animate__slideInUp">
		<div id="close-modal"><span class="material-icons-two-tone">cancel</span></div>
		<div class="question-modal-content">
			<div class="question-modal-step-1-wrapper">
				<h2 class="contact-title text-center">¿Qué necesitas?</h2>
				<div class="answers-wrapper">
					<div class="answer-button answer-button-1">ATENCIÓN PERSONALIZADA</div>
					<div class="answer-button answer-button-1">AYUDA CON MI FACTURA</div>
					<div class="answer-button answer-button-1">AVERÍAS</div>
					<div class="answer-button answer-button-1">INFORMACIÓN COMERCIAL</div>
				</div>
			</div>
			<div class="question-modal-step-2-wrapper">
				<h2 class="contact-title text-center">Teléfono de Contacto</h2>
				<h2 style="color: var(--primary-color);font-size: 2em;margin-top: -20px;margin-bottom: 10px;text-align:center;"><?php echo $phone ?></h2>
				<div class="modal-end-cta-button-w">
					<p style="margin-bottom:-1px;">Haga click en el botón para llamar</p>
					<a class="button content-button modal-end-cta-button" style="text-transform:none" onclick="saveOption(this, 'conversion');" href="tel:<?php echo $phone ?>"><span class="material-icons-two-tone button-icon">phone</span><span>Llamar ahora</span></a>
					<p class="text-legal">Puedes llamar al teléfono <?php echo $phone ?> de forma totalmente gratuita y le atenderemos sin compromiso.</p>
				</div>
			</div>
		</div>
	</div>