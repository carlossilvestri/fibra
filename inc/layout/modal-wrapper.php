<div id="contact-modal-wrapper" class="contact-modal-wrapper mfp-hide  animate__animated">
    <div id="close-modal"><span class="material-icons-two-tone">cancel</span></div>
    <div class="contact-modal-content">
        <div class="contact-modal-form-wrapper">
            <h2 class="contact-title text-center">¿En qué podemos ayudarte?</h2>
            <form id="contact-modal-form" action="includes/contact/sendcontact.php" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="contact-input-wrapper">
                                <span class="material-icons-two-tone input-icon">account_circle</span>
                                <input id="contactName" type="text" class="contact-input" name="contactName" placeholder="Nombre..." required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="contact-input-wrapper">
                                <span class="material-icons-two-tone input-icon">phone</span>
                                <input id="contactPhone" type="text" class="contact-input" name="contactPhone" placeholder="Teléfono..." required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="contact-input-wrapper">
                        <span class="material-icons-two-tone input-icon">email</span>
                        <input id="contactEmail" type="email" class="contact-input" name="contactEmail" autocomplete="email" placeholder="Email..." required>
                    </div>
                </div>
                <div class="contact-button-wrapper text-center">
                    <button type="submit" class="button">Enviar información</button>
                </div>
                <div id="mail-status"></div>
            </form>
        </div>
    </div>
</div>