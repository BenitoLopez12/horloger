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
            <a href="" class="btn-border">
                RELOJES
            </a>
        </div>
    </div>
    <div class="marquee mt-1">
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <div class="logos-marcas">
                <img src="/develop/img/logo-marca-1.png" alt="Logo de marca">
                <img src="/develop/img/logo-marca-2.png" alt="Logo de marca">
                <img src="/develop/img/logo-marca-3.png" alt="Logo de marca">
                <img src="/develop/img/logo-marca-4.png" alt="Logo de marca">
                <img src="/develop/img/logo-marca-5.png" alt="Logo de marca">
                <img src="/develop/img/logo-marca-6.png" alt="Logo de marca">
                <img src="/develop/img/logo-marca-7.png" alt="Logo de marca">
                <img src="/develop/img/logo-marca-8.png" alt="Logo de marca">
            </div>
        <?php } ?>
    </div>

    <div class="content-limit">
        <div class="marca-box">
            <h2 class="text-center mt-2 font-2">CZAPEK</h2>
            <div class="gap-1 box-clocks mt-2" style="align-items: flex-start;">
                <article>
                    <div class="box-reloj-hierro"><img src="/develop/img/clock-1.png" alt="Reloj de palacio de hierro" /></div>
                    <div>
                        <span class="font-1">Andy Warhol watch</span><br>
                        <span>Automatic White Gold Watch</span>
                    </div>
                </article>
                <article>
                    <div class="box-reloj-hierro"><img src="/develop/img/clock-2.png" alt="Reloj de palacio de hierro" /></div>
                    <div>
                        <span class="font-1">Andy Warhol watch</span><br>
                        <span>Automatic White Gold Watch</span>
                    </div>
                </article>
                <article>
                    <div class="box-reloj-hierro"><img src="/develop/img/clock-3.png" alt="Reloj de palacio de hierro" /></div>
                    <div>
                        <span class="font-1">Andy Warhol watch</span><br>
                        <span>Automatic White Gold Watch</span>
                    </div>
                </article>
                <article>
                    <div class="box-reloj-hierro"><img src="/develop/img/clock-4.png" alt="Reloj de palacio de hierro" /></div>
                    <div>
                        <span class="font-1">Andy Warhol watch</span><br>
                        <span>Automatic White Gold Watch</span>
                    </div>
                </article>
            </div>
        </div>
        <hr style="margin: 50px;">
        <div class="marca-box">
            <h2 class="text-center mt-2 font-2">BAHUER</h2>
            <div class="gap-1 box-clocks mt-2" style="align-items: flex-start;">
                <article>
                    <div class="box-reloj-hierro"><img src="/develop/img/clock-1.png" alt="Reloj de palacio de hierro" /></div>
                    <div>
                        <span class="font-1">Andy Warhol watch</span><br>
                        <span>Automatic White Gold Watch</span>
                    </div>
                </article>
                <article>
                    <div class="box-reloj-hierro"><img src="/develop/img/clock-2.png" alt="Reloj de palacio de hierro" /></div>
                    <div>
                        <span class="font-1">Andy Warhol watch</span><br>
                        <span>Automatic White Gold Watch</span>
                    </div>
                </article>
                <article>
                    <div class="box-reloj-hierro"><img src="/develop/img/clock-3.png" alt="Reloj de palacio de hierro" /></div>
                    <div>
                        <span class="font-1">Andy Warhol watch</span><br>
                        <span>Automatic White Gold Watch</span>
                    </div>
                </article>
                <article>
                    <div class="box-reloj-hierro"><img src="/develop/img/clock-4.png" alt="Reloj de palacio de hierro" /></div>
                    <div>
                        <span class="font-1">Andy Warhol watch</span><br>
                        <span>Automatic White Gold Watch</span>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <?php include('components/footer.php'); ?>

</body>

</html>