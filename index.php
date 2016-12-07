<?php include "header.php" ?>

<section id="indicadores" class="center">
    <!--
    <ul>
    <li class="indicador active"></li>
    <li class="indicador"></li>
    <li class="indicador"></li>
</ul>
-->
</section>

<section id="section-wipes">
  <div class="rect-top"></div>

    <section id="parallax-world" class="scene-wrapper scroll-section panel" sectionName="parallax-world">
        <ul id="scene" class="scene fill">
            <!-- Logo layer -->
            <li id="logo" class="layer" data-depth="1.00">
                <div id="follow_logo" class="logo-onewing onewing-img"></div>
            </li>

            <!-- Service 1 layer -->
            <li id="serv_1" class="layer" data-depth="2.50">
                <a id="follow_1" href="#">
                    <img src="assets/img/logotipos.svg" alt=""/>
                </a>
                <span class="button__text">Logos</span>
            </li>

            <!-- Service 2 layer -->
            <li id="serv_2" class="layer" data-depth="1.8">
                <a id="follow_2" href="#">
                    <img src="assets/img/logos.png" alt=""/>
                </a>
                <span class="button__text">Web</span>
            </li>

            <!-- Service 3 layer -->
            <li id="serv_3" class="layer" data-depth="1.10">
                <a id="follow_3" href="#">
                    <img src="assets/img/logos.png" alt=""/>
                </a>
                <span class="button__text">Social Media</span>
            </li>

            <!-- Service 4 layer -->
            <li id="serv_4" class="layer" data-depth="1.60">
                <a id="follow_4" href="#">
                    <img src="assets/img/logos.png" alt=""/>
                </a>
                <span class="button__text">Apps</span>
            </li>

            <!-- Service 5 layer -->
            <li id="serv_5" class="layer" data-depth="1.60">
                <a id="follow_5" href="#">
                    <img src="assets/img/logos.png" alt=""/>
                </a>
                <span class="button__text">Modelado 3D</span>
            </li>

            <!-- Service 6 layer -->
            <li id="serv_6" class="layer center" data-depth="3">
                <div id="follow_6" class="logo-tuvitrina service-img"></div>
            </li>

            <!-- Service 7 layer -->
            <li id="serv_5" class="layer" data-depth="1.60">
                <a id="follow_7" href="#">
                    <img src="assets/img/logos.png" alt=""/>
                </a>
                <span class="button__text">Ilustración</span>
            </li>

            <!-- Scroll layer -->
            <li id="scroll-down" class="layer" data-depth="0.00">
                <svg width="25" height="40">
                    <path d="M11,39.5C5.2,39.5,0.5,34.8,0.5,29V11C0.5,5.2,5.2,0.5,11,0.5h3c5.8,0,10.5,4.7,10.5,10.5v18c0,5.8-4.7,10.5-10.5,10.5H11z" style="fill:rgba(0,0,0,0);stroke-width:1;stroke:rgb(255,255,255)" ></path>
                    <rect id="mouse-wheel" x="11" y="11.5" rx="1" ry="1" width="3" height="5" style="fill:rgb(255,255,255);" />
                </svg>
                <span class="button__text"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
            </li>


        </ul>
    </section>
    <div class="rect-bot"></div>

    <!-- Sección 2 -->

    <section id="planes-section" class="scroll-section panel" sectionName="planes-section">
        <div id="planes-wrapper" class="container-fluid">
            <div class="plan-apolo-wrapper">
                <div class="img-wrapper center">
                    <img src="assets/img/plan1.svg" alt="plan1.svg">
                </div>
                <div class="info-wrapper">
                    <div>
                        <p class="tittle ">plan apolo</p>
                        <div class="separador separador-mini separador-planes"></div>
                        <p class="info">Escoge un esquema y te lo personalizamos para que se ajuste a la imagen de tu empresa. Fácil, rápido y económico.</p>
                    </div>
                </div>
            </div>
            <div class="otros-planes-wrapper">
                <div class="plan-ares-wrapper">
                    <div class="img-wrapper center">
                        <img src="assets/img/plan2.svg" alt="plans-img.JPG">
                    </div>
                    <div class="info-wrapper">
                        <div>
                            <p class="tittle ">plan ares</p>
                            <div class="separador separador-mini separador-planes"></div>
                            <p class="info">Crea tu propia web a la medida. Desde el diseño hasta el desarrollo 100% personalizado.</p>
                        </div>
                    </div>
                </div>
                <div class="plan-athenea-wrapper">
                    <div class="img-wrapper center">
                        <img class="wordpress" src="assets/img/plan3.svg" alt="plans-img.JPG">
                    </div>
                    <div class="info-wrapper">
                        <div>
                            <p class="tittle ">plan athenea</p>
                            <div class="separador separador-mini separador-planes"></div>
                            <p class="info">Crea tu propio sitio web administrable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="planes-extra-section" class="scroll-section panel" sectionName="planes-extra-section">
        <div id="planes-extra-wrapper" class="container-fluid">

            <div class="extra-plans-img">
                <img src="assets/img/mas-contenido.svg" alt="plans-img.JPG">
            </div>

            <div class="extra-plans-info">

                <div class="tittle">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    MÁS CONTENIDO
                </div>

                <div class="bigText">
                    Busca el plan que se ajuste a tu presupuesto en el servicio que estás buscando.
                </div>

                <div class="txt">
                    Descubre los paquetes especiales para los diferentes servicios que ofrecemos.
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-filters">
                    <defs>
                        <filter id="filter-goo-3">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                            <feComposite in="SourceGraphic" in2="goo" />
                        </filter>
                    </defs>
                </svg>
                <button id="component-3" class="button button--2 button--3" style="filter: url('#filter-goo-3')">
                    Click me
                    <span class="button__bg"></span>
                </button>

            </div>

        </div>
    </section>


    <section id="conact-section" class="panel scroll-section" sectionName="conact-section">
        <div id="contact-wrapper">
            <div class="titulo"> CONTÁCTENOS </div>
            <div class="separador separador-contacto"></div>
            <p id="contact-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam sequi reprehenderit sapiente repellat fugit cum, dignissimos non culpa, hic sed ullam. Cupiditate sit officiis consequatur blanditiis, quidem porro molestiae, architecto.</p>
            <div class="button-wrapper center">
                <button>
                    CONTÁCTO
                </button>
            </div>
        </div>
    </section>

    <!-- Wiping panels code -->
    <script>
    $(function () { // wait for document ready
        // init
        var controller = new ScrollMagic.Controller({

            globalSceneOptions: {
                triggerHook: 'onLeave'
            }
        });

        // get all slides
        var slides = document.querySelectorAll("section.panel");

        // create scene for every slide
        for (var i=0; i<slides.length; i++) {
            new ScrollMagic.Scene({

                triggerElement: slides[i]
            })
            .setPin(slides[i])
            // .addIndicators() // add indicators (requires plugin)
            .addTo(controller);
        }
    });
    </script>

</section>

<!--
<div id="wave-1">
<canvas id="wave-canvas-1" resize hidpi="off"></canvas>
</div>
-->

<?php include "footer.php" ?>
