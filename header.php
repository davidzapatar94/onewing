<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />

    <title>One Wing</title>

    <!-- Behavioral Meta Data -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Latest compiled and minified CSS Bottstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png"/>

    <!-- Awesome font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="lib/materialize-src/css/materialize.min.css"  media="screen,projection"/>

    <!-- Jquery 1.11.3  -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

    <!-- Jquery 2.1.1  -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


    <!-- Elastic SVG elements -->
    <script src="lib/ElasticSVGElements/js/snap.svg-min.js"></script>
    <link rel="stylesheet" type="text/css" href="lib/ElasticSVGElements/css/button.css" />

    <!-- Wiping panels -->
    <script type="text/javascript" src="lib/ScrollMagic-master/scrollmagic/uncompressed/ScrollMagic.js"></script>
    <script type="text/javascript" src="lib/ScrollMagic-master/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>

    <!-- Waves
    <script type="text/javascript" src="lib/paperjs-v0.10.2/dist/paper-full.js"></script>
    <script type="text/paperscript" canvas="wave-canvas-1">
        // Code ported to Paper.js from http://the389.com/9/1/
        // with permission.

        var values = {
            friction: 20,
            timeStep: 0.01,
            amount: 15,
            mass: 2,
            count: 0
        };
        values.invMass = 1 / values.mass;

        var path, springs;
        var size = view.size * [1.2, 1];

        var Spring = function(a, b, strength, restLength) {
            this.a = a;
            this.b = b;
            this.restLength = restLength || 80;
            this.strength = strength ? strength : 0.1;
            this.mamb = values.invMass * values.invMass;
        };

        Spring.prototype.update = function() {
            var delta = this.b - this.a;
            var dist = delta.length;
            var normDistStrength = (dist - this.restLength) /
                    (dist * this.mamb) * this.strength;
            delta.y *= normDistStrength * values.invMass * 0.2;
            if (!this.a.fixed)
                this.a.y += delta.y;
            if (!this.b.fixed)
                this.b.y -= delta.y;
        };


        function createPath(strength) {
            var path = new Path({
                fillColor: 'black'
            });
            springs = [];
            for (var i = 0; i <= values.amount; i++) {
                var segment = path.add(new Point(i / values.amount, 0.5) * size);
                var point = segment.point;
                if (i == 0 || i == values.amount)
                    point.y += size.height;
                point.px = point.x;
                point.py = point.y;
                // The first two and last two points are fixed:
                point.fixed = i < 2 || i > values.amount - 2;
                if (i > 0) {
                    var spring = new Spring(segment.previous.point, point, strength);
                    springs.push(spring);
                }
            }
            path.position.x -= size.width / 4;
            return path;
        }

        function onResize() {
            if (path)
                path.remove();
            size = view.bounds.size * [2, 1];
            path = createPath(0.1);
        }

        function onMouseMove(event) {
            var location = path.getNearestLocation(event.point);
            //console.log(location);
            var segment = location.segment;
            var point = segment.point;

            if (!point.fixed && location.distance < size.height / 4) {
                var y = event.point.y;
                point.y += (y - point.y) / 6;
                var previous = segment.previous && segment.previous.point;
                var next = segment.next && segment.next.point;
                if (previous && !previous.fixed)
                    previous.y += (y - previous.y) / 24;
                if (next && !next.fixed)
                    next.y += (y - next.y) / 24;
            }
        }

        function onFrame(event) {
            updateWave(path);
        }

        function updateWave(path) {
            var force = 1 - values.friction * values.timeStep * values.timeStep;
            for (var i = 0, l = path.segments.length; i < l; i++) {
                var point = path.segments[i].point;
                var dy = (point.y - point.py) * force;
                point.py = point.y;
                point.y = Math.max(point.y + dy, 0);
            }

            for (var j = 0, l = springs.length; j < l; j++) {
                springs[j].update();
            }
            path.smooth({ type: 'continuous' });
        }

        function onKeyDown(event) {
            if (event.key == 'space') {
                path.fullySelected = !path.fullySelected;
                path.fillColor = path.fullySelected ? null : 'black';
            }
        }
    </script>
    -->

    <!-- Scrollify -->
    <script type="text/javascript" src="lib/Scrollify-master/jquery.scrollify.js"></script>
    <script>
        $(function() {
                $.scrollify({
                section:".scroll-section",
                scrollbars:true,
                interstitialSection : "",
                easing: "easeOutExpo",
                scrollSpeed: 1100,
                standardScrollElements: ".standart-scroll",
                setHeights: true,
                overflowScroll: true,


                before:function(i,panels) {
                    var ref = panels[i].attr("sectionName");

                    $(".indicator-ul .active").removeClass("active");

                    $(".indicator-ul").find("a[href=\"#" + ref + "\"]").addClass("active");
                },
                afterRender:function() {
                    var pagination = "<ul class=\"indicator-ul\">";
                    var activeClass = "";
                    $(".scroll-section").each(function(i) {
                        activeClass = "";
                        if(i===0) {
                            activeClass = "active";
                        }
                        pagination +=   "<li><a class=\"indicador " + activeClass +
                                        "\" href=\"#" + $(this).attr("sectionName") +
                                        "\"></a></li>";
                                        /*
                                        * <span class=\"hover-text\">" +
                                        * $(this).attr("sectionName").charAt(0).toUpperCase() +
                                        * $(this).attr("sectionName").slice(1) +
                                        * "</span>
                                        */
                    });

                    pagination += "</ul>";

                    $("#indicadores").append(pagination);
                }

            });


          /*

          Tip: The two click events below are the same:

          $(".indicator-ul a").on("click",function() {
            $.scrollify.move($(this).attr("href"));
          });

          */
          $(".indicator-ul li").on("click",$.scrollify.move);

        });
    </script>

    <!-- Hoja de estilos -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
<header>
    <section id="menu-bar" class="">

        <div id="extra-icons">
            <div id="menu-icons-wrapper">
                <div id="contacto-wrapper" class="menu-icon">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div id="share-wrapper" class="menu-icon"><i class="fa fa-share-alt" aria-hidden="true"></i></div>
                <div id="lang-wrapper" class="menu-icon"><i class="fa fa-globe" aria-hidden="true"></i> <div class="text">EN/ES</div></div>
            </div>

            <div id="menu-icon-wrapper">
                <div id="menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </div>

        </div>

    </section>
</header>
