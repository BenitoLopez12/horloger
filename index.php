<!DOCTYPE html>
<html lang="es-MX">

<head>
    <?php include('site/components/head.php'); ?>
    <link rel="stylesheet" href="site/css/home.css?v1.4" />
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
                <div class="info-philo text-center" style="width: 50%;">
                    <h1>OUR PHILOSOPHY</h1>
                    <p>
                        En HG, entendemos que un reloj no es solo un objeto de lujo, sino una declaración de identidad.
                    </p>
                    <p>
                        Por eso, nos dirigimos a quienes desafían los límites, a los coleccionistas y visionarios que buscan piezas con carácter, historia y un impacto que trasciende el tiempo.
                    </p>
                    <p>
                        Si lo clásico te aburre y lo extraordinario te inspira, bienvenido a HG:
                        donde la alta relojería encuentra su lado más exclusivo.
                    </p>

                </div>
            </div>
        </div>
        <div class="content-limit">
            <h2 class="title-line mt-2 font-3"><span>SELECCIÓN PALACIO DE HIERRO</span></h2>
            <div class="gap-1 box-clocks mt-2" style="align-items: flex-start;">
                <a href="/site/reloj.php">
                    <article>
                        <div class="box-reloj-hierro"><img src="site/img/clock-1.png" alt="Reloj de palacio de hierro" /></div>
                        <div>
                            <span class="font-1">Andy Warhol watch</span><br>
                            <span>Automatic White Gold Watch</span>
                        </div>
                    </article>
                </a>
                <a href="/site/reloj.php">
                    <article>
                        <div class="box-reloj-hierro"><img src="site/img/clock-2.png" alt="Reloj de palacio de hierro" /></div>
                        <div>
                            <span class="font-1">Andy Warhol watch</span><br>
                            <span>Automatic White Gold Watch</span>
                        </div>
                    </article>
                </a>
                <a href="/site/reloj.php">
                    <article>
                        <div class="box-reloj-hierro"><img src="site/img/clock-3.png" alt="Reloj de palacio de hierro" /></div>
                        <div>
                            <span class="font-1">Andy Warhol watch</span><br>
                            <span>Automatic White Gold Watch</span>
                        </div>
                    </article>
                </a>
                <a href="/site/reloj.php">
                    <article>
                        <div class="box-reloj-hierro"><img src="site/img/clock-4.png" alt="Reloj de palacio de hierro" /></div>
                        <div>
                            <span class="font-1">Andy Warhol watch</span><br>
                            <span>Automatic White Gold Watch</span>
                        </div>
                    </article>
                </a>
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