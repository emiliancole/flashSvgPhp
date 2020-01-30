<?php
// flashSvg.inc.06.php
// Version updated with style instead of stroke, stroke-width, and fill.
// List of functions and syntax:
// ======================================================================
// svgOpen($w, $h, $xmlns)
function svgOpen($w=500, $h=500, $xmlns='http://www.w3.org/2000/svg') {
echo "<svg width='$w' height='$h' viewBox='0 0 $w $h' xmlns='$xmlns'>";
}

// svgClose()
function svgClose() {
echo "</svg>";
}

// tagOpen($tag)
function tagOpen($tag) {
echo "<$tag>";
}

// tagClose($tag)
function tagClose($tag) {
echo "</$tag>";
}

// line($x1, $y1, $x2, $y2, $style)
function line($x1=50, $y1=50, $x2=100, $y2=100, 
$style='stroke:black;stroke-width:1;') {
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' style='$style' />";
return array($x1,$y1,$x2,$y2);
}

// lineH($x1, $y1, $x2, $style)
function lineH($x1=50, $y1=50, $x2=100, 
$style='stroke:black;stroke-width:1') {
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y1' style='$style' />";
return array($x1,$y1,$x2,$y2);
}

// lineV($x1, $y1, $y2, $style)
function lineV($x1=50, $y1=50, $y2=140, 
$style='stroke:black;stroke-width:1') {
echo "<line x1='$x1' y1='$y1' x2='$x1' y2='$y2' style='$style' />";
return array($x1,$y1,$x2,$y2);
}

// cross($cx, $cy, $d, $style)
function cross($cx=50, $cy=50, $d=20, 
$style='stroke:red;stroke-width:1') {
$x1=$cx-$d/2; $x2=$cx+$d/2; $y1=$cy-$d/2; $y2=$cy+$d/2;
lineH($x1, $cy, $x2, $style);
lineV($cx, $y1, $y2, $style);
}

// rectOpen($x, $y, $w, $h, $style')
function rectOpen($x=100, $y=100, $w=100, $h=50, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<rect x='$x' y='$y' width='$w' height='$h' style='$style' >";
}

// rect($x, $y, $w, $h, $style)
function rect($x=100, $y=100, $w=100, $h=50, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<rect x='$x' y='$y' width='$w' height='$h' style='$style' />";
return array($x,$y,$w,$h);
}

// rectRotDeg($x1, $y1, $w, $h, $deg, $style)
//rect rotation around the point (x1,y1)
//(x1,y1) = initial top left corner
//w = rect width
//h = rect height
//return array(xi,yi) = rect rotated points coords
function rectRotDeg($x1=100, $y1=100, $w=100, $h=50, $deg=45, 
$style='stroke:black;stroke-width:1;fill:none') {
$rad=deg2rad($deg);
$x2=$x1+$w*cos($rad); $y2=$y1-$w*sin($rad);
//point($x1,$y1); point($x2,$y2);
$x3=$x2+$h*sin($rad); $y3=$y2+$h*cos($rad);
$x4=$x1+$h*sin($rad); $y4=$y1+$h*cos($rad);
//point($x3,$y3); point($x4,$y4);
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3 $x4,$y4' style='$style' />";
return array($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4);
}

// rectClose()
function rectClose() {
echo "</rect>";
}

// rectRounded($x, $y, $w, $h, $rx, $ry, $style)
function rectRounded($x=100, $y=100, $w=150, $h=50, $rx=10, $ry=10, 
$style='stroke:black;stroke-width:1;fill:none') {
echo "<rect x='$x' y='$y' width='$w' height='$h' rx='$rx' ry='$ry' 
style='$style' />";
}

// square($x, $y, $w, $style)
function square($x=100, $y=100, $w=50, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<rect x=$x y=$y width=$w height=$w style='$style' />";
}

// circleOpen($cx, $cy, $r, $style) 
function circleOpen($cx=50, $cy=50, $r=50, 
$style='stroke:blak;stroke-width:1;fill:none;') {
echo "<circle cx='$cx' cy='$cy' r='$r' style='$style' >";
}

// circle($cx, $cy, $r, $style) 
function circle($cx=100, $cy=100, $r=50, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<circle cx='$cx' cy='$cy' r='$r' style='$style' />";
}

// circleClose()
function circleClose() {
echo "</circle>";
}

// clipPathOpen($id)
function clipPath($id='clip01') {
echo "<clipPath id='$id' >";
}

// clipPathClose()
function clipPathClose() {
echo "</clipPath>";
}

// point($cx, $cy, $r, $style)
function point($cx=100, $cy=100, $r=1, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<circle cx='$cx' cy='$cy' r='$r' style='$style' />";
}

// ellipse($cx, $cy, $rx, $ry, $style) 
function ellipse($cx=150, $cy=50, $rx=40, $ry=20, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<ellipse cx='$cx' cy='$cy' rx='$rx' ry='$ry' style='$style' />";
}

// triangle($x1, $y1, $x2, $y2, $x3, $y3, $style)
function triangle($x1=200, $y1=50, $x2=140, $y2=140, $x3=200, 
$y3=120, $style='stroke:black;stroke-width:1;fill:none;') {
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3' style='$style' />";
}

//first point of diamond to the top
// diamondUp($x1, $y1, $dx, $style)
function diamondUp($x1=100, $y1=100, $dx=10, 
$style='stroke:black;stroke-width:1;fill:none;') {
$x2=$x1+$dx/2; $y2=$y1+$dx;
$x3=$x1; $y3=$y1+2*$dx;
$x4=$x1-$dx/2; $y4=$y1+$dx;
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3,$x4,$y4' 
style='$style' />";
}

//first point of diamond to the bottom
// diamondDown($x1, $y1, $dx, $style)
function diamondDown($x1=100, $y1=100, $dx=10, 
$style='stroke:black;stroke-width:1;fill:none;') {
$x2=$x1-$dx/2; $y2=$y1-$dx;
$x3=$x1; $y3=$y1-2*$dx;
$x4=$x1+$dx/2; $y4=$y1-$dx;
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3,$x4,$y4' 
style='$style' />";
}

//first point of diamond to the left
// diamondLeft($x1, $y1, $dx, $style)
function diamondLeft($x1=100, $y1=100, $dx=10, 
$style='stroke;black;stroke-width:1;fill:none;') {
$x2=$x1+$dx; $y2=$y1-$dx/2;
$x3=$x1+2*$dx; $y3=$y1;
$x4=$x1+$dx; $y4=$y1+$dx/2;
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3,$x4,$y4' 
style='$style' />";
}

//first point of diamond to the right
// diamondRight($x1, $y1, $dx, $style)
function diamondRight($x1=100, $y1=100, $dx=10, 
$style='stroke:black;stroke-width:1;fill:none;') {
$x2=$x1-$dx; $y2=$y1+$dx/2;
$x3=$x1-2*$dx; $y3=$y1;
$x4=$x1-$dx; $y4=$y1-$dx/2;
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3,$x4,$y4' 
style='$style' />";
}

// polygon($points, $style)
function polygon($points='50,50 50,100 100,100', 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<polygon points='$points'  
style='$style' />";
}

// polygon4($arrx, $arry, $style)
function polygon4($arrx=array(100,200,175,125), $arry=array(100,100,50,50), 
$style='stroke:black;stroke-width:1;fill;none;') {
echo "<polygon points='$arrx[0],$arry[0] $arrx[1],$arry[1] 
$arrx[2],$arry[2] $arrx[3],$arry[3]'  
style='$style' />";
}

// polyline4($arrx, $arry, $style)
function polyline4($arrx=array(100,200,175,125), $arry=array(100,100,50,50), 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<polyline points='$arrx[0],$arry[0] $arrx[1],$arry[1] 
$arrx[2],$arry[2] $arrx[3],$arry[3]'  
style='$style' />";
}

// polyline($points, $style)
function polyline($points='100,50 200,50 200,100', 
$style='stroke:black;stroke-width:1;fill:none') {
echo "<polyline points='$points'  
style='$style' />";
}

// polylineArray($arrx, $arry, $style)
function polylineArray($arrx, $arry, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<polyline points='";
$nx= count($arrx);
for ($i = 0; $i <= $nx-1; $i++) {
echo $arrx[$i].",".$arry[$i]." "; }
echo "style='$style' />";
}

// path($d, $style)
function path($d='M100,100 200,200', 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='$d' style='$style' />";
}

// pathId($id, $d, $style)
function pathId($id='path01', $d='M10,110 120,120', 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<path id=$id d='$d' style='$style' />";
}

// moveTo($x1, $y1, $style)
function moveTo($x1=100, $y1=100, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='M$x1 $y1' style='$style' />";
}

// lineTo($mx, $my, $x1, $y1, $style)
function lineTo($mx=100, $my=100, $x1=150, $y1=150, 
$style='stroke:black;stroke-width:1;') {
echo "<path d='M$mx $my L$x1 $y1' style='$style' />";
}

// lineToH($mx, $my, $x1, $x2, $style)
function lineToH($mx=100, $my=100, $x1=200, 
$style='stroke:black;stroke-width:1;') {
echo "<path d='M$mx $my H$x1' style='$style' />";
}

// lineToV($mx, $my, $y1, $y2, $style)
function lineToV($mx=100, $my=100, $y1=200, 
$style='stroke:black;stroke-width:1;') {
echo "<path d='M$mx $my V$y1' style='$style' />";
}

// bezierC($mx, $my, $x1, $y1, $x2, $y2, $x, $y, $style)
//C x1 y1, x2 y2, x y (or c dx1 dy1, dx2 dy2, dx dy)
//$mx,$my = starting absolute curve point
//$x1,$y1 = first control point
//$x2,$y2 = second control point
//$x,$y = last absolute curve point
function bezierC($mx=100, $my=100, $x1=120, $y1=80, $x2=180, $y2=80, $x=200, $y=100, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='M$mx $my C$x1 $y1, $x2 $y2, $x $y' style='$style' />";
}

// bezierS($mx, $my, $cx1, $cy1, $cx2, $cy2, $cx, $cy, $sx2, $sy2, $sx, $sy, $style)
//C x1 y1, x2 y2, x y (or c dx1 dy1, dx2 dy2, dx dy)
//S x2 y2, x y (or s dx2 dy2, dx dy)
//$mx,$my = starting absolute curve point
//$x1,$y1 = first control point
//$x2,$y2 = second control point
//$x,$y = last absolute curve point
function bezierS($mx=50, $my=50, $cx1=60, $cy1=30, $cx2=80, $cy2=30, $cx=150, $cy=50, 
$sx2=220, $sy2=120, $sx=250, $sy=50, 
$style='stroke:black;stroke-width:1;fill:none;') {
//echo circle($cx1,$cy1,3,'red'); echo circle($cx2,$cy2,3,'red');
//echo circle($cx,$cy,3,'red'); echo circle($sx2,$sy2,3,'red');
echo "<path d='M$mx $my C$cx1 $cy1, $cx2 $cy2, $cx $cy S$sx2 $sy2, $sx $sy' 
style='$style' />";
}

// bezierQ($mx, $my, $x1, $y1, $x, $y, $style)
//Q x1 y1, x y (or q dx1 dy1, dx dy)
//$mx,$my = starting absolute curve point
//$x1,$y1 = unique control point
//$x,$y = last absolute curve point
function bezierQ($mx=100, $my=100, $x1=150, $y1=80, $x=200, $y=100, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='M$mx $my Q$x1 $y1, $x $y' 
style='$style' />";
}

// bezierT($mx, $my, $qx1, $qy1, $qx, $qy, $tx, $ty, $style)
//T x y (or t dx dy)
//$mx,$my = starting absolute curve point
//$qx1,$qy1 = Q control point
//$qx,$qy = last absolute Q curve point
//$tx,$ty = last absolute T curve point
function bezierT($mx=100, $my=100, $qx1=150, $qy1=180, $qx=200, $qy=100, 
$tx=300, $ty=100,
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='M$mx $my Q$qx1 $qy1 $qx $qy T$tx $ty' 
style='$style' />";
}

// ellipseArc($mx, $my, $rx, $ry, $xar, $laflag, $sflag, $x, $y, $style)
//A rx ry x-axis-rotation large-arc-flag sweep-flag x y
//$mx,$my = starting absolute curve point
//$rx,$ry = ellipse radiuses 
//$xar = x-axis-rotation
//$laflag = large-arc-flag
//$sflag = sweep-flag
//$x,$y = last absolute curve point
function ellipseArc($mx=100, $my=100, $rx=20, $ry=50, $xar=0, $laflag=0, $sflag=0, 
$x=200, $y=100, $style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='M$mx $my A$rx $ry $xar $laflag $sflag $x $y' 
style='$style' />";
}

// ellipseArcCcw($mx, $my, $rx, $ry, $xar, $x, $y, $style)
function ellipseArcCcw($mx=100, $my=100, $rx=20, $ry=50, $xar=0, 
$x=200, $y=100, $style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='M$mx $my A$rx $ry $xar 0 0 $x $y' 
style='$style' />";
}

// ellipseArcCw($mx, $my, $rx, $ry, $xar, $x, $y, $style)
function ellipseArcCw($mx=100, $my=100, $rx=20, $ry=50, $xar=0, 
$x=200, $y=100, $style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='M$mx $my A$rx $ry $xar 1 1 $x $y' 
style='$style' />";
}

// circleArcCw($mx, $my, $r, $x, $y, $style)
//A r x-axis-rotation large-arc-flag sweep-flag x y
//$mx,$my = starting absolute curve point
//$r = circle radius 
//$xar = x-axis-rotation
//$laflag = large-arc-flag
//$sflag= 1 clockwise sweep-flag
//$x,$y = last absolute curve point
function circleArcCw($mx=100, $my=100, $r=20, $x=200, $y=100, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='M$mx $my A$r $r 0 0 1 $x $y' 
style='$style' />";
}

// circleArcCcw($mx, $my, $r, $x, $y, $style)
//A r x-axis-rotation large-arc-flag sweep-flag x y
//$mx,$my = starting absolute curve point (pixel)
//$r = circle radius (pixel)
//$xar = x-axis-rotation (degree)
//$laflag = large-arc-flag
//$sflag= 1 counter-clockwise sweep-flag
//$x,$y = last absolute curve point
function circleArcCcw($mx=100, $my=100, $r=20, $x=200, $y=100, 
$style='stroke:black;stroke-width:1;fill:none;') {
echo "<path d='M$mx $my A$r $r 0 1 0 $x $y' style='$style' />";
}

// circleArcCcw90($mx, $my, $r, $style)
function circleArcCcw90($mx=100, $my=100, $r=20, 
$style='stroke:black;stroke-width:1;fill:none;') {
$x=$mx+$r; $y=$my-$r;
echo "<path d='M$mx $my A$r $r 0 0 0 $x $y' style='$style' />";
}

// circleArcCw90($mx, $my, $r, $style)
function circleArcCw90($mx=100, $my=100, $r=20, 
$style='stroke:black;stroke-width:1;fill:none;') {
$x=$mx-$r; $y=$my-$r;
echo "<path d='M$mx $my A$r $r 0 0 1 $x $y' style='$style' />";
}

// circleArcCcw180($mx, $my, $r, $style)
function circleArcCcw180($mx=100, $my=100, $r=20, 
$style='stroke:black;stroke-width:1;fill:none;') {
$x=$mx; $y=2*$my;
echo "<path d='M$mx $my A$r $r 0 0 0 $x $y' style='$style' />";
}

// circleArcCw180($mx, $my, $r, $style)
function circleArcCw180($mx=100, $my=100, $r=20, 
$style='stroke:black;stroke-width:1;fill:none;') {
$x=$mx; $y=2*$my;
echo "<path d='M$mx $my A$r $r 0 0 1 $x $y' style='$style' />";
}

// arcCcwDeg($mx, $my, $r, $degree, $style)
function arcCcwDeg($mx=100, $my=100, $r=30, $degree=45,  
$style='stroke:black;stroke-width:1;fill:none;') {
$rad=deg2rad($degree); $dx=$r*sin($rad); $dy=$r*(1-cos($rad)); $x=$mx+$dx; $y=$my-$dy;
echo "<path d='M$mx $my A$r $r 0 0 0 $x $y' style='$style' />";
}

// arcCwDeg($mx, $my, $r, $degree, $style)
function arcCwDeg($mx=100, $my=100, $r=30, $degree=45, 
$style='stroke:black;stroke-width:1;fill:none;') {
$rad=deg2rad($degree); $dx=$r*sin($rad); $dy=$r*(1-cos($rad)); $x=$mx-$dx; $y=$my-$dy;
echo "<path d='M$mx $my A$r $r 0 0 1 $x $y' style='$style' />";
}

// text($x, $y, $style, $string)
function text($x=100, $y=100, $fill='black', $string='aaa') {
echo "<text x='$x' y='$y' style='$style' >$string";
echo "</text>";
}

// textOpen($x, $y, $style, $string)
function textOpen($x=100, $y=100, $fill='black', $string='aaa') {
echo "<text x='$x' y='$y' style='$style' >$string";
}

// tspan($style, $string)
function tspan($style='fill:red;font-family:Georgia;font-size:20', 
$string='string') {
echo "<tspan style='$style' >$string</tspan>";
}

// textFont($x, $y, $fill, $string, $fontfamily, $fontsize)
function textFont($x=100, $y=100, $fill='black', $string='font Verdana', 
$fontfamily='Verdana', $fontsize=20) {
echo "<text x=$x y=$y fill=$fill font-family=$fontfamily 
font-size=$fontsize >$string</text>";
}

// textStyle($x, $y, $style, $string)
function textStyle($x=100, $y=100, $style='fill:black;font-family:Georgia;font-size:20', 
$string='font Georgia') {
echo "<text x='$x' y='$y' style='$style' >$string</text>";
}

// textBox($x, $y, $w, $h, $r, $style, $string)
function textBoxStyle($x=100, $y=100, $w=150, $h=50, $r=10, 
$style="stroke:black;stroke-width:1;fill:none;", $string='aaa') { $ry=$rx;
echo "<rect x='$x' y='$y' width='$w' height='$h' rx='$r' ry='$r' 
style='$style' />";
textStyle($x+$w/2, $y+$h/2, $style, $string);
}

// title($string, $style)
function titleStyle($string='TITLE', $style='stroke-width:1; stroke:blue;') {
echo "<title style='$style' >$string";
echo "</title>";
}

// gOpen($id)
function gOpen($id='g01') {
echo "<g id=$id>";
}

// gClose()
function gClose() {
echo "</g>";
}

// defsOpen($id)
function defsOpen($id='defs01') {
echo "<defs id=$id>";
}

// defsClose()
function defsClose() {
echo "</defs>";
}

// patternOpen($id, $w, $h, $patternUnits)
function patternOpen($id='pattern01', $w=10, $h=10, $patternUnits='userSpaceOnUse') {
echo "<pattern id=$id width=$w height=$h patternUnits=$patternUnits >";
}

// patternClose()
function patternClose() {
echo "</pattern>";
}

// image($x, $y, $w, $h, $href, $style)
function imageStyle($x=100, $y=100, $w=100, $h=100, $href='aaa.jpg', $style='none') {
echo "<image x=$x y=$y width=$w height=$h xlink:href='$href' style='$style' />";
}

// aOpen($href, $target)
function aOpen($href='https://google.com', $target='_blank') {
echo "<a href='$href' target='$target' >";
}

// aClose()
function aClose() {
echo "</a>";
}

// symbolOpen($id)
function symbolOpen($id='sym01') {
echo "<symbol id='$id' >";
}

// symbolViewboxOpen($id, $preserveAspectRatio, $viewBox)
function symbolViewboxOpen($id='sym01', $preserveAspectRatio='yes', $viewBox='0 0 500 500') {
echo "<symbol id=$id preserveAspectRatio=$preserveAspectRatio viewBox=$viewBox >";
}

// symbolClose()
function symbolClose() {
echo "</symbol>";
}

// useSymbol($x, $y, $w, $h, $href)
function useSymbol($x=100, $y=100, $w=500, $h=500, $href='#sym01') {
echo "<use x=$x y=$y width=$w height=$h href='$href' />";
}

// arrowLeft($x1, $y1, $dx, $style)
function arrowLeft($x1=100, $y1=100, $dx=20, 
$style='stroke:black;stroke-width:1;') { 
$n=4;
$x2=$x1+$dx; $y2=$y1; $x3=$x1+($dx/$n); $y3=$y2-($dx/$n); $x4=$x3; $y4=$y2+($dx/$n);
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' style='$style' />";
echo "<line x1='$x1' y1='$y1' x2='$x3' y2='$y3' style='$style' />";
echo "<line x1='$x1' y1='$y1' x2='$x4' y2='$y4' style='$style' />";
}

// arrowRight($x1, $y1, $dx, $style)
function arrowRight($x1=100, $y1=100, $dx=20, 
$style='stroke:black;stroke-width:1;') { $n=4;
$x2=$x1-$dx; $y2=$y1; $x3=$x1-($dx/$n); $y3=$y2-($dx/$n); $x4=$x3; $y4=$y2+($dx/$n);
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' style='$style' />";
echo "<line x1='$x1' y1='$y1' x2='$x3' y2='$y3' style='$style' />";
echo "<line x1='$x1' y1='$y1' x2='$x4' y2='$y4' style='$style' />";
}

// arrowUp($x1, $y1, $dx, $style)
function arrowUp($x1=100, $y1=100, $dx=20, 
$style='stroke:black;stroke-width:1;') { 
$n=4;
$x2=$x1; $y2=$y1+$dx; $x3=$x1-($dx/$n); $y3=$y1+($dx/$n); $x4=$x1+($dx/$n); $y4=$y3;
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' style='$style' />";
echo "<line x1='$x1' y1='$y1' x2='$x3' y2='$y3' style='$style' />";
echo "<line x1='$x1' y1='$y1' x2='$x4' y2='$y4' style='$style' />";
}

// arrowDown($x1, $y1, $dx, $style)
function arrowDown($x1=100, $y1=100, $dx=20, 
$style='stroke:black;stroke-width:1;fill:none;') { 
$n=4;
$x2=$x1; $y2=$y1-$dx; $x3=$x1-($dx/$n); $y3=$y1-($dx/$n); $x4=$x1+($dx/$n); $y4=$y3;
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' style='$style' />";
echo "<line x1='$x1' y1='$y1' x2='$x3' y2='$y3' style='$style' />";
echo "<line x1='$x1' y1='$y1' x2='$x4' y2='$y4' style='$style' />";
}

// quoteH($x1, $y1, $x2, $dx, $style)
function quoteH($x1=100, $y1=100, $x2=200, $dx=20, 
$style='stroke:black;stroke-width:1;fill:none;') { 
$y2=$y1; 
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' style='$style' />";
arrowLeft($x1, $y1, $dx, $style);
arrowRight($x2, $y2, $dx, $style);
}

// quoteV($x1, $y1, $x2, $dx, $style)
function quoteV($x1=100, $y1=100, $y2=200, $dx=20, 
$style='stroke:black;stroke-width:1;') { $x2=$x1; 
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' style='$style' />";
arrowUp($x1, $y1, $dx, $style);
arrowDown($x2, $y2, $dx, $style);
}

// lineIntersection($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4)
function lineIntersection($x1=50, $y1=100, $x2=100, $y2=50, $x3=50, $y3=50, 
	$x4=100, $y4=100) {
$den = (($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
$xi=(($x1*$y2-$y1*$x2)*($x3-$x4)-($x1-$x2)*($x3*$y4-$y3*$x4))/$den;
$yi=(($x1*$y2-$y1*$x2)*($x3-$x4)-($y1-$y2)*($x3*$y4-$y3*$x4))/$den;
//line($x1, $y1, $x2, $y2, $style);
//line($x3, $y3, $x4, $y4, $style);
point($xi, $yi, $r=2);
}

// lineIntersectionPoint($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4, $r) ???
function lineIntersectionPoint($x1=50, $y1=100, $x2=100, $y2=50, $x3=50, $y3=50, 
	$x4=100, $y4=100, $r=2) {
$den = (($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
$xi=(($x1*$y2-$y1*$x2)*($x3-$x4)-($x1-$x2)*($x3*$y4-$y3*$x4))/$den;
$yi=(($x1*$y2-$y1*$x2)*($x3-$x4)-($y1-$y2)*($x3*$y4-$y3*$x4))/$den;
line($x1, $y1, $x2, $y2, $style='stroke:green;stroke-width=2;');
line($x3, $y3, $x4, $y4, $style='stroke:red;stroke-width:2;');
point(abs($xi), abs($yi), $r);
}

// lineParallel($x1, $y1, $x2, $y2, $x3, $y3, $x4, $style)
function lineParallel($x1=50, $y1=100, $x2=100, $y2=50, $x3=50, $y3=50, $x4=100,
$style='stroke:black;stroke-width:1;') {
$m = ($y2-$y1)/($x2-$x1); //$x4=$x2;
$y4=($m*($x4-$x3))+$y3;
//line($x1, $y1, $x2, $y2, $style);
line($x3, $y3, $x4, $y4, $style);
//point($xi, $yi, $r=2);
}

// linePerpendicular($x1, $y1, $x2, $y2, $x3, $y3, $x4, $style)???
function linePerpendicular($x1=50, $y1=100, $x2=100, $y2=50, $x3=50, $y3=50, 
	$x4=80, $style='stroke:black;stroke-width:1') {
$m = ($y2-$y1)/($x2-$x1);
$y4=(-$m*($x4-$x3))+$y3;
//line($x1, $y1, $x2, $y2, $style);
line($x3, $y3, $x4, $y4, $style);
//point($x4, $y4, $r=2);
}

// lineSlope($x1, $y1, $x2, $m, $style)
function lineSlope($x1=50, $y1=100, $x2=200, $m=0,
	$style='stroke:black;stroke-width:1') {
$y2=$m*($x2-$x1)+$y1;
point($x1,$y1);
line($x1, $y1, $x2, $y2, $style);
}

// style($type, $content)
function style($type='text/css', $content='line {stroke: navy;}') {
echo "<style type=$type>";
echo "$content</style>";
}

// styleCss($content)
function styleCss($content='line {stroke: navy;}') {
echo "<style type='text/css' >";
echo "$content</style>";
}

// patternHatch($id, $w, $h=10, $patternTransform, $patternUnits)
function patternHatch($id='diagonalHatch', $w=10, $h=10, $patternTransform='rotate(45)', 
	$patternUnits='userSpaceOnUse') {
echo "<pattern id=$id width=$w height=$h patternTransform=$patternTransform patternUnits=$patternUnits >";
echo "<line x1='0' y1='0' x2='0' y2='10' />";
echo "</pattern>";
}

// hexagonCentered($cx, $cy, $r, $style)
function hexagonCentered($cx=100, $cy=100, $r=30, 
$style='stroke:black;stroke-width:1;fill:none') { 
$n=6;
//circle($cx,$cy,$r);
$a=2*$r*tan(M_PI/$n);
$x1=$cx-$a/2; $y1=$cy+$r;
$x2=$cx+$a/2; $y2=$cy+$r;
$d=sqrt($r*$r+($a/2)*($a/2));
$x3=$cx+$d; $y3=$cy;
$x4=$x2; $y4=$cy-$r;
$x5=$x1; $y5=$y4;
$x6=$cx-$d; $y6=$cy;
echo "<polygon points='$x1,$y1 $x2,$y2  
$x3,$y3 $x4,$y4 $x5,$y5 $x6,$y6'  
style='$style' />";
}

// gridH($x1, $y1, $x2, $dy, $rows, $style)
function gridH($x1=0, $y1=0, $x2=500, $dy=10, $rows=10, 
$style='stroke:grey;stroke-width=0.5') {
for ($i = 0; $i <= $rows; $i++) { 
	$xi=$x1; $yi=$dy*$i;
	echo lineH($xi,$yi,$x2,$style);
	}
}

// gridV($x1, $y1, $y2, $dx, $cols, $style)
function gridV($x1=0, $y1=0, $y2=500, $dx=10, $cols=10, 
$style='stroke:grey;stroke-width=0.5') {
for ($i = 0; $i <= $cols; $i++) { 
	$yi=$y1; $xi=$dx*$i;
	echo lineV($xi,$yi,$y2,$style);
	}
}

// grid($x1, $y1, $x2, $y2, $dx, $dy, $rows, $cols, $style)
function grid($x1=0, $y1=0, $x2=500, $y2=500, $dx=10, $dy=10, 
$rows=50, $cols=50, $style='stroke:grey;stroke-width:0.5') {
gOpen('grid');
gridH($x1, $y1, $x2, $dy, $rows);
gridV($x1, $y1, $y2, $dx, $cols);
gClose();
}

// polarRhombus($cx, $cy, $r, $style)
function polarRhombus($cx=100, $cy=100, $r=50, 
$style='stroke:black;stroke-width:1;fill:none') { 
$alpha=2*M_PI/4;
//circle($cx,$cy,$r);
$arr1=returnCartesian($r,0);
$arr2=returnCartesian($r,$alpha);
$arr3=returnCartesian($r,2*$alpha);
$arr4=returnCartesian($r,3*$alpha);
$x1=$cx+$arr1[0]; $y1=$cy+$arr1[1];
$x2=$cx+$arr2[0]; $y2=$cy+$arr2[1];
$x3=$cx+$arr3[0]; $y3=$cy+$arr3[1];
$x4=$cx+$arr4[0]; $y4=$cy+$arr4[1];
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3 $x4,$y4'  
style='$style' />";
}

// polarPentagon($cx, $cy, $r, $style)
function polarPentagon($cx=100, $cy=100, $r=50, 
$style='stroke:black;stroke-width:1;fill:none;') { 
$alpha=2*M_PI/5;
//circle($cx,$cy,$r);
$arr1=returnCartesian($r,0);
$arr2=returnCartesian($r,$alpha);
$arr3=returnCartesian($r,2*$alpha);
$arr4=returnCartesian($r,3*$alpha);
$arr5=returnCartesian($r,4*$alpha);
$x1=$cx+$arr1[0]; $y1=$cy+$arr1[1];
$x2=$cx+$arr2[0]; $y2=$cy+$arr2[1];
$x3=$cx+$arr3[0]; $y3=$cy+$arr3[1];
$x4=$cx+$arr4[0]; $y4=$cy+$arr4[1];
$x5=$cx+$arr5[0]; $y5=$cy+$arr5[1];
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3 $x4,$y4 $x5,$y5'  
style='$style' />";
}

// polarHexagon($cx, $cy, $r, $style)
function polarHexagon($cx=100, $cy=100, $r=50, 
$style='stroke:black;stroke-width:1;fill:none;') { 
$alpha=2*M_PI/6;
//circle($cx,$cy,$r);
$arr1=returnCartesian($r,0);
$arr2=returnCartesian($r,$alpha);
$arr3=returnCartesian($r,2*$alpha);
$arr4=returnCartesian($r,3*$alpha);
$arr5=returnCartesian($r,4*$alpha);
$arr6=returnCartesian($r,5*$alpha);
$x1=$cx+$arr1[0]; $y1=$cy+$arr1[1];
$x2=$cx+$arr2[0]; $y2=$cy+$arr2[1];
$x3=$cx+$arr3[0]; $y3=$cy+$arr3[1];
$x4=$cx+$arr4[0]; $y4=$cy+$arr4[1];
$x5=$cx+$arr5[0]; $y5=$cy+$arr5[1];
$x6=$cx+$arr6[0]; $y6=$cy+$arr6[1];
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3 $x4,$y4 $x5,$y5 $x6,$y6'  
style='$style' />";
}

// polarHeptagon($cx, $cy, $r, $style)
function polarHeptagon($cx=100, $cy=100, $r=50, 
$style='stroke:black;stroke-width:1;fill:none') { 
$alpha=2*M_PI/7;
//circle($cx,$cy,$r);
$arr1=returnCartesian($r,0);
$arr2=returnCartesian($r,$alpha);
$arr3=returnCartesian($r,2*$alpha);
$arr4=returnCartesian($r,3*$alpha);
$arr5=returnCartesian($r,4*$alpha);
$arr6=returnCartesian($r,5*$alpha);
$arr7=returnCartesian($r,6*$alpha);
$x1=$cx+$arr1[0]; $y1=$cy+$arr1[1];
$x2=$cx+$arr2[0]; $y2=$cy+$arr2[1];
$x3=$cx+$arr3[0]; $y3=$cy+$arr3[1];
$x4=$cx+$arr4[0]; $y4=$cy+$arr4[1];
$x5=$cx+$arr5[0]; $y5=$cy+$arr5[1];
$x6=$cx+$arr6[0]; $y6=$cy+$arr6[1];
$x7=$cx+$arr7[0]; $y7=$cy+$arr7[1];
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3 $x4,$y4 $x5,$y5 $x6,$y6 $x7,$y7'  
style='$style' />";
}

// polarLine($cx, $cy, $r, $alpha, $style)
function polarLine($cx=100, $cy=100, $r=50, $alpha=45, 
$style='stroke:black;stroke-width=1') {
$array=returnCartesian($r,$alpha);
$x = $array[0]; $y = $array[1];
//point($cx,$cy);
$x1=$cx+$x; $y1=$cy+$y;
//point($x1,$y1);
line($cx,$cy,$x1,$y1,$style);
}

// polarLineN($cx, $cy, $r, $n, $alpha, $style)
function polarLineN($cx=100, $cy=100, $r=50, $n=6, $alpha=45, 
$style='stroke:black;stroke-width:1;') {
for ($i = 1; $i <= $n; $i++) {
$array=returnCartesian($r,$i*$alpha);
$x = $array[0]; $y = $array[1];
//point($cx,$cy);
$x1=$cx+$x; $y1=$cy+$y;
//point($x1,$y1);
line($cx,$cy,$x1,$y1,$style);
	}
}

// polarPolygonN($cx, $cy, $r, $n, $alpha, $style) ???
function polarPolygonN($cx=100, $cy=100, $r=50, $n=4, $alpha=15, 
$style='stroke:black;stroke-width=1') {
for ($i = 0; $i <= $n-1; $i++) { $j=$i+1;
$arr1=returnCartesian($r,$i*$alpha);
$arr2=returnCartesian($r,$j*$alpha);
$x01 = $arr1[0]; $y01 = $arr1[1];
$x02 = $arr2[0]; $y02 = $arr2[1];
point($cx,$cy);
$x1=$cx+$x01; $y1=$cy+$y01;
$x2=$cx+$x02; $y2=$cy+$y02;
//point($x1,$y1);
line($x1,$y1,$x2,$y2,$style);
	}
}

// polarOctagon($cx, $cy, $r, $style)
function polarOctagon($cx=100, $cy=100, $r=50, 
$style='stroke:black;stroke-width:1;') { 
$alpha=2*M_PI/8;
for ($i = 0; $i <= 7; $i++) { $j=$i+1;
$arr1=returnCartesian($r,$i*$alpha);
$arr2=returnCartesian($r,$j*$alpha);
$x01 = $arr1[0]; $y01 = $arr1[1];
$x02 = $arr2[0]; $y02 = $arr2[1];
point($cx,$cy);
$x1=$cx+$x01; $y1=$cy+$y01;
$x2=$cx+$x02; $y2=$cy+$y02;
//point($x1,$y1);
line($x1,$y1,$x2,$y2,$style);
	}
}

// polarPointN($cx, $cy, $r, $n, $alpha, $style)
function polarPointN($cx=100, $cy=100, $r=50, $n=4, $alpha=45, 
$style='stroke:black;stroke-width:1;') {
for ($i = 0; $i <= $n-1; $i++) {
$array=returnCartesian($r,$i*$alpha);
$x = $array[0]; $y = $array[1];
point($cx,$cy);
$x1=$cx+$x; $y1=$cy+$y;
point($x1,$y1,1,$style);
//line($cx,$cy,$x1,$y1);
	}
}

// circleArrayH($cx, $cy, $r, $dx, $cols, $style)
function circleArrayH($cx=100, $cy=100, $r=10, $dx=25, $cols=5, 
$style='stroke:black;stroke-width:1;fill:none;') {
for ($i = 0; $i < $cols; $i++) { 
$xi=$cx+$dx*$i; $yi=$cy;
echo circle($xi, $yi, $r, $style);
	}
}

// circleArrayV($cx, $cy, $r, $dy, $rows, $style)
function circleArrayV($cx=100, $cy=100, $r=10, $dy=20, $rows=4, 
$style='stroke:black;stroke-width:1;fill:none;') {
for ($i = 0; $i < $rows; $i++) { 
$xi=$cx; $yi=$cy+$dy*$i;
echo circle($xi, $yi, $r, $style);
	}
}

// circleArrayHV($cx, $cy, $r, $dx, $rows, $cols, $style)
function circleArrayHV($cx=100, $cy=100, $r=5, $dx=20, $rows=3, $cols=4, 
$style='stroke:black;stroke-width:1;fill:none;') {
for ($i = 0; $i < $cols; $i++) { 
$xi=$cx+$dx*$i; $yi=$cy;
circleArrayV($xi, $yi, $r, $dx, $rows, $style);
	}
}

// imageArrayH($x, $y, $w, $h, $dx, $cols, $href)
function imageArrayH($x=0, $y=100, $w=50, $h=50, $dx=100, 
$cols=5, $href='squareRed.50px.svg') {
for ($i = 0; $i < $cols; $i++) { 
$xi=$x+$dx*$i; $yi=$y;
echo image($xi, $yi, $w, $h, $href);
	}
}

// imageArrayV($x, $y, $w, $h, $dy, $rows, $href)
function imageArrayV($x=0, $y=100, $w=50, $h=50, $dy=100, 
$rows=5, $href='squareRed.50px.svg') {
for ($i = 0; $i < $rows; $i++) { 
$xi=$x; $yi=$y+$dy*$i;
echo image($xi, $yi, $w, $h, $href);
	}
}

// insertSvg($x, $y, $href='svgfileonly.svg')
function insertSvg($x=100, $y=100, $href='squareRed.50px.svg') {
echo "<g transform='translate($x,$y)' >";
$obj= file_get_contents($href);
echo $obj;
echo "</g>";
}

?>
