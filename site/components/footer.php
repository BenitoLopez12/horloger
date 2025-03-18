<footer class="mt-3" style="padding: 20px; border: 1px solid #ccc;">
    <div class="flex justify-between align-center">
        <div style="width: 230px;" class="mobile-none">
            <a href="https://www.instagram.com/hg_mexico?igsh=Zmt1ZTVpYnFsdjJn" target="_blanck">
                <img src="/site/img/icon-ig.svg" alt="" style="width: 30px;" />
            </a>
        </div>
        <a href="" class="solo-mobile">
            <img src="/site/img/icon-ig.svg" class="icon" alt="">
        </a>
        <div class="flex justify-center align-center gap-3" style="font-size: 16px;">
            <button onclick="document.querySelector('#modal-cita').showModal();">Agenda una cita</button>
            <hr class="vertical">
            <div href="tel:+525580003704" class="option-phone-info">
                Telefono
                <div class="phone-info">
                    <span>(55) 8000-3704</span>
                </div>
            </div>
            <hr class="vertical">
            <a href="mailto:info@hgmexico.com.mx">Email</a>
        </div>
        <button class="" onclick="document.querySelector('#modal-map').showModal();">
            <img src="/site/img/icon-map.png" class="icon" alt="">
        </button>
    </div>
    <dialog id="modal-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.5727846988757!2d-99.2511955!3d19.3876425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2011b82970aab%3A0x37a457f2ca517728!2sOficinas%20Corporativas%20En%20Renta%20Torre%20Arcos%20Bosques!5e0!3m2!1ses-419!2smx!4v1741365984461!5m2!1ses-419!2smx" width="100%" height="99%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </dialog>

    <dialog id="modal-cita">
        cita
    </dialog>
</footer>
<script>
    // Cerrar el diálogo al hacer clic en el backdrop
    document.querySelector('body').addEventListener('click', () => {
        let dialog = document.querySelector('dialog:hover');
        if (dialog === dialog) {
            dialog.close();
        }
    });
</script>