<footer class="" style="padding: 20px;">
    <div class="flex justify-between align-center">
        <div class="" style="font-size: 16px;">
            <div class="flex gap-3 align-center">
                <div>
                    <a href="https://www.instagram.com/hg_mexico?igsh=Zmt1ZTVpYnFsdjJn" target="_blanck">
                        <img src="/site/img/icon-ig.svg" alt="" style="width: 30px;" />
                    </a>
                </div>
                <hr class="vertical">
                <div>
                    <button onclick="document.querySelector('#modal-cita').showModal();">Agenda una cita</button>
                    <br>
                    <a href="tel:+525580003704" class="option-phone-info option-default">
                        <!-- Telefono -->
                        <!-- <div class="phone-info flex justify-center align-center gap-1"> -->
                        <span>(55) 8000-3704</span>

                        <!-- <button class="copy-btn" onclick="copyToClipboard('+525580003704');">
                <img src="/site/img/icon-copy.svg" alt="icono copiar">
            </button> -->
                        <!-- </div> -->
                    </a>
                    <br>
                    <a href="mailto:info@hgmexico.com.mx" class="option-email-info option-default">
                        <!-- Email -->
                        <!-- <div class="phone-info flex justify-center align-center gap-1"> -->
                        <span>info@hgmexico.com.mx</span>

                        <!-- <button class="copy-btn" onclick="copyToClipboard('info@hgmexico.com.mx');">
                <img src="/site/img/icon-copy.svg" alt="icono copiar" style="width: 28px;">
            </button> -->
                        <!-- </div> -->
                    </a>
                </div>
            </div>
        </div>
        <button class="text-center" onclick="document.querySelector('#modal-map').showModal();">
            <img src="/site/img/icon-map-strong.svg" class="icon" alt=""><br>
            <span style="font-size: 16px;"><strong style="font-family: poppins;">CDMX</strong></span><br>
            <small class="mobile-none" style="font-size: 9px; opacity: 0.8;">P.º de los Tamarindos 400A-Piso 6, <br> Bosques de las Lomas, Cuajimalpa</small>
        </button>
    </div>
</footer>
<dialog id="modal-map" style="height: 90dvh;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.5727846988757!2d-99.2511955!3d19.3876425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2011b82970aab%3A0x37a457f2ca517728!2sOficinas%20Corporativas%20En%20Renta%20Torre%20Arcos%20Bosques!5e0!3m2!1ses-419!2smx!4v1741365984461!5m2!1ses-419!2smx" width="100%" height="99%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</dialog>

<dialog id="modal-cita">
    <div class="content-modal">
        <div class="">
            <form id="form-contact" action="asd" method="POST">
                <h2 id="title-contactanos" class="text-center font-2">¡Agenda tu Visita!</h2>
                <div class="form-item">
                    <label for="nombre">Nombre</label>
                    <input
                        id="nombre"
                        type="text"
                        name="nombre"
                        placeholder=""
                        class="form-camp"
                        autocomplete="off"
                        required />
                </div>

                <div class="d-flex-form">
                    <div class="form-item">
                        <label for="numero">Teléfono</label>
                        <input
                            id="numero"
                            type="cel"
                            name="numero"
                            placeholder=""
                            class="form-camp"
                            autocomplete="off"
                            required />
                    </div>
                    <div class="form-item">
                        <label for="correo">Email</label>
                        <input
                            id="correo"
                            type="email"
                            name="correo"
                            placeholder=""
                            class="form-camp"
                            autocomplete="off"
                            required />
                    </div>
                </div>

                <div class="form-item">
                    <label for="mensaje">Seleccione la fecha para agendar </label>
                    <input
                        id="correo"
                        type="datetime-local"
                        name="agenda"
                        placeholder=""
                        class="form-camp"
                        autocomplete="off"
                        required />
                </div>

                <div
                    class="form-item flex justify-between align-center">
                    <span style="color: #808080;">
                        <i>Nos pondremos en contacto contigo para confirmar la cita.</i>
                    </span>
                    <button id="btn-send-form" class="">
                        <span>AGENDAR</span>
                        <img
                            class="icon-loading"
                            src="img/icon-loading.svg"
                            alt="enviando" />
                        <img
                            class="icon-check"
                            src="img/icon-check.svg"
                            alt="enviado" />
                    </button>
                </div>
            </form>
        </div>
    </div>
</dialog>
<script>
    function abrirModal(index) {
        document.querySelectorAll("dialog")[index].showModal();
    }

    function cerrarModal(button) {
        button.closest("dialog").close();
    }

    document.querySelectorAll("dialog").forEach(modal => {
        modal.addEventListener("click", function(event) {
            if (!event.target.closest(".content-modal")) {
                modal.close();
            }
        });
    });

    document.getElementById('form-contact').addEventListener('submit', function(e) {
        e.preventDefault();

        const datos = new FormData(this);
        const datosJson = {};

        datos.forEach((value, key) => {
            datosJson[key] = value;
        });

        const btnSend = document.getElementById('btn-send-form');

        const titleContact = document.getElementById('title-contactanos');

        btnSend.classList.add('enviando');

        document.querySelectorAll('#form-contact input').forEach(input => {
            input.setAttribute('disabled', true);
        });
        btnSend.setAttribute('disabled', true);
        // document.querySelector('#form-contact textarea').setAttribute('disabled', true);

        fetch("https://formsubmit.co/ajax/benito.lopez.tecno@gmail.com", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(datosJson)
            })
            .then(response => response.json())
            .then(data => {
                btnSend.classList.add('enviado');
                btnSend.classList.remove('enviando');

                titleContact.innerHTML = '<strong> ¡Gracias por tu mensaje! </strong> Nos pondremos en contacto pronto';
                titleContact.style.color = '#a45bac';
                titleContact.style.fontWeight = 'lighter';
            })
            .catch(error => {
                console.log(error);
                btnSend.classList.remove('enviando');
            });
    });

    function copyToClipboard(text) {
        if (navigator.clipboard && window.isSecureContext) {
            // Navigator clipboard api needs a secure context (https)
            return navigator.clipboard.writeText(text);
        } else {
            // text area method
            let textArea = document.createElement("textarea");
            textArea.value = text;
            // Make the textarea out of viewport
            textArea.style.position = "absolute";
            textArea.style.left = "-999999px";
            document.body.prepend(textArea);
            textArea.select();
            return new Promise((res, rej) => {
                document.execCommand('copy') ? res() : rej();
                textArea.remove();
            });
        }
    }
</script>