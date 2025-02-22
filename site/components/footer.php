<footer class="mt-3" style="padding: 20px; border: 1px solid #ccc;">
    <div class="flex justify-between align-center">
        <div style="width: 230px;" class="mobile-none">
            <img src="/site/img/icon-ig.svg" alt="" style="width: 30px;" />
        </div>
        <a href="" class="solo-mobile">
            <img src="/site/img/icon-ig.svg" class="icon" alt="">
        </a>
        <div class="flex justify-center align-center gap-3" style="font-size: 16px;">
            <a href="">Agenda una cita</a>
            <hr class="vertical">
            <a href="">Telefono</a>
            <hr class="vertical">
            <a href="">Mail</a>
        </div>
        <a href="" class="solo-mobile">
            <img src="/site/img/icon-map.png" class="icon" alt="">
        </a>
        <div style="width: 230px;" class="mobile-none">
            <strong class="font-1" style="text-align: right; cursor: pointer;" onclick="document.querySelector('#modal-map').showModal();"> Edificio El Pantalón, Bosques CDMX </strong>
        </div>
    </div>
    <dialog id="modal-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.572668145216!2d-99.25377042415704!3d19.38764754211376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2011b82970aab%3A0x37a457f2ca517728!2sOficinas%20Corporativas%20En%20Renta%20Torre%20Arcos%20Bosques!5e0!3m2!1ses!2smx!4v1740161556383!5m2!1ses!2smx" width="100%" height="99%" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </dialog>
</footer>
<script>
    // Cerrar el diálogo al hacer clic en el backdrop
    let dialog = document.getElementById('modal-map');
    dialog.addEventListener('click', (event) => {
        if (event.target === dialog) {
            dialog.close();
            dialog.addEventListener('transitionend', () => {
                dialog.close(); // Cierra el diálogo después de la animación
            }, {
                once: true
            });
        }
    });
</script>