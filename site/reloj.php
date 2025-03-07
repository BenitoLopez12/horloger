<!DOCTYPE html>
<html lang="es-MX">

<head>
    <?php include('components/head.php'); ?>
    <link rel="stylesheet" href="css/reloj.css?v1.3" />
</head>

<body>

    <?php include('components/header.php'); ?>

    <div class="content-limit" style="margin-top: 150px;">
        <div class="flex gap-4 align-center">
            <div class="box-img-reloj">
                <img src="img/clock-1.png" alt="Reloj" id="reloj-img">
            </div>
            <div class="reloj-info font-1 text-center">
                <h1 id="reloj-title">Andy Warhol watch</h1>
                <p>
                    La historia GoS Watches, comienza en el año 2007, con el encuentro entre el maestro forjador de cuchillos y espadas artesanales Johan Gustafsson y del maestro relojero Patrik Sjögren, para sumar du sus pasiones y tradiciones escandinavas.  La destreza de forjar acero de damasco con sus intrincados patrones y personalidad crea obras de arte únicas que le aportan a cada reloj GoS un carácter propio e irrepetible.  La pasión por la manufactura tradicional y artesanal se lleva como valor primordial en GoS, cada una de las partes inclusive las cajas de presentación reflejan la pasión por la tradicional manufactura escandinava. 
                </p>
                <p>
                    El diseño de las colecciones de GoS recibe su inspiración de dos aspectos esenciales de la cultura escandinava. Por un lado la naturaleza, para ello se ha tomado como referencia las estaciones del año en la región Nórdica y fenómenos naturales propios de la región como las “Auroras Boreales” o el “Sol de Medianoche”.  Y por el otro lado la Historia, donde la tradición Vikinga tiene un papel central en los patrones y diseños de decoración de cada pieza.  
                </p>
            </div>
        </div>
    </div>

    <div class="box-indications mt-3">
        <div class="content-limit flex align-center gap-6" style="margin: auto;">
            <div>
                <h1 style="font-weight: lighter; margin: 0;" class="font-3">38 MM DIAMETER</h1>
                <p style="margin: 0;">
                    This watch has a diarneter of 38 mm- Don't hesitate to contact us or one
                    Of Our retailers for more advice or simply trying it 'in the metal'!
                </p>
            </div>
            <div>
                <div class="box-icons-reloj">
                    <article>
                        <i>
                            <img src="img/icon-diameter.png" alt="icon">
                            <small>30 mm</small>
                        </i>
                        <span>DIAMETER</span>
                    </article>
                    <article>
                        <i>
                            <img src="img/icon-mirco-roter.png" alt="icon">
                            <small></small>
                        </i>
                        <span>MIRCO-ROTOR</span>
                    </article>
                    <article>
                        <i>
                            <img src="img/icon-second-stop.png" alt="icon">
                        </i>
                        <span>STOP <br> SECOND</span>
                    </article>
                    <article>
                        <i>
                            <img src="img/icon-star.png" alt="icon">
                        </i>
                        <span>LIMITED <br> EDITION</span>
                    </article>
                    <article>
                        <i>
                            <img src="img/icon-water.png" alt="icon">
                        </i>
                        <span>WATERPROOF</span>
                    </article>
                    <article>
                        <i style="font-style: normal;">
                            <samp class="text-center">
                                3
                                <br>
                                YEARS
                            </samp>
                        </i>
                        <span>WARRANTY</span>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="content-limit mt-3 text-center" style="max-width: 600px;">
        <h2 class="font-3" style="font-weight: lighter;">¿Cómo lo reservo?</h2>
        <p class="font-2">
            Puedes ponerte en contacto con nosotros a través de nuestros distintos canales de comunicación: por correo electrónico a info@hgmexico.com.mx, por teléfono al (55) 8000-3704, o bien, visitarnos directamente en nuestras oficinas ubicadas en P.º de los Tamarindos 400A, Piso 6, Bosques de las Lomas, Cuajimalpa de Morelos, 05120, Ciudad de México, CDMX.
        </p>
    </div>

    <?php include('components/footer.php'); ?>

    <script>
        const sheetID = "1iaKdpzXP0k0OmIfoGhRJlqzpMD_EpWC1NrgCEomL6NI";
        const sheetName = "relojes"; // Nombre de la pestaña
        const url = `https://opensheet.elk.sh/${sheetID}/${sheetName}`;

        // Obtener el ID del reloj desde la URL
        const params = new URLSearchParams(window.location.search);
        const relojId = params.get('id'); 
        
        fetch(url)
        .then(response => response.json())
        .then(data => {
            const relojes = data;
            console.log(relojes);
            if (!Array.isArray(relojes) || relojes.length === 0) {
                throw new Error('No hay datos disponibles.');
            }
            
            // Buscar el reloj por ID
            const reloj = relojes.find(row => row.ID === relojId);
            console.log(reloj);

            if (reloj) {
                const marca = reloj["MARCA"];
                const coleccion = reloj["COLECCION"];
                const nombre = reloj["NOMBRE RELOJ"];
                const urlFoto = reloj["URL FOTO"];
                const materiales = reloj["MATERIALES"];
                const funciones = reloj["FUNCIONES"];

                document.getElementById('reloj-title').innerHTML = nombre;
                document.getElementById('reloj-img').src = urlFoto;
            } else {
                // no se encontro
            }
        })
        .catch(error => {
            console.error("Error al cargar los datos:", error);
        });
    </script>

</body>

</html>