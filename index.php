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
    
    <section id="parallax-world" class="scene-wrapper scroll-section panel" sectionName="parallax-world">
        <ul id="scene" class="scene fill">
            <!-- Logo layer -->
            <li id="logo" class="layer" data-depth="1.00">
                <div id="follow_logo" class="logo-onewing onewing-img"></div>
            </li>

            <!-- Service 1 layer -->
            <li id="serv_1" class="layer" data-depth="2.50">
                <div id="follow_1" class="logo-tuvitrina service-img"></div>
                <span class="button__text">SERVICIO 1</span>
            </li>
            
            <!-- Service 2 layer -->
            <li id="serv_2" class="layer" data-depth="1.8">
                <div id="follow_2" class="logo-tuvitrina service-img"></div>
                <span class="button__text">SERVICIO 2</span>
            </li>
            
            <!-- Service 3 layer -->
            <li id="serv_3" class="layer" data-depth="1.10">
                <div id="follow_3" class="logo-tuvitrina service-img"></div>
                <span class="button__text">SERVICIO 3</span>
            </li>
            
            <!-- Service 4 layer -->
            <li id="serv_4" class="layer" data-depth="1.60">
                <div id="follow_4" class="logo-tuvitrina service-img"></div>
                <span class="button__text">SERVICIO 4</span>
            </li>
            
            <!-- Service 5 layer -->
            <li id="serv_5" class="layer" data-depth="1.60">
                <div id="follow_5" class="logo-tuvitrina service-img"></div>
                <span class="button__text">SERVICIO 5</span>
            </li>
            
            <!-- Service 6 layer -->
            <li id="serv_6" class="layer center" data-depth="3">
                <div id="follow_6" class="logo-tuvitrina service-img"></div>
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
    

    <section id="planes-section" class="scroll-section panel" sectionName="planes-section">
        <div id="planes-wrapper" class="container-fluid">
            <div class="plan-apolo-wrapper width_55">
                <div class="img-wrapper center">
                    <img src="assets/img/plans-img.JPG" alt="plans-img.JPG">
                </div>
                    <div class="info-wrapper center">
                        <div>
                            <p class="tittle uppercase">plan apolo</p>
                            <div class="separador separador-mini separador-planes"></div>
                            <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quidem quo quibusdam nesciunt, eligendi corporis rem tenetur aliquam distinctio vel ipsum ipsam autem porro fugit dolores nihil veritatis itaque iure.</p>
                        </div>
                    </div>
            </div>
            <div class="otros-planes-wrapper width_45">
                <div class="plan-ares-wrapper">
                    <div class="img-wrapper center">
                        <img src="assets/img/plans-img.JPG" alt="plans-img.JPG">
                    </div>
                    <div class="info-wrapper center">
                        <div>
                            <p class="tittle uppercase">plan ares</p>
                            <div class="separador separador-mini separador-planes"></div>
                            <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem illum quibusdam</p>
                        </div>
                    </div>
                </div>
                <div class="plan-athenea-wrapper">
                    <div class="img-wrapper center">
                        <img src="assets/img/plans-img.JPG" alt="plans-img.JPG">
                    </div>
                    <div class="info-wrapper center">
                        <div>
                            <p class="tittle uppercase">plan athenea</p>
                            <div class="separador separador-mini separador-planes"></div>
                            <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="planes-extra-section" class="scroll-section panel" sectionName="planes-extra-section">
        <div id="planes-extra-wrapper" class="container-fluid">

            <div class="extra-plans-img width_45 center">
                <img src="assets/img/plans-img.JPG" alt="plans-img.JPG">
            </div>

            <div class="extra-plans-info width_55">
                <p>
                    <span class="tittle uppercase"><i class="fa fa-circle" aria-hidden="true"></i>Lorem ipsum dolor sit amet</span><br>
                    <span class="bigText uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate optio sunt ex explicabo id.</span><br>
                    <span class="txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugiat quibusdam quo!.</span>
                </p>
            </div>
            
        </div>
    </section>


    <section id="conact-section" class="panel scroll-section" sectionName="conact-section">
        <div id="contact-wrapper">
            <h1> CONTÁCTENOS </h1>
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