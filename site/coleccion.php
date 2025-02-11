<!DOCTYPE html>
<html lang="es-MX">

<head>
    <?php include('components/head.php'); ?>
    <link rel="stylesheet" href="css/coleccion.css" />
</head>

<body>

    <?php include('components/header.php'); ?>
    <div class="content-limit">
        <div class="flex" style="margin-top: 100px; justify-content: flex-end;">
            <a href="/site/reloj.php" class="btn-border">
                RELOJES
            </a>
        </div>
    </div>
    <div class="marquee mt-1">
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <div class="logos-marcas">
                <img src="/site/img/logo-marca-1.png" alt="Logo de marca">
                <img src="/site/img/logo-marca-2.png" alt="Logo de marca">
                <img src="/site/img/logo-marca-3.png" alt="Logo de marca">
                <img src="/site/img/logo-marca-4.png" alt="Logo de marca">
                <img src="/site/img/logo-marca-5.png" alt="Logo de marca">
                <img src="/site/img/logo-marca-6.png" alt="Logo de marca">
                <img src="/site/img/logo-marca-7.png" alt="Logo de marca">
                <img src="/site/img/logo-marca-8.png" alt="Logo de marca">
            </div>
        <?php } ?>
    </div>

    <div class="content-limit">
        <div class="marcas-relojes">

        </div>
    </div>

    <div id="relojes-container"></div>

    <?php include('components/footer.php'); ?>


    <script>
        const sheetID = "1iaKdpzXP0k0OmIfoGhRJlqzpMD_EpWC1NrgCEomL6NI"; // ID de tu hoja
        const sheetName = "relojes"; // Nombre de la pestaña
        const url = `https://opensheet.elk.sh/${sheetID}/${sheetName}`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                const container = document.querySelector(".marcas-relojes");
                const relojesPorMarca = {};

                // Agrupar relojes por marca
                data.forEach(reloj => {
                    const marca = reloj["MARCA"];

                    if (!relojesPorMarca[marca]) {
                        relojesPorMarca[marca] = [];
                    }
                    relojesPorMarca[marca].push(reloj);
                });

                // Generar HTML por cada marca
                for (const marca in relojesPorMarca) {
                    const marcaBox = document.createElement("div");
                    marcaBox.className = "marca-box";

                    // Título de la marca
                    marcaBox.innerHTML = `<h2 class="text-center mt-2 font-2">${marca}</h2>`;

                    const relojesContainer = document.createElement("div");
                    relojesContainer.className = "gap-1 box-clocks mt-2";
                    relojesContainer.style.alignItems = "flex-start";

                    // Generar los relojes de esta marca
                    relojesPorMarca[marca].forEach(reloj => {
                        const relojCard = document.createElement("article");

                        // Usar la imagen base64 si está disponible
                        const imagen = reloj["IMAGEN"] ? reloj["IMAGEN"] : reloj["URL FOTO"];

                        relojCard.innerHTML = `
                        <a href="/site/reloj.php">
                            <div class="box-reloj-hierro">
                                <img src="${imagen}" alt="${reloj["NOMBRE RELOJ"]}" />
                            </div>
                            <div>
                                <span class="font-1">${reloj["NOMBRE RELOJ"]}</span><br>
                                <span>${reloj["COLECCION"]}</span>
                            </div>
                            </a>
                        `;

                        relojesContainer.appendChild(relojCard);
                    });

                    marcaBox.appendChild(relojesContainer);
                    container.appendChild(marcaBox);
                }
            })
            .catch(error => console.error("Error al obtener los datos:", error));
    </script>

</body>

</html>