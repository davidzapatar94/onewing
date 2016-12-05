<!--
<footer>
FOOTER  
</footer>
-->
    <!-- Parallax-master -->
    <script src="lib/parallax-master/deploy/parallax.js"></script>
    <script>
        // Nothing new here...it's all in the CSS!
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
    </script>

    <script src="lib/ElasticSVGElements/js/classie.js"></script>

    <script>
        $(document).ready(function () {
            var $logo = $('#follow_logo'),
                $one = $('#follow_1'),
                $two = $('#follow_2'),
                $three = $('#follow_3'),
                $four = $('#follow_4'),
                $five = $('#follow_5'),
                $six = $('#follow_6'),
                browserPrefix = "",
                usrAg = navigator.userAgent;

            if(usrAg.indexOf("Chrome") > -1 || usrAg.indexOf("Safari") > -1) {
                browserPrefix = "-webkit-";
            } else if (usrAg.indexOf("Opera") > -1) {
                browserPrefix = "-o";
            } else if (usrAg.indexOf("Firefox") > -1) {
                browserPrefix = "-moz-";
            } else if (usrAg.indexOf("MSIE") > -1) {
                browserPrefix = "-ms-";
            }

            $(document).mousemove(function (event) {
                var cx = Math.ceil(window.innerWidth / 2.0),
                    cy = Math.ceil(window.innerHeight / 2.0),
                    dx = event.pageX - cx,
                    dy = event.pageY - cy,
                    tiltx = (dy / cy),
                    tilty = - (dx / cx),
                    radius = Math.sqrt(Math.pow(tiltx, 2) + Math.pow(tilty, 2)),
                    degree = (radius * 15);

                degree = (dx>cx)? degree*-1:degree;

                shadx = degree*tiltx;   /*horizontal shadow*/
                shady = degree*tilty;   /*vertical shadow*/

                $logo.css(browserPrefix + 'transform', 'rotate3d(' + tiltx + ', '+ tilty +', 0, ' + degree + 'deg)');
                $logo.css(browserPrefix + 'perspective', '1000px');

                $one.css(browserPrefix + 'transform', 'rotate3d(' + tiltx + ', '+ tilty +', 0, ' + degree + 'deg)');
                $one.css(browserPrefix + 'perspective', '1000px');

                $two.css(browserPrefix + 'transform', 'rotate3d(' + tiltx + ', '+ tilty +', 0, ' + degree + 'deg)');
                $two.css(browserPrefix + 'perspective', '1000px');

                $three.css(browserPrefix + 'transform', 'rotate3d(' + tiltx + ', '+ tilty +', 0, ' + degree + 'deg)');
                $three.css(browserPrefix + 'perspective', '1000px');

                $four.css(browserPrefix + 'transform', 'rotate3d(' + tiltx + ', '+ tilty +', 0, ' + degree + 'deg)');
                $four.css(browserPrefix + 'perspective', '1000px');

                $five.css(browserPrefix + 'transform', 'rotate3d(' + tiltx + ', '+ tilty +', 0, ' + degree + 'deg)');
                $five.css(browserPrefix + 'perspective', '1000px');

                $six.css(browserPrefix + 'transform', 'rotate3d(' + tiltx + ', '+ tilty +', 0, ' + degree + 'deg)');
                $six.css(browserPrefix + 'perspective', '1000px');

                // if(dx>cx) /*without that horizontal values are reversed*/
                //     $logo.css(browserPrefix + 'transform', 'translate('+(-shady)+'px, ' + (-shadx) + 'px )');
                // else $logo.css(browserPrefix + 'transform', 'translate('+(-shady)+'px, ' + (-shadx) + 'px )');
        });
    });
    </script>

    <!-- SVG button Script -->
    <script>
        (function() {

            function extend( a, b ) {
                for( var key in b ) { 
                    if( b.hasOwnProperty( key ) ) {
                        a[key] = b[key];
                    }
                }
                return a;
            }
            
            function SVGButton( el, options ) {
                this.el = el;
                this.options = extend( {}, this.options );
                extend( this.options, options );
                this.init();
            }

            SVGButton.prototype.options = {
                speed : { reset : 800, active : 150 },
                easing : { reset : mina.elastic, active : mina.easein }
            };

            SVGButton.prototype.init = function() {
                this.shapeEl = this.el.querySelector( 'span.morph-shape' );

                var s = Snap( this.shapeEl.querySelector( 'svg' ) );
                this.pathEl = s.select( 'path' );
                this.paths = {
                    reset : this.pathEl.attr( 'd' ),
                    active : this.shapeEl.getAttribute( 'data-morph-active' )
                };

                this.initEvents();
            };

            SVGButton.prototype.initEvents = function() {
                this.el.addEventListener( 'mousedown', this.down.bind(this) );
                this.el.addEventListener( 'touchstart', this.down.bind(this) );

                this.el.addEventListener( 'mouseup', this.up.bind(this) );
                this.el.addEventListener( 'touchend', this.up.bind(this) );

                this.el.addEventListener( 'mouseout', this.up.bind(this) );
            };

            SVGButton.prototype.down = function() {
                this.pathEl.stop().animate( { 'path' : this.paths.active }, this.options.speed.active, this.options.easing.active );
            };

            SVGButton.prototype.up = function() {
                this.pathEl.stop().animate( { 'path' : this.paths.reset }, this.options.speed.reset, this.options.easing.reset );
            };

            [].slice.call( document.querySelectorAll( 'button.button--effect-1' ) ).forEach( function( el ) {
                new SVGButton( el );
            } );

            [].slice.call( document.querySelectorAll( 'button.button--effect-2' ) ).forEach( function( el ) {
                new SVGButton( el, {
                    speed : { reset : 650, active : 650 },
                    easing : { reset : mina.elastic, active : mina.elastic }
                } );
            } );

        })();           
    </script>

    <script type="text/javascript" src="lib/ScrollMagic-master/js/tracking.js"></script>
    <!-- Javascript stylesheet -->
    <script type="text/javascript" href="assets/js/script.js"></script>
</body>
</html>