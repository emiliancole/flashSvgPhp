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

include("flashSvg.inc.04.php");
include("flashSvgTransform.inc.02.php");
include("flashSvgMath.inc.php");
include("flashSvgMarker.inc.php");

//*** TESTING FUNCTIONS ***

svgOpen(600,431);
titleStyle('flashSVG testing');

gOpen('grid');
grid();
gClose();
line(100,50,200,200,'green');
lineStyle(20,25,50,150,"stroke:red;");
/**
bezierC(100,100,120,120,220,140,200,100,'red',2);
bezierQ(200,300,200,100,250,400,'blue',1);
bezierS();
bezierT();
insertSvg(200,150);

textOpen();
tspanStyle();
tagClose('text');
diamondUp(300,100);
diamondRight(200,100);

*/
svgClose();

?>
</div>
<div style="position:absolute;left:10px;top:500px;" id="demo"></div>
</body>
</html>
