<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Path Structure</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="lib/paperjs-v0.10.2/dist/paper-full.js"></script>

<!-- WAVE -->
<script type="text/paperscript" canvas="wave-canvas-horizontal-1">
        // Code ported to Paper.js from http://the389.com/9/1/
        // with permission.

        var values = {
            friction: 0.8,
            timeStep: 0.3,
            amount: 11,
            mass: 1,
            count: 0
        };
        values.invMass = 1 / values.mass;

        var path, springs;
        var size = view.size * [1.2, 0.5];

        var Spring = function(a, b, strength, restLength) {
            this.a = a;
            this.b = b;
            this.restLength = restLength || 80;
            this.strength = strength ? strength : 0.55;
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
                fillColor: 'blue'
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
            var segment = location.segment;
            var point = segment.point;

            //console.log(event.point.y);
            
            // Constrain the event point, to not cut off the text:
            if (point.y < 200)
                point.y = 200;
            if (point.y > view.size.height - 200)
                point.y = view.size.height - 200;
            if (true) {

            }
            if (!point.fixed && location.distance < size.height / 4) {
                var y = event.point.y;
                point.y += (y - point.y) / 200;
                var previous = segment.previous && segment.previous.point;
                var next = segment.next && segment.next.point;
                if (previous && !previous.fixed)
                    previous.y += (y - previous.y) / 800;
                if (next && !next.fixed)
                    next.y += (y - next.y) / 800;
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

<script type="text/paperscript" canvas="wave-canvas-vertical-1">
        // Code ported to Paper.js from http://the389.com/9/1/
        // with permission.

        var values = {
            friction: 0.8,
            timeStep: 0.3,
            amount: 11,
            mass: 1,
            count: 0
        };
        values.invMass = 1 / values.mass;

        var path, springs;
        var size = view.size * [1.2, 0.5];

        var Spring = function(a, b, strength, restLength) {
            this.a = a;
            this.b = b;
            this.restLength = restLength || 80;
            this.strength = strength ? strength : 0.55;
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
                fillColor: 'green'
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
            var segment = location.segment;
            var point = segment.point;

            //console.log(event.point.y);
            
            // Constrain the event point, to not cut off the text:
            if (point.y < 200)
                point.y = 200;
            if (point.y > view.size.height - 200)
                point.y = view.size.height - 200;
            if (true) {

            }
            if (!point.fixed && location.distance < size.height / 4) {
                var y = (event.point.x);
                point.y -= (y - point.y) / 200;
                var previous = segment.previous && segment.previous.point;
                var next = segment.next && segment.next.point;
                if (previous && !previous.fixed)
                    previous.y -= (y - previous.y) / 800;
                if (next && !next.fixed)
                    next.y -= (y - next.y) / 800;
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

</head>
<body>
    <canvas id='wave-canvas-horizontal-1' resize></canvas>
    <canvas id='wave-canvas-vertical-1' class="rotate" resize></canvas>
</body>
</html>
