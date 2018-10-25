<?php
// flashSvg.inc.04.php

// svgOpen($w, $h, $xmlns='http://www.w3.org/2000/svg')
function svgOpen($w, $h, $xmlns='http://www.w3.org/2000/svg') {
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

// line($x1, $y1, $x2, $y2, $stroke, $strokewidth)
function line($x1=50, $y1=50, $x2=100, $y2=100, $stroke='black', 
$strokewidth=1) {
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' stroke='$stroke' stroke-width='$strokewidth' />";
}

// lineStyle($x1, $y1, $x2, $y2, $style)
function lineStyle($x1=50, $y1=50, $x2=100, $y2=100, 
$style='stroke:black; stroke-width:1') {
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' style='$style' />";
}

// lineH($x1, $y1, $x2, $stroke, $strokewidth)
function lineH($x1=50, $y1=50, $x2=100, $stroke='black', 
$strokewidth=1) {
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y1' stroke='$stroke' stroke-width='$strokewidth' />";
}

// lineV($x1, $y1, $y2, $stroke, $strokewidth)
function lineV($x1=50, $y1=50, $y2=140, $stroke='black', 
$strokewidth=1) {
echo "<line x1='$x1' y1='$y1' x2='$x1' y2='$y2' stroke='$stroke' stroke-width='$strokewidth' />";
}

// cross($cx, $cy, $d, $stroke, $strokewidth)
function cross($cx=50, $cy=50, $d=20, $stroke='red', $strokewidth=1) {
$x1=$cx-$d/2; $x2=$cx+$d/2; $y1=$cy-$d/2; $y2=$cy+$d/2;
lineH($x1, $cy, $x2, $stroke, $strokewidth);
lineV($cx, $y1, $y2, $stroke, $strokewidth);
}

// rectOpen($x, $y, $w, $h, $stroke, $strokewidth, $fill')
function rectOpen($x=100, $y=100, $w=100, $h=50, $stroke='black', 
$strokewidth=1, $fill='none') {
echo "<rect x='$x' y='$y' width='$w' height='$h' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' >";
}

// rect($x, $y, $w, $h, $stroke, $strokewidth, $fill)
function rect($x=100, $y=100, $w=100, $h=50, $stroke='black', 
$strokewidth=1, $fill='none') {
echo "<rect x='$x' y='$y' width='$w' height='$h' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' />";
}

// rectRotDeg($x, $y, $w, $h, $deg, $stroke, $strokewidth, $fill)
function rectRotDeg($x1=100, $y1=100, $w=100, $h=50, $deg=45, $stroke='black', 
$strokewidth=1, $fill='none') {
$rad=deg2rad($deg);
$x2=$x1+$w*cos($rad); $y2=$y1-$w*sin($rad);
//point($x1,$y1); point($x2,$y2);
$x3=$x2+$h*sin($rad); $y3=$y2+$h*cos($rad);
$x4=$x1+$h*sin($rad); $y4=$y1+$h*cos($rad);
//point($x3,$y3); point($x4,$y4);
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3 $x4,$y4' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// rectStyle($x, $y, $w, $h, $style)
function rectStyle($x=100, $y=100, $w=100, $h=50, 
$style='stroke:black; strokewidth:1; fill:none') {
echo "<rect x='$x' y='$y' width='$w' height='$h' style='$style' />";
}

// rectClose()
function rectClose() {
echo "</rect>";
}

// rectRounded($x, $y, $w, $h, $rx, $ry, $stroke, $strokewidth, $fill)
function rectRounded($x=100, $y=100, $w=150, $h=50, $rx=10, $ry=10, $stroke='black', 
	$strokewidth=1, $fill='none') {
echo "<rect x='$x' y='$y' width='$w' height='$h' rx='$rx' ry='$ry' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// rectRoundedStyle($x, $y, $w, $h, $rx, $ry, $style)
function rectRoundedStyle($x=100, $y=100, $w=150, $h=50, $rx=10, $ry=10, 
$style='stroke:black; strokewidth:1; fill:none') {
echo "<rect x='$x' y='$y' width='$w' height='$h' rx='$rx' ry='$ry' 
style='$style' />";
}

function square($x=100, $y=100, $w=50, $stroke='black', $strokewidth=1, $fill='none') {
echo "<rect x=$x y=$y width=$w height=$w stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// circleOpen($cx, $cy, $r, $stroke, $strokewidth, $fill) 
function circleOpen($cx=50, $cy=50, $r=50, $stroke='black', 
$strokewidth=1, $fill='none') {
echo "<circle cx='$cx' cy='$cy' r='$r' stroke='$stroke' stroke-width='$strokewidth' fill='$fill' >";
}

// circle($cx, $cy, $r, $stroke, $strokewidth, $fill) 
function circle($cx=100, $cy=100, $r=50, $stroke='black', 
$strokewidth=1, $fill='none') {
echo "<circle cx='$cx' cy='$cy' r='$r' stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// circleStyle($cx, $cy, $r, $style) 
function circleStyle($cx=100, $cy=100, $r=50, $style='stroke:black; 
strokewidth:1; fill:none') {
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

// point($cx, $cy, $r, $stroke, $strokewidth, $fill)
function point($cx=100, $cy=100, $r=1, $stroke='black', 
$strokewidth=1, $fill='none') {
echo "<circle cx='$cx' cy='$cy' r='$r' stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// ellipse($cx, $cy, $rx, $ry, $stroke, $strokewidth, $fill) 
function ellipse($cx=150, $cy=50, $rx=40, $ry=20, 
$stroke='black', $strokewidth=1, $fill='none') {
echo "<ellipse cx='$cx' cy='$cy' rx='$rx' ry='$ry' stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// ellipseStyle($cx, $cy, $rx, $ry, $style) 
function ellipseStyle($cx=150, $cy=50, $rx=40, $ry=20, 
$style='stroke:black;stroke-width:1;fill:none') {
echo "<ellipse cx='$cx' cy='$cy' rx='$rx' ry='$ry' style='$style' />";
}

// triangle($x1, $y1, $x2, $y2, $x3, $y3, $stroke, $strokewidth, $fill)
function triangle($x1=200, $y1=50, $x2=140, $y2=140, $x3=200, 
$y3=120, $stroke='black', $strokewidth=1, $fill='none') {
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' />";
}

//first point of diamond to the top
// diamondUp($x1, $y1, $dx, $stroke, $strokewidth, $fill)
function diamondUp($x1=100, $y1=100, $dx=10, 
$stroke='black', $strokewidth=1, $fill='none') {
$x2=$x1+$dx/2; $y2=$y1+$dx;
$x3=$x1; $y3=$y1+2*$dx;
$x4=$x1-$dx/2; $y4=$y1+$dx;
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3,$x4,$y4' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

//first point of diamond to the bottom
// diamondDown($x1, $y1, $dx, $stroke, $strokewidth, $fill)
function diamondDown($x1=100, $y1=100, $dx=10, 
$stroke='black', $strokewidth=1, $fill='none') {
$x2=$x1-$dx/2; $y2=$y1-$dx;
$x3=$x1; $y3=$y1-2*$dx;
$x4=$x1+$dx/2; $y4=$y1-$dx;
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3,$x4,$y4' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

//first point of diamond to the left
// diamondLeft($x1, $y1, $dx, $stroke, $strokewidth, $fill)
function diamondLeft($x1=100, $y1=100, $dx=10, 
$stroke='black', $strokewidth=1, $fill='none') {
$x2=$x1+$dx; $y2=$y1-$dx/2;
$x3=$x1+2*$dx; $y3=$y1;
$x4=$x1+$dx; $y4=$y1+$dx/2;
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3,$x4,$y4' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

//first point of diamond to the right
// diamondRight($x1, $y1, $dx, $stroke, $strokewidth, $fill)
function diamondRight($x1=100, $y1=100, $dx=10, 
$stroke='black', $strokewidth=1, $fill='none') {
$x2=$x1-$dx; $y2=$y1+$dx/2;
$x3=$x1-2*$dx; $y3=$y1;
$x4=$x1-$dx; $y4=$y1-$dx/2;
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3,$x4,$y4' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// polygon($points, $stroke, $strokewidth, $fill)
function polygon($points='50,50 50,100 100,100', $stroke='black', 
$strokewidth=1, $fill='none') {
echo "<polygon points='$points'  
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// polygonStyle($points, $style)
function polygonStyle($points='50,50 50,100 100,100', 
$style='stroke:black;stroke-width:1;fill:none') {
echo "<polygon points='$points'  
style='$style' />";
}

// polygon4($arrx, $arry, $stroke, $strokewidth, $fill)
function polygon4($arrx=array(100,200,175,125), $arry=array(100,100,50,50), 
$stroke='black', $strokewidth=1, $fill='none') {
echo "<polygon points='$arrx[0],$arry[0] $arrx[1],$arry[1] 
$arrx[2],$arry[2] $arrx[3],$arry[3]'  
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// polyline4($arrx, $arry, $stroke, $strokewidth, $fill)
function polyline4($arrx=array(100,200,175,125), $arry=array(100,100,50,50), 
$stroke='black', $strokewidth=1, $fill='none') {
echo "<polyline points='$arrx[0],$arry[0] $arrx[1],$arry[1] 
$arrx[2],$arry[2] $arrx[3],$arry[3]'  
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// polyline($points, $stroke, $strokewidth, $fill)
function polyline($points, $stroke='black', 
$strokewidth=1, $fill='none') {
echo "<polyline points='$points'  
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// polylineStyle($points, $style)
function polylineStyle($points='100,50 200,50 200,100', $style='stroke:black; 
stroke-width:1; fill:none') {
echo "<polyline points='$points'  
style='$style' />";
}

// polylineArray($arrx, $arry, $stroke, $strokewidth, $fill)
function polylineArray($arrx, $arry, $stroke='black', 
$strokewidth=1, $fill='none') {
echo "<polyline points='";
$nx= count($arrx);
for ($i = 0; $i <= $nx-1; $i++) {
echo $arrx[$i].",".$arry[$i]." "; }
echo "'stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// path($d, $stroke, $strokewidth, $fill)
function path($d='M100,100 200,200', $stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='$d' stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// pathStyle($d, $style)
function pathStyle($d='M100,100 200,200', $style='stroke:black; stroke-width:1; fill:none') {
echo "<path d='$d' style='$style' />";
}

// pathId($id, $d, $stroke, $strokewidth, $fill)
function pathId($id='path01', $d='M10,110 120,120', $stroke='black', 
$strokewidth=1, $fill='none') {
echo "<path id=$id d='$d' stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// moveTo($x1, $y1, $stroke, $strokewidth, $fill)
function moveTo($x1=100, $y1=100, $stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='M$x1 $y1' stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}
// lineTo($mx, $my, $x1, $y1, $stroke, $strokewidth)
function lineTo($mx=100, $my=100, $x1=150, $y1=150, 
$stroke='black', $strokewidth=1) {
echo "<path d='M$mx $my L$x1 $y1' stroke='$stroke' stroke-width='$strokewidth' />";
}

// lineToH($mx, $my, $x1, $x2, $stroke, $strokewidth)
function lineToH($mx=100, $my=100, $x1=200, 
$stroke='black', $strokewidth=1) {
echo "<path d='M$mx $my H$x1' stroke='$stroke' stroke-width='$strokewidth' />";
}

// lineToV($mx, $my, $y1, $y2, $stroke, $strokewidth)
function lineToV($mx=100, $my=100, $y1=200, 
$stroke='black', $strokewidth=1) {
echo "<path d='M$mx $my V$y1' stroke='$stroke' stroke-width='$strokewidth' />";
}

// bezierC($mx, $my, $x1, $y1, $x2, $y2, $x, $y, $stroke, $strokewidth, $fill)
//C x1 y1, x2 y2, x y (or c dx1 dy1, dx2 dy2, dx dy)
//$mx,$my = starting absolute curve point
//$x1,$y1 = first control point
//$x2,$y2 = second control point
//$x,$y = last absolute curve point
function bezierC($mx=100, $my=100, $x1=120, $y1=80, $x2=180, $y2=80, $x=200, $y=100, 
$stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='M$mx $my C$x1 $y1, $x2 $y2, $x $y' stroke='$stroke' stroke-width='$strokewidth' 
fill='$fill' />";
}

// bezierS($mx, $my, $cx1, $cy1, $cx2, $cy2, $cx, $cy, $sx2, $sy2, $sx, $sy, $stroke, $strokewidth, $fill)
//C x1 y1, x2 y2, x y (or c dx1 dy1, dx2 dy2, dx dy)
//S x2 y2, x y (or s dx2 dy2, dx dy)
//$mx,$my = starting absolute curve point
//$x1,$y1 = first control point
//$x2,$y2 = second control point
//$x,$y = last absolute curve point
function bezierS($mx=50, $my=50, $cx1=60, $cy1=30, $cx2=80, $cy2=30, $cx=150, $cy=50, 
$sx2=220, $sy2=120, $sx=250, $sy=50, 
$stroke='black', $strokewidth=1, $fill='none') {
//echo circle($cx1,$cy1,3,'red'); echo circle($cx2,$cy2,3,'red');
//echo circle($cx,$cy,3,'red'); echo circle($sx2,$sy2,3,'red');
echo "<path d='M$mx $my C$cx1 $cy1, $cx2 $cy2, $cx $cy S$sx2 $sy2, $sx $sy' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// bezierQ($mx, $my, $x1, $y1, $x, $y, $stroke, $strokewidth, $fill)
//Q x1 y1, x y (or q dx1 dy1, dx dy)
//$mx,$my = starting absolute curve point
//$x1,$y1 = unique control point
//$x,$y = last absolute curve point
function bezierQ($mx=100, $my=100, $x1=150, $y1=80, $x=200, $y=100, 
$stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='M$mx $my Q$x1 $y1, $x $y' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// bezierT($mx, $my, $qx1, $qy1, $qx, $qy, $tx, $ty, $stroke, $strokewidth, $fill)
//T x y (or t dx dy)
//$mx,$my = starting absolute curve point
//$qx1,$qy1 = Q control point
//$qx,$qy = last absolute Q curve point
//$tx,$ty = last absolute T curve point
function bezierT($mx=100, $my=100, $qx1=150, $qy1=180, $qx=200, $qy=100, 
$tx=300, $ty=100,
$stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='M$mx $my Q$qx1 $qy1 $qx $qy T$tx $ty' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// ellipseArc($mx, $my, $rx, $ry, $xar, $laflag, $sflag, $x, $y, $stroke, $strokewidth, $fill)
//A rx ry x-axis-rotation large-arc-flag sweep-flag x y
//$mx,$my = starting absolute curve point
//$rx,$ry = ellipse radiuses 
//$xar = x-axis-rotation
//$laflag = large-arc-flag
//$sflag = sweep-flag
//$x,$y = last absolute curve point
function ellipseArc($mx=100, $my=100, $rx=20, $ry=50, $xar=0, $laflag=0, $sflag=0, 
$x=200, $y=100, $stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='M$mx $my A$rx $ry $xar $laflag $sflag $x $y' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// ellipseArcCcw($mx, $my, $rx, $ry, $xar, $x, $y, $stroke, $strokewidth, $fill)
function ellipseArcCcw($mx=100, $my=100, $rx=20, $ry=50, $xar=0, 
$x=200, $y=100, $stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='M$mx $my A$rx $ry $xar 0 0 $x $y' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// ellipseArcCw($mx, $my, $rx, $ry, $xar, $x, $y, $stroke, $strokewidth, $fill)
function ellipseArcCw($mx=100, $my=100, $rx=20, $ry=50, $xar=0, 
$x=200, $y=100, $stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='M$mx $my A$rx $ry $xar 1 1 $x $y' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// circleArcCw($mx, $my, $r, $x, $y, $stroke, $strokewidth, $fill)
//A r x-axis-rotation large-arc-flag sweep-flag x y
//$mx,$my = starting absolute curve point
//$r = circle radius 
//$xar = x-axis-rotation
//$laflag = large-arc-flag
//$sflag= 1 clockwise sweep-flag
//$x,$y = last absolute curve point
function circleArcCw($mx=100, $my=100, $r=20, $x=200, $y=100, 
$stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='M$mx $my A$r $r 0 0 1 $x $y' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// circleArcCcw($mx, $my, $r, $x, $y, $stroke, $strokewidth, $fill)
//A r x-axis-rotation large-arc-flag sweep-flag x y
//$mx,$my = starting absolute curve point (pixel)
//$r = circle radius (pixel)
//$xar = x-axis-rotation (degree)
//$laflag = large-arc-flag
//$sflag= 1 counter-clockwise sweep-flag
//$x,$y = last absolute curve point
function circleArcCcw($mx=100, $my=100, $r=20, $x=200, $y=100, 
$stroke='black', $strokewidth=1, $fill='none') {
echo "<path d='M$mx $my A$r $r 0 1 0 $x $y' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' />";
}

// circleArcCcw90($mx, $my, $r, $stroke, $strokewidth, $fill)
function circleArcCcw90($mx=100, $my=100, $r=20, $stroke='black', 
$strokewidth=1, $fill='none') {
$x=$mx+$r; $y=$my-$r;
echo "<path d='M$mx $my A$r $r 0 0 0 $x $y' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' />";
}

// circleArcCw90($mx, $my, $r, $stroke, $strokewidth, $fill)
function circleArcCw90($mx=100, $my=100, $r=20, $stroke='black', 
$strokewidth=1, $fill='none') {
$x=$mx-$r; $y=$my-$r;
echo "<path d='M$mx $my A$r $r 0 0 1 $x $y' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' />";
}

// circleArcCcw180($mx, $my, $r, $stroke, $strokewidth, $fill)
function circleArcCcw180($mx=100, $my=100, $r=20, $stroke='black', 
$strokewidth=1, $fill='none') {
$x=$mx; $y=2*$my;
echo "<path d='M$mx $my A$r $r 0 0 0 $x $y' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' />";
}

// circleArcCw180($mx, $my, $r, $stroke, $strokewidth, $fill)
function circleArcCw180($mx=100, $my=100, $r=20, $stroke='black', 
$strokewidth=1, $fill='none') {
$x=$mx; $y=2*$my;
echo "<path d='M$mx $my A$r $r 0 0 1 $x $y' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' />";
}

// arcCcwDeg($mx, $my, $r, $degree, $stroke, $strokewidth, $fill)
function arcCcwDeg($mx=100, $my=100, $r=30, $degree=45,  
$stroke='black', $strokewidth=1, $fill='none') {
$rad=deg2rad($degree); $dx=$r*sin($rad); $dy=$r*(1-cos($rad)); $x=$mx+$dx; $y=$my-$dy;
echo "<path d='M$mx $my A$r $r 0 0 0 $x $y' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' />";
}

// arcCwDeg($mx, $my, $r, $degree, $stroke, $strokewidth, $fill)
function arcCwDeg($mx=100, $my=100, $r=30, $degree=45, 
$stroke='black', $strokewidth=1, $fill='none') {
$rad=deg2rad($degree); $dx=$r*sin($rad); $dy=$r*(1-cos($rad)); $x=$mx-$dx; $y=$my-$dy;
echo "<path d='M$mx $my A$r $r 0 0 1 $x $y' stroke='$stroke' 
stroke-width='$strokewidth' fill='$fill' />";
}

// text($x, $y, $fill, $string)
function text($x=100, $y=100, $fill='black', $string='aaa') {
echo "<text x='$x' y='$y' fill='$fill' >$string";
echo "</text>";
}

// textOpen($x, $y, $fill, $string)
function textOpen($x=100, $y=100, $fill='black', $string='aaa') {
echo "<text x='$x' y='$y' fill='$fill' >$string";
}

// tspan($string)
function tspan($string='aaa') {
echo "<tspan>$string";
echo "</tspan>";
}

// tspanStyle($style, $string)
function tspanStyle($style='fill:red;font-family:Georgia;font-size:20', 
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

// textBox($x, $y, $w, $h, $r, $stroke, $strokewidth, $fill, $string)
function textBox($x=100, $y=100, $w=150, $h=50, $r=10, $stroke='black', 
	$strokewidth=1, $fill='none', $string='aaa') { $ry=$rx;
echo "<rect x='$x' y='$y' width='$w' height='$h' rx='$r' ry='$r' 
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
text($x+$w/2, $y+$h/2, $stroke, $string);
}

// textBoxStyle($x, $y, $w, $h, $r, $style, $string)
function textBoxStyle($x=100, $y=100, $w=150, $h=50, $r=10, 
$style="stroke:black;stroke-width=1;fill:none;", $string='aaa') { $ry=$rx;
echo "<rect x='$x' y='$y' width='$w' height='$h' rx='$r' ry='$r' 
style='$style' />";
textStyle($x+$w/2, $y+$h/2, $style, $string);
}

// title($string, $stroke, $strokewidth, $fill)
function title($string='TITLE', $style='stroke-width:1; stroke:blue;') {
echo "<title stroke='$stroke' stroke-width='$strokewidth' fill='$fill' >$string";
echo "</title>";
}

// titleStyle($string, $style)
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

// image($x, $y, $w, $h, $href)
function image($x=100, $y=100, $w=100, $h=100, $href='aaa.jpg') {
echo "<image x=$x y=$y width=$w height=$h href='$href' />";
}

// imageStyle($x, $y, $w, $h, $href, $style)
function imageStyle($x=100, $y=100, $w=100, $h=100, $href='aaa.jpg', $style='none') {
echo "<image x=$x y=$y width=$w height=$h href='$href' style='$style' />";
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

// arrowLeft($x1, $y1, $dx, $stroke, $strokewidth)
function arrowLeft($x1=100, $y1=100, $dx=20, $stroke='black', 
$strokewidth=1) { $n=4;
$x2=$x1+$dx; $y2=$y1; $x3=$x1+($dx/$n); $y3=$y2-($dx/$n); $x4=$x3; $y4=$y2+($dx/$n);
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' stroke='$stroke' stroke-width='$strokewidth' />";
echo "<line x1='$x1' y1='$y1' x2='$x3' y2='$y3' stroke='$stroke' stroke-width='$strokewidth' />";
echo "<line x1='$x1' y1='$y1' x2='$x4' y2='$y4' stroke='$stroke' stroke-width='$strokewidth' />";
}

// arrowRight($x1, $y1, $dx, $stroke, $strokewidth)
function arrowRight($x1=100, $y1=100, $dx=20, $stroke='black', 
$strokewidth=1) { $n=4;
$x2=$x1-$dx; $y2=$y1; $x3=$x1-($dx/$n); $y3=$y2-($dx/$n); $x4=$x3; $y4=$y2+($dx/$n);
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' stroke='$stroke' stroke-width='$strokewidth' />";
echo "<line x1='$x1' y1='$y1' x2='$x3' y2='$y3' stroke='$stroke' stroke-width='$strokewidth' />";
echo "<line x1='$x1' y1='$y1' x2='$x4' y2='$y4' stroke='$stroke' stroke-width='$strokewidth' />";
}

// arrowUp($x1, $y1, $dx, $stroke, $strokewidth)
function arrowUp($x1=100, $y1=100, $dx=20, $stroke='black', 
$strokewidth=1) { $n=4;
$x2=$x1; $y2=$y1+$dx; $x3=$x1-($dx/$n); $y3=$y1+($dx/$n); $x4=$x1+($dx/$n); $y4=$y3;
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' stroke='$stroke' stroke-width='$strokewidth' />";
echo "<line x1='$x1' y1='$y1' x2='$x3' y2='$y3' stroke='$stroke' stroke-width='$strokewidth' />";
echo "<line x1='$x1' y1='$y1' x2='$x4' y2='$y4' stroke='$stroke' stroke-width='$strokewidth' />";
}

// arrowDown($x1, $y1, $dx, $stroke, $strokewidth)
function arrowDown($x1=100, $y1=100, $dx=20, $stroke='black', 
$strokewidth=1) { $n=4;
$x2=$x1; $y2=$y1-$dx; $x3=$x1-($dx/$n); $y3=$y1-($dx/$n); $x4=$x1+($dx/$n); $y4=$y3;
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' stroke='$stroke' stroke-width='$strokewidth' />";
echo "<line x1='$x1' y1='$y1' x2='$x3' y2='$y3' stroke='$stroke' stroke-width='$strokewidth' />";
echo "<line x1='$x1' y1='$y1' x2='$x4' y2='$y4' stroke='$stroke' stroke-width='$strokewidth' />";
}

// quoteH($x1, $y1, $x2, $dx, $stroke, $strokewidth)
function quoteH($x1=100, $y1=100, $x2=200, $dx=20, $stroke='black', 
$strokewidth=1) { $y2=$y1; 
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' stroke='$stroke' stroke-width='$strokewidth' />";
arrowLeft($x1, $y1, $dx, $stroke, $strokewidth);
arrowRight($x2, $y2, $dx, $stroke, $strokewidth);
}

// quoteV($x1, $y1, $x2, $dx, $stroke, $strokewidth)
function quoteV($x1=100, $y1=100, $y2=200, $dx=20, $stroke='black', 
$strokewidth=1) { $x2=$x1; 
echo "<line x1='$x1' y1='$y1' x2='$x2' y2='$y2' stroke='$stroke' stroke-width='$strokewidth' />";
arrowUp($x1, $y1, $dx, $stroke, $strokewidth);
arrowDown($x2, $y2, $dx, $stroke, $strokewidth);
}

// lineIntersection($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4)
function lineIntersection($x1=50, $y1=100, $x2=100, $y2=50, $x3=50, $y3=50, 
	$x4=100, $y4=100) {
$den = (($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
$xi=(($x1*$y2-$y1*$x2)*($x3-$x4)-($x1-$x2)*($x3*$y4-$y3*$x4))/$den;
$yi=(($x1*$y2-$y1*$x2)*($x3-$x4)-($y1-$y2)*($x3*$y4-$y3*$x4))/$den;
//line($x1, $y1, $x2, $y2, $stroke='green', $strokewidth=2);
//line($x3, $y3, $x4, $y4, $stroke='red', $strokewidth=2);
point($xi, $yi, $r=2);
}

// lineIntersectionPoint($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4, $r) ???
function lineIntersectionPoint($x1=50, $y1=100, $x2=100, $y2=50, $x3=50, $y3=50, 
	$x4=100, $y4=100, $r=2) {
$den = (($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4));
$xi=(($x1*$y2-$y1*$x2)*($x3-$x4)-($x1-$x2)*($x3*$y4-$y3*$x4))/$den;
$yi=(($x1*$y2-$y1*$x2)*($x3-$x4)-($y1-$y2)*($x3*$y4-$y3*$x4))/$den;
line($x1, $y1, $x2, $y2, $stroke='green', $strokewidth=2);
line($x3, $y3, $x4, $y4, $stroke='red', $strokewidth=2);
point(abs($xi), abs($yi), $r);
}

// lineParallel($x1, $y1, $x2, $y2, $x3, $y3, $x4, $stroke, $strokewidth)
function lineParallel($x1=50, $y1=100, $x2=100, $y2=50, $x3=50, $y3=50, $x4=100,
$stroke='black', $strokewidth=1) {
$m = ($y2-$y1)/($x2-$x1); //$x4=$x2;
$y4=($m*($x4-$x3))+$y3;
//line($x1, $y1, $x2, $y2, $stroke='green', $strokewidth=2);
line($x3, $y3, $x4, $y4, $stroke, $strokewidth);
//point($xi, $yi, $r=2);
}

// linePerpendicular($x1, $y1, $x2, $y2, $x3, $y3, $x4, $stroke, $strokewidth)???
function linePerpendicular($x1=50, $y1=100, $x2=100, $y2=50, $x3=50, $y3=50, 
	$x4=80, $stroke='black', $strokewidth=1) {
$m = ($y2-$y1)/($x2-$x1);
$y4=(-$m*($x4-$x3))+$y3;
//line($x1, $y1, $x2, $y2, $stroke='green', $strokewidth=2);
line($x3, $y3, $x4, $y4, $stroke, $strokewidth);
//point($x4, $y4, $r=2);
}

// lineSlope($x1, $y1, $x2, $m, $stroke, $strokewidth)
function lineSlope($x1=50, $y1=100, $x2=200, $m=0,
	$stroke='black', $strokewidth=1) {
$y2=$m*($x2-$x1)+$y1;
point($x1,$y1);
line($x1, $y1, $x2, $y2, $stroke, $strokewidth);
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

// hexagonCentered($cx, $cy, $r, $stroke, $strokewidth, $fill)
function hexagonCentered($cx=100, $cy=100, $r=30, $stroke='black', 
$strokewidth=1, $fill='none') { $n=6;
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
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// gridH($x1, $y1, $x2, $dy, $rows, $stroke, $strokewidth)
function gridH($x1=0, $y1=0, $x2=500, $dy=10, $rows=10, $stroke='grey', 
$strokewidth=0.5) {
for ($i = 0; $i <= $rows; $i++) { $xi=$x1; $yi=$dy*$i;
echo lineH($xi,$yi,$x2,$stroke,$strokewidth);
	}
}

// gridV($x1, $y1, $y2, $dx, $cols, $stroke, $strokewidth)
function gridV($x1=0, $y1=0, $y2=500, $dx=10, $cols=10, $stroke='grey', 
$strokewidth=0.5) {
for ($i = 0; $i <= $cols; $i++) { $yi=$y1; $xi=$dx*$i;
echo lineV($xi,$yi,$y2,$stroke,$strokewidth);
	}
}

// grid($x1, $y1, $x2, $y2, $dx, $dy, $rows, $cols, $stroke, $strokewidth)
function grid($x1=0, $y1=0, $x2=500, $y2=500, $dx=10, $dy=10, 
$rows=50, $cols=50, $stroke='grey', $strokewidth=0.5) {
gOpen('grid');
gridH($x1, $y1, $x2, $dy, $rows);
gridV($x1, $y1, $y2, $dx, $cols);
gClose();
}

// polarRhombus($cx, $cy, $r, $stroke, $strokewidth, $fill)
function polarRhombus($cx=100, $cy=100, $r=50, $stroke='black', 
$strokewidth=1, $fill='none') { $alpha=2*M_PI/4;
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
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// polarPentagon($cx, $cy, $r, $stroke, $strokewidth, $fill)
function polarPentagon($cx=100, $cy=100, $r=50, $stroke='black', 
$strokewidth=1, $fill='none') { $alpha=2*M_PI/5;
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
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// polarHexagon($cx, $cy, $r, $stroke, $strokewidth, $fill)
function polarHexagon($cx=100, $cy=100, $r=50, $stroke='black', 
$strokewidth=1, $fill='none') { $alpha=2*M_PI/6;
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
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// polarHeptagon($cx, $cy, $r, $stroke, $strokewidth, $fill)
function polarHeptagon($cx=100, $cy=100, $r=50, $stroke='black', 
$strokewidth=1, $fill='none') { $alpha=2*M_PI/7;
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
stroke='$stroke' stroke-width='$strokewidth' fill='$fill' />";
}

// polarLine($cx, $cy, $r, $alpha, $stroke, $strokewidth)
function polarLine($cx=100, $cy=100, $r=50, $alpha=45, $stroke='black', 
$strokewidth=1) {
$array=returnCartesian($r,$alpha);
$x = $array[0]; $y = $array[1];
//point($cx,$cy);
$x1=$cx+$x; $y1=$cy+$y;
//point($x1,$y1);
line($cx,$cy,$x1,$y1,$stroke,$strokewidth);
}

// polarLineN($cx, $cy, $r, $n, $alpha, $stroke, $strokewidth)
function polarLineN($cx=100, $cy=100, $r=50, $n=6, $alpha=45, $stroke='black', 
$strokewidth=1) {
for ($i = 1; $i <= $n; $i++) {
$array=returnCartesian($r,$i*$alpha);
$x = $array[0]; $y = $array[1];
//point($cx,$cy);
$x1=$cx+$x; $y1=$cy+$y;
//point($x1,$y1);
line($cx,$cy,$x1,$y1,$stroke,$strokewidth);
	}
}

// polarPolygonN($cx, $cy, $r, $n, $alpha, $stroke, $strokewidth) ???
function polarPolygonN($cx=100, $cy=100, $r=50, $n=4, $alpha=15, $stroke='black', 
$strokewidth=1) {
for ($i = 0; $i <= $n-1; $i++) { $j=$i+1;
$arr1=returnCartesian($r,$i*$alpha);
$arr2=returnCartesian($r,$j*$alpha);
$x01 = $arr1[0]; $y01 = $arr1[1];
$x02 = $arr2[0]; $y02 = $arr2[1];
point($cx,$cy);
$x1=$cx+$x01; $y1=$cy+$y01;
$x2=$cx+$x02; $y2=$cy+$y02;
//point($x1,$y1);
line($x1,$y1,$x2,$y2,$stroke,$strokewidth);
	}
}

// polarOctagon($cx, $cy, $r, $stroke, $strokewidth)
function polarOctagon($cx=100, $cy=100, $r=50, $stroke='black', 
$strokewidth=1) { $alpha=2*M_PI/8;
for ($i = 0; $i <= 7; $i++) { $j=$i+1;
$arr1=returnCartesian($r,$i*$alpha);
$arr2=returnCartesian($r,$j*$alpha);
$x01 = $arr1[0]; $y01 = $arr1[1];
$x02 = $arr2[0]; $y02 = $arr2[1];
point($cx,$cy);
$x1=$cx+$x01; $y1=$cy+$y01;
$x2=$cx+$x02; $y2=$cy+$y02;
//point($x1,$y1);
line($x1,$y1,$x2,$y2,$stroke,$strokewidth);
	}
}

// polarPointN($cx, $cy, $r, $n, $alpha, $stroke, $strokewidth)
function polarPointN($cx=100, $cy=100, $r=50, $n=4, $alpha=45, 
$stroke='black', $strokewidth=1) {
for ($i = 0; $i <= $n-1; $i++) {
$array=returnCartesian($r,$i*$alpha);
$x = $array[0]; $y = $array[1];
point($cx,$cy);
$x1=$cx+$x; $y1=$cy+$y;
point($x1,$y1,1,$stroke,$strokewidth);
//line($cx,$cy,$x1,$y1);
	}
}

// circleArrayH($cx, $cy, $r, $dx, $cols, $stroke, $strokewidth, $fill)
function circleArrayH($cx=100, $cy=100, $r=10, $dx=25, $cols=6, $stroke='black', 
$strokewidth=1, $fill='none') {
for ($i = 0; $i < $cols; $i++) { 
$xi=$cx+$dx*$i; $yi=$cy;
echo circle($xi, $yi, $r, $stroke, $strokewidth, $fill);
	}
}

// circleArrayV($cx, $cy, $r, $dy, $rows, $stroke, $strokewidth, $fill)
function circleArrayV($cx=100, $cy=100, $r=10, $dy=20, $rows=10, $stroke='black', 
$strokewidth=1, $fill='none') {
for ($i = 0; $i < $rows; $i++) { 
$xi=$cx; $yi=$cy+$dy*$i;
echo circle($xi, $yi, $r, $stroke, $strokewidth, $fill);
	}
}

// circleArrayHV($cx, $cy, $r, $dx, $cols, $stroke, $strokewidth, $fill)
function circleArrayHV($cx=100, $cy=100, $r=10, $dx=20, $cols=10, $stroke='black', 
$strokewidth=1, $fill='none') {
for ($i = 0; $i < $cols; $i++) { 
$xi=$cx+$dx*$i; $yi=$cy;
circleArrayV($xi, $yi, $r, $dx, $cols, $stroke, $strokewidth, $fill);
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
