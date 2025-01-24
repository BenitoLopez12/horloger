<!DOCTYPE html>
<html lang="es-MX">

<head>
    <?php include('site/components/head.php'); ?>
    <link rel="stylesheet" href="site/css/home.css" />
</head>

<body>

    <?php include('site/components/header.php'); ?>

    <div class="main-fondo">
        <img src="/site/img/fondo-main-1.jpg" alt="Reloj principal" />
        <div class="main-fondo-info">
            <p style="font-family: poppins;">
                PROUDLY INTRODUCING
            </p>
            <h1 class="mt-3" style="font-family: poppins;">RARE FINDS</h1>
        </div>
    </div>
    <div class="marquee">
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
        <h2 class="text-center mt-2 font-3">SELECCIÓN PALACIO DE HIERRO</h2>
        <div class="gap-1 box-clocks mt-2" style="align-items: flex-start;">
            <article>
                <div class="box-reloj-hierro"><img src="site/img/clock-1.png" alt="Reloj de palacio de hierro" /></div>
                <div>
                    <span class="font-1">Andy Warhol watch</span><br>
                    <span>Automatic White Gold Watch</span>
                </div>
            </article>
            <article>
                <div class="box-reloj-hierro"><img src="site/img/clock-2.png" alt="Reloj de palacio de hierro" /></div>
                <div>
                    <span class="font-1">Andy Warhol watch</span><br>
                    <span>Automatic White Gold Watch</span>
                </div>
            </article>
            <article>
                <div class="box-reloj-hierro"><img src="site/img/clock-3.png" alt="Reloj de palacio de hierro" /></div>
                <div>
                    <span class="font-1">Andy Warhol watch</span><br>
                    <span>Automatic White Gold Watch</span>
                </div>
            </article>
            <article>
                <div class="box-reloj-hierro"><img src="site/img/clock-4.png" alt="Reloj de palacio de hierro" /></div>
                <div>
                    <span class="font-1">Andy Warhol watch</span><br>
                    <span>Automatic White Gold Watch</span>
                </div>
            </article>
        </div>
    </div>
    <div class="mt-2">
        <hr style="width: 50%; margin: auto;">
    </div>
    <div class="mt-2">
        <p class="text-center font-2" style="margin: auto; max-width: 600px; width: 90%;">
            Casa relojera, curadores expertos en alta relojería en México
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
            lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
        </p>
    </div>

    <?php include('site/components/footer.php'); ?>

</body>

</html>