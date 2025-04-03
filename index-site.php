<!DOCTYPE html>
<html lang="es-MX">

<head>
    <?php include('site/components/head.php'); ?>
    <link rel="stylesheet" href="site/css/home.css?v1.6" />
</head>

<body>

    <?php include('site/components/header.php'); ?>

    <div class="main-fondo">
        <!-- <img src="/site/img/fondo-main-1.jpg" alt="Reloj principal" /> -->
        <video loop muted autoplay playsinline>
            <source src="/site/img/fondo.mp4">
        </video>
        <div class="main-fondo-info">
            <p style="font-family: poppins;">
                PROUDLY INTRODUCING
            </p>
            <h1 class="mt-3" style="font-family: poppins;">RARE FINDS</h1>
        </div>
    </div>

    <?php include('site/components/marqueeMarcas.php'); ?>
    <main>

        <div class="content-limit" style="margin-top: 00px;">
            <div class="flex gap-4 align-center" style="position: relative;">

                <div class="img-philo" style="width: 50%;">
                    <img src="/site/img/philosophy.png" alt="relojes" style="width: 100%;">
                </div>
                <div class="info-philo" style="width: 50%;">
                    <h1>CURADORíA HG</h1>
                    <p>
                        En HG, entendemos que un reloj no es solo un objeto de lujo, sino una declaración de identidad.
                    </p>
                    <p>
                        Por eso, nos dirigirnos a quienes desafían los limites,
                        a los coleccionistas y visionarios que buscan piezas con carácter,
                        historia y un impacto que trasciende el tiempo.
                    </p>
                    <p>
                        No solo somos un espacio donde se exhiben relojes.
                        Es una curaduría de tiempo con propósito.
                        Cada marca que forma parte de nuestra selección comparte
                        una visión.
                    </p>
                    <p>
                        En un mundo donde todo corre, el verdadero lujo es pausar.
                        y elegir intención.
                    </p>
                    <p>
                        <a href="/site/curaduria.php" style="text-decoration: underline;">Ver más</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="palacio-contain">
            <img src="/site/img/palacio.webp" alt="Reloj de Palacio" style="width: 100%;">
            <div class="info-palacio">
                <h2 class="font-5" style="margin: 0;">
                    SELECCIÓN <br>
                    PALACIO DE HIERRO
                </h2>
                <p class="font-1 mt-1" style="margin: 0;">
                    Conoce nuestra curaduría en Palacio de Hierro Polanco
                </p>
                <p class="font-1" style="opacity: 1; text-decoration: underline;">
                    <a href="/site/coleccion.php">Ver relojes</a>
                </p>
            </div>
        </div>
        <!-- <div class="mt-2">
            <hr style="width: 50%; margin: auto;">
        </div>
        <div class="mt-2">
            <p class="text-center font-2" style="margin: auto; max-width: 600px; width: 90%;">
                En HG, entendemos que un reloj no es solo un objeto de lujo, sino una declaración de identidad. Por eso, nos dirigimos a quienes desafían los límites, a los coleccionistas y visionarios que buscan piezas con carácter, historia y un impacto que trasciende el tiempo.
            </p>
        </div>
        <div class="mt-2">
            <p class="text-center font-2" style="margin: auto; max-width: 600px; width: 90%;">
                Si lo clásico te aburre y lo extraordinario te inspira, bienvenido a HG: donde la alta relojería encuentra su lado más exclusivo.
            </p>
        </div> -->

        <?php include('site/components/footer.php'); ?>
    </main>
</body>

</html>