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
// flashSvgMilitary.test.php - Testing for flashSvgMilitary 3d projection functions
// Sometimes, the elegant implementation is just a function. Not a method.
// Not a class. Not a framework. Just a function. - John Carmack.

include("flashSvg.inc.06.php");
//include("flashSvgTransform.inc.02.php");
include("flashSvgMath.inc.php");
include("flashSvgMath.inc.06.php");
//include("flashSvgMarker.inc.php");
include("flashSvgMilitary.inc.php");

//*** TESTING FUNCTIONS ***

svgOpen();
titleStyle('flashSVGMilitary testing');

//gOpen('grid');
//grid();
//gClose();

//wall(190,350,200,370,30,'fill:red;');
//boxRectRotDeg(200,200,100,50,-120,50);
//rectRotDegZ(); boxRectRotDeg(100,300);
//cylinder();
//box(); box(100,300,120,350,200,280,150,250);
//cross(); crossZ();
//line(); lineZ();
//cone(200,200,20,100);
//coneTrunk();
//rectZ(); rectZ(200,200,20,100,50,'fill:red;');
//circle(); circleZ(100,300,20,30,'fill:green;');
//polygonZ(); ???
//surface3P();
//surface4P();
//polylineZ3P();
//polylineZ4P(); 
//polylineZ4P(100,100,30,150,50,30,200,100,30,250,50,30);
//pyramidRotDeg(100,100,100,50,120,80);
//tree1();
rectRotDeg(230,80,300,200,-40,'fill:lightgreen');
wall(108,229,228,87,8,'stroke-width:1;stroke:black;fill:grey');
wall(108,229,330,415,8,'stroke-width:1;stroke:black;fill:grey');
wall(228,87,450,270,8,'stroke-width:1;stroke:black;fill:grey');
tree1(233,108); tree1(437,273);
houseRotDeg(200,200,40,20,50,20);
houseRotDeg(250,240,40,20,50,20);
houseRotDeg(300,280,40,20,50,20,'stroke:black;fill:orange');
boxRectRotDeg(122,221,280,6,-40,8,'stroke:grey;fill:green');
lineZ(380,320,0,380,320,30,'stroke-width:2;stroke:brown;fill:brown');
circleZ(380,320,30,15,'stroke-width:2;stroke:green;fill:lightgreen');
circleZ(380,320,32,14,'stroke-width:2;stroke:green;fill:lightgreen');
circleZ(380,320,35,10,'stroke-width:2;stroke:green;fill:lightgreen');
circleZ(380,320,38,7,'stroke-width:2;stroke:green;fill:lightgreen');
wall(330,415,450,270,8,'stroke-width:1;stroke:black;fill:grey');
//sofaRotDeg(200,200,100,60,120,10,20,50);

svgClose();

?>
</div>
<div style="position:absolute;left:10px;top:500px;" id="demo"></div>
</body>
</html>
