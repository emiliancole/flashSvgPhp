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
include("flashSvg.inc.06.php");
include("flashSvgMath.inc.php");
//*** TESTING FUNCTIONS ***

svgOpen();
titleStyle('flashSVGMath testing');

//gOpen('grid');
//grid();
//gClose();
//
line(100,100,200,50);
//line(50,50,100,100); 
//line(50,100,100,50);
//$arr=lineLineIntersection(50,50,100,100,50,100,100,50);
$arr=lineMidPoint(100,100,200,50);
point($arr[0],$arr[1]);
svgClose();
echo "<hr>";
echo $arr[0].'-'.$arr[1];
?>
</div>

<div style="position:absolute;left:10px;top:500px;" id="demo"></div>
</body>
</html>
