<?php

// rectRotDegArray($x1, $y1, $w, $h, $deg, $style)
//rect rotation around the point (x1,y1)
//(x1,y1) = initial top left corner
//w = rect width
//h = rect height
//return array(xi,yi) = rect rotated points coords
function rectRotDegArray($x1=100, $y1=100, $w=100, $h=50, $deg=45) {
$rad=deg2rad($deg);
$x2=$x1+$w*cos($rad); $y2=$y1-$w*sin($rad);
//point($x1,$y1); point($x2,$y2);
$x3=$x2+$h*sin($rad); $y3=$y2+$h*cos($rad);
$x4=$x1+$h*sin($rad); $y4=$y1+$h*cos($rad);
//point($x3,$y3); point($x4,$y4);
//echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3 $x4,$y4' style='$style' />";
return array($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4);
}

// returnCartesian($r, $alpha)
//(r,alpha) = polar coordinates
//(x,y) = cartesian coordinates
function returnCartesian($r, $alpha) { 
    $x = $r*cos($alpha);
    $y = $r*sin($alpha);  
    return array($x,$y);
}

// returnPolar($x, $y)
//(x,y) = cartesian  oordinates
//(r,alpha) = polar coordinates
function returnPolar($x, $y) { 
    $r = sqrt($x*$x + $y*$y);
    $alpha = atan($y/$x);  
    return array($r,$alpha);
}

// circlesIntersection($cx1, $cy1, $r1, $cx2, $cy2, $r2)
//https://stackoverflow.com/questions/3349125/circle-circle-intersection-points
//(cxi,cyi) = center coordinates of circles 
//ri = radius of circles
//array(x3,y3,x4,y4) = 2 circle intersections coords
function circlesIntersection($cx1=100, $cy1=100, $r1=40, 
$cx2=150, $cy2=50, $r2=40) {
//circle($cx1,$cy1,$r1);
//circle($cx2,$cy2,$r2);
//echo $cx1;
$d=sqrt( ($cx2-$cx1)**2 + ($cy2-$cy1)**2 );
//echo "d=$d</br>";
$a=($r1**2 - $r2**2 + $d**2)/(2*$d);
//echo "a=$a</br>";
$h=sqrt( $r1**2 - $a**2 );
//echo "h=$h</br>";
$x2 = $cx1 + $a*($cx2-$cx1)/$d;
$y2 = $cy1 + $a*($cy2-$cy1)/$d;
//echo "p2=($x2,$y2)</br>";
$x3 = $x2 + $h*($cy2 - $cy1)/$d;
$y3 = $y2 - $h*($cx2 - $cx1)/$d;
//echo "p3=($x3,$y3)</br>";
$x4 = $x2 - $h*($cy2 - $cy1)/$d;
$y4 = $y2 + $h*($cx2 - $cx1)/$d;
//echo "p4=($x4,$y4)</br>";
//circle($x3,$y3,3);
//circle($x4,$y4,3);
return array($x3,$y3,$x4,$y4);
}

// tangentsCircleV($cx, $cy, $h, $r)
//https://en.wikipedia.org/wiki/Tangent_lines_to_circles
//return the 2 points of tangent lines to circle, given the circle(cx,cy,r),
//and the vertical height h: 
function tangentsCircleV($cx=200, $cy=200, $h=100, $r=30) {
$xh=$cx; $yh=$cy-$h; //external point coords (xh,yh)
//point($cx,$cy,2,'red'); point($xh,$yh,2,'red');
//line($cx,$cy,$xh,$yh); circle($cx,$cy,$r);
//center of second circle
$rm = $h/2; 
$cmx = $cx;
$cmy = $cy-$h/2; //point($cmx,$cmy,2,'green');
//circle($cmx,$cmy,$rm);
$points = circlesIntersection($cx, $cy, $r, $cmx, $cmy, $rm);
//$points = array($x1,$y1,$x2,$y2);
$x1=$points[0];
$y1=$points[1];
$x2=$points[2];
$y2=$points[3];
//circle($x1,$y1,3); circle($x2,$y2,3);
//line($xh,$yh,$x1,$y1); line($xh,$yh,$x2,$y2);
return array($x1,$y1,$x2,$y2);
}

// tangentsCircle($x1, $y1, $a, $r)
//https://en.wikipedia.org/wiki/Tangent_lines_to_circles
//(x1,y1) = circle center coords
//r = circle radius
//a = ???
function tangentsCircle($x1=100, $y1=200, $a=100, $r=30) {
$x2=$x1+$a; $y2=$y1-$a;
//line($x1,$y1,$x2,$y2); circle($x2,$y2,$r);
$d=sqrt( ($x2-$x1)**2 + ($y2-$y1)**2 );
$rm = $d/2; 
$cmx = $x1+$a/2;
$cmy = $y1-$a/2;
//circle($cmx,$cmy,$rm);
$points = circlesIntersection($x2, $y2, $r, $cmx, $cmy, $rm);
//$points = array($x3,$y3,$x4,$y4);
$x3=$points[0];
$y3=$points[1];
$x4=$points[2];
$y4=$points[3];
//circle($x3,$y3,3); circle($x4,$y4,3);
//line($x1,$y1,$x3,$y3); line($x1,$y1,$x4,$y4);
return array($x3,$y3,$x4,$y4);
}

// chordLengthCircleRad($cx, $cy, $r, $rad)
//https://study.com/academy/lesson/chord-of-a-circle-definition-formula.html
//(cx,cy) = center circle coords
//r = circle radius
//rad = chord angle in radiants
//chord = chord lenght
function chordLengthCircleRad($cx=100, $cy=100, $r=50, $rad=M_PI/4) {
$chord=2*$r*sin($rad/2);
return $chord;
}

// chordLengthCircleDeg($cx, $cy, $r, $rad)
//https://study.com/academy/lesson/chord-of-a-circle-definition-formula.html
//(cx,cy) = center circle coords
//r = circle radius
//deg = chord angle in degrees
//rad = chord angle in radiants
//chord = chord lenght
function chordLengthCircleDeg($cx=100, $cy=100, $r=50, $deg=45) {
$rad=deg2rad($deg);
$chord=2*$r*sin($rad/2);
return $chord;
}

// chordRadAngleCircle($cx, $cy, $r, $chord)
//https://study.com/academy/lesson/chord-of-a-circle-definition-formula.html
function chordRadAngleCircle($cx=100, $cy=100, $r=50, $chord=50) {
$d=2*$r;
$rad = 2*(asin($chord/$d) );
return $rad;
}

// chordDegAngleCircle($cx, $cy, $r, $chord)
//https://study.com/academy/lesson/chord-of-a-circle-definition-formula.html
function chordDegAngleCircle($cx=100, $cy=100, $r=50, $chord=50) {
$d=2*$r;
$alpharad = 2*( asin($chord/$d) );
$alphadeg=rad2deg($alpharad);
return $alphadeg;
}

// centerRect($x1, $y1, $w, $h)
function centerRect($x1=100, $y1=100, $w=100, $h=50) {
$cx = $x1 + $w/2;
$cy = $y1 + $h/2;
//echo "cx,cy=".$cx.",".$cy;
return array($cx,$cy);
}

// lineLineIntersection($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4)
//https://en.m.wikipedia.org/wiki/Line%E2%80%93line_intersection
//(x1,y1,x2,y2) = first line coords
//(x3,y3,x4,y4) = second line coords
//t = determinant number
//(x,y) = intersection coords
function lineLineIntersection($x1=100, $y1=120, $x2=180, $y2=100, 
$x3=100, $y3=100, $x4=200, $y4=100) {
$tnum=($x1-$x3)*($y3-$y4)-($y1-$y3)*($x3-$x4);
$tden=($x1-$x2)*($y3-$y4)-($y1-$y2)*($x3-$x4);
$t=$tnum/$tden;
$x=$x1+$t*($x2-$x1); $y=$y1+$t*($y2-$y1);
return array($x,$y);
}

// lineMidPoint($x1, $y1, $x2, $y2) 
//(x1,y1) = left point of line
//(x2,y2) = right point of line
//x2>x1
function lineMidPoint($x1=100, $y1=100, $x2=200, $y2=200) {
$xm=$x1+abs($x2-$x1)/2; 
if ($y2>$y1) {$ym=$y1+abs($y2-$y1)/2;}
else {$ym=$y1-abs($y2-$y1)/2;}
return array($xm,$ym);
}

// lineMidPointDown($x1, $y1, $x2, $y2) 
//(x1,y1) = left point of line
//(x2,y2) = right point of line
//y2>y1 and x2>x1
function lineMidPointDown($x1=100, $y1=100, $x2=200, $y2=200) {
$xm=$x1+abs($x2-$x1)/2; $ym=$y1+abs($y2-$y1)/2;
return array($xm,$ym);
}

// lineMidPointUp($x1, $y1, $x2, $y2) 
//(x1,y1) = left point of line
//(x2,y2) = right point of line
//y2<y1 and x2>x1
function lineMidPointUp($x1=100, $y1=100, $x2=200, $y2=50) {
$xm=$x1+abs($x2-$x1)/2; $ym=$y1-abs($y2-$y1)/2;
return array($xm,$ym);
}

//(x0,y0) = starting point
//(x1,y1) = control point
//(x2,y2) = end point
// quadraticBezier($x0,$y0,$x1,$y1,$x2,$y2,$t)
function quadraticBezier($x0=100, $y0=100, $x1=150, $y1=80, 
$x2=200, $y2=100, $t=0.5) {
$x = (1-$t)**2*$x0 + 2*(1-$t)*$t*$x1 + $t*$t*$x2;
$y = (1-$t)**2*$y0 + 2*(1-$t)*$t*$y1 + $t*$t*$y2;
//echo $x.','.$y;
$bezier = array($x,$y);
return $bezier;
}

// deriv1qBezier($x0,$y0,$x1,$y1,$x2,$y2,$t)
function deriv1qBezier($x0=100, $y0=100, $x1=150, $y1=80, 
$x2=200, $y2=100, $t=0.5) {
$x = 2*(1-$t)*($x1-$x0) + 2*$t*($x2-$x1);
$y = 2*(1-$t)*($y1-$y0) + 2*$t*($y2-$y1);
//echo $x.','.$y;
$dBezier = array($x,$y);
return $dBezier;
}

// deriv2qBezier($x0,$y0,$x1,$y1,$x2,$y2,$t)
function deriv2qBezier($x0=100, $y0=100, $x1=150, $y1=80, 
$x2=200, $y2=100, $t=0.5) {
$x = 2*($x2-2*$x1+$x0);
$y = 2*($y2-2*$y1+$y0);
//echo $x.','.$y;
$ddBezier = array($x,$y);
return $ddBezier;
}

/*
$point = quadraticBezier();
$x=$point[0]; $y=$point[1];
echo $x.','.$y;
echo "<hr>";
$ddpoint = deriv2qBezier();
$ddx=$point[0]; $ddy=$point[1];
echo $ddx.','.$ddy;


$points=linesIntersection();
$x1=$points[0]; $y1=$points[1];
//echo $x1.','.$y1;

$points=circlesIntersection();
$x1=$points[0]; $y1=$points[1];
echo $x1.','.$y1;
*/
//echo chordDegAngleCircle();

?>