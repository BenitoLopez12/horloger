<div class="marquee">
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <div class="logos-marcas">
        </div>
    <?php } ?>
</div>

<script>
    async function cargarLogosMarcas() {
        const sheetId = "1iaKdpzXP0k0OmIfoGhRJlqzpMD_EpWC1NrgCEomL6NI"; // Tu ID de Google Sheets
        const sheetName = "marcas"; // Nombre de la hoja
        const url = `https://opensheet.elk.sh/${sheetId}/${sheetName}`;

        try {
            const response = await fetch(url);
            const data = await response.json();

            const contenedores = document.querySelectorAll(".logos-marcas");
            contenedores.forEach(contenedor => {

                contenedor.innerHTML = ""; // Limpiar antes de agregar

                data.forEach(marca => {
                    if (marca["LOGO URL"]) { // Asegurar que hay un URL válido
                        const img = document.createElement("img");
                        img.src = marca["LOGO URL"];
                        img.alt = `Logo de ${marca["MARCA"]}`;
                        contenedor.appendChild(img);
                    }
                });
            });

        } catch (error) {
            console.error("Error cargando los logos:", error);
        }
    }

    // Llamar la función cuando cargue la página
    document.addEventListener("DOMContentLoaded", cargarLogosMarcas);
</script>