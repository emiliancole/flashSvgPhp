<!DOCTYPE html>
<html>
<body>
<div style="position:absolute;left:0;top:0" onclick="showCoords(event)">

<script>
function showCoords(event) {
    var x = event.clientX;
    var y = event.clientY;
    var coords = "X coords: " + x + ", Y coords: " + y;
    document.getElementById("demo").innerHTML = coords;
}
</script>

<?php
// flashSvg.php - Testing for basic flashSvg functions
// Sometimes, the elegant implementation is just a function. Not a method.
// Not a class. Not a framework. Just a function. - John Carmack.

include("flashSvg.inc.06.php");
//include("flashSvgTransform.inc.02.php");
//include("flashSvgMath.inc.php");
//include("flashSvgMarker.inc.php");
include("flashSvgMilitary.inc.php");

//*** TESTING FUNCTIONS ***

svgOpen();
titleStyle('flashSVG testing');

//gOpen('grid');
//grid();
//gClose();
line(100,50,200,200,'stroke:red;');
line();
//linePerpendicular();
//wall(190,350,200,370,30,'fill:red;');
boxRectRotDeg();
//rectRotDeg(200,340,50,30,-30);

arrowRight(110,330);
arrowLeft(120,330);
arrowUp(140,330);
arrowDown(90,350);
cross(80,330);
circleArrayH(50,300);
circleArrayV(50,300);
circleArrayHV(100,400);
hexagonCentered();
bezierC(300,300);
bezierQ();
bezierS();
bezierT(10,300,100,300);
triangle(200,200,210,200,205,210);
insertSvg(200,150);
textOpen(80,370);
tspan();
tagClose('text');

diamondUp(300,100,10,'fill:red;');
diamondRight(200,100);

svgClose();

?>
</div>
<div style="position:absolute;left:10px;top:500px;" id="demo"></div>
</body>
</html>
