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
                        Our brand's uniqueness is crystallized by our tagline 'We Collect Rare People', which combines various
                        elements that are essential in our philosophy, Notably, the ideas of 'sharing passion' and 'community'
                        with 'rarity' and 'identity'.
                    </p>
                    <p>
                        "We Collect Rare People", is a play on words, a sort of oxymoron, making people ask themselves about
                        who is collecting, What, why and whether they would like to join our 'club', or better, our 'family'.
                    </p>
                    <p>
                        Czapek collects rare people in many ways.
                    </p>
                    <p>
                        First-of-all, Czapek collects rare supplying partners that provide the brand with rare savoir-faire, proud
                        to be a piece of this exciting project.
                    </p>
                    <p>
                        Czapek also collects clients with a rare obsession for quality, on the quest for a unique product. In
                        another sense, they too become partners.
                    </p>
                    <p>
                        Czapek collects as well few yet outstanding retail partners across the globe,
                    </p>
                    <p>
                        And last but not least, Czapek collects shareholders, fine watch lovers that have always dreamt of not
                        only being customers, but owners of an haute horology venture, and their dream became true thanks
                        to the crowdfunding equity campaign that made the revival of Czapek possible.
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