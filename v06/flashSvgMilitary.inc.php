<?php

// box($x1, $y1, $x2, $y2, $x3, $y3, $x4, $y4, $a, $style)
//Points 1,2,3,4 of box base in counterclockwise sense
//(x1,y1) = most left first point
//(x2,y2) = bottom point
//(x3,y3) = most right point
//(x4,y4) = top point
//a = height of box
function box($x1=100, $y1=100, $x2=150, $y2=150, $x3=200,
   $y3=100, $x4=180, $y4=80, $a=50, 
   $style='stroke:black;stroke-width:1;fill:lightgrey;') {
$x1a=$x1; $y1a=$y1-$a;
$x4a=$x4; $y4a=$y4-$a;
echo "<polygon points='$x1,$y1 $x4,$y4 $x4a,$y4a $x1a,$y1a' 
style='$style' />";
$x4a=$x4; $y4a=$y4-$a;
$x3a=$x3; $y3a=$y3-$a;
echo "<polygon points='$x4,$y4 $x3,$y3 $x3a,$y3a $x4a,$y4a' 
style='$style' />";
$x1a=$x1; $y1a=$y1-$a;
$x2a=$x2; $y2a=$y2-$a;
echo "<polygon points='$x1,$y1 $x2,$y2 $x2a,$y2a $x1a,$y1a' 
style='$style' />";
$x3a=$x3; $y3a=$y3-$a;
$x4a=$x4; $y4a=$y4-$a;
echo "<polygon points='$x2,$y2 $x3,$y3 $x3a,$y3a $x2a,$y2a' 
style='$style' />";
echo "<polygon points='$x1a,$y1a $x2a,$y2a $x3a,$y3a $x4a,$y4a' 
style='$style' />";
}

// boxRectRotDeg($x1, $y1, $w, $h, $deg, $a, $style)
//(x1,y1) = base rect top left point coords
//w = base rect width; h = base rect height
//deg = rotation angle around (x1,y1) in degrees
//a = box height
//rad = rotation angle around (x1,y1) in rad
//(xi,yi) = rotated rect points coords
//(xia,yia) = rotated rect point at height a
//return array($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4,$x1a,$y1a,$x2a,$y2a,$x3a,$y3a,$x4a,$y4a);
function boxRectRotDeg($x1=100, $y1=100, $w=50, $h=30, $deg=30, 
$a=20, $style='stroke:black;stroke-width=1;fill:lightgrey;') {
if ($a<=0) {exit();}
else {
$rad=deg2rad($deg);
$x2=$x1+$w*cos($rad); $y2=$y1-$w*sin($rad);
$x3=$x2+$h*sin($rad); $y3=$y2+$h*cos($rad);
$x4=$x1+$h*sin($rad); $y4=$y1+$h*cos($rad);
echo "<polygon points='$x1,$y1 $x2,$y2 $x3,$y3 $x4,$y4' 
style='$style' />";
$x1a=$x1; $y1a=$y1-$a;
$x2a=$x2; $y2a=$y2-$a;
$x3a=$x3; $y3a=$y3-$a;
$x4a=$x4; $y4a=$y4-$a;
if ($deg>0 and $deg<=90) {
echo "<polygon points='$x1,$y1 $x1a,$y1a $x2a,$y2a $x2,$y2' style='$style' />"; //1
echo "<polygon points='$x2,$y2 $x2a,$y2a $x3a,$y3a $x3,$y3' style='$style' />"; //2
echo "<polygon points='$x1,$y1 $x1a,$y1a $x4a,$y4a $x4,$y4' style='$style' />"; //3
echo "<polygon points='$x4,$y4 $x4a,$y4a $x3a,$y3a $x3,$y3' style='$style' />"; //4
echo "<polygon points='$x1a,$y1a $x2a,$y2a $x3a,$y3a $x4a,$y4a' style='$style' />"; //5
	}
    elseif ($deg>90 and $deg<=180) {
    echo "<polygon points='$x2,$y2 $x2a,$y2a $x3a,$y3a $x3,$y3' style='$style' />"; //2
echo "<polygon points='$x4,$y4 $x4a,$y4a $x3a,$y3a $x3,$y3' style='$style' />"; //4
echo "<polygon points='$x1,$y1 $x1a,$y1a $x4a,$y4a $x4,$y4' style='$style' />"; //3
echo "<polygon points='$x1,$y1 $x1a,$y1a $x2a,$y2a $x2,$y2' style='$style' />"; //1
echo "<polygon points='$x1a,$y1a $x2a,$y2a $x3a,$y3a $x4a,$y4a' style='$style' />"; //5
	}
    elseif ($deg<0 and $deg>=-90) {  
echo "<polygon points='$x1,$y1 $x1a,$y1a $x2a,$y2a $x2,$y2' style='$style' />"; //1
echo "<polygon points='$x1,$y1 $x1a,$y1a $x4a,$y4a $x4,$y4' style='$style' />"; //3
echo "<polygon points='$x4,$y4 $x4a,$y4a $x3a,$y3a $x3,$y3' style='$style' />"; //4
echo "<polygon points='$x2,$y2 $x2a,$y2a $x3a,$y3a $x3,$y3' style='$style' />"; //2
echo "<polygon points='$x1a,$y1a $x2a,$y2a $x3a,$y3a $x4a,$y4a' style='$style' />"; //5
	}
    elseif ($deg<-90 and $deg>=-180) {  
echo "<polygon points='$x4,$y4 $x4a,$y4a $x3a,$y3a $x3,$y3' style='$style' />"; //4
echo "<polygon points='$x1,$y1 $x1a,$y1a $x4a,$y4a $x4,$y4' style='$style' />"; //3
echo "<polygon points='$x2,$y2 $x2a,$y2a $x3a,$y3a $x3,$y3' style='$style' />"; //2
echo "<polygon points='$x1,$y1 $x1a,$y1a $x2a,$y2a $x2,$y2' style='$style' />"; //1
echo "<polygon points='$x1a,$y1a $x2a,$y2a $x3a,$y3a $x4a,$y4a' style='$style' />"; //5
	}
return array($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4,$x1a,$y1a,$x2a,$y2a,$x3a,$y3a,$x4a,$y4a);
} }

// circleZ($cx, $cy, $cz, $r, $style)
//(cx,cy,cz) = center of circle
function circleZ($cx=100, $cy=100, $cz=20, $r=25,  
$style='stroke:black;stroke-width:1;fill:lightgrey') {
$cx1=$cx; $cy1=$cy-$cz;
echo "<circle cx='$cx1' cy='$cy1' r='$r' style='$style' />";
}

// cylinder($cx, $cy, $r, $a, $style)
//(cx,cy) = center of base circle
//(cxa,cya) = center of top circle
//r = radius; a = height of cylinder
//(x1,y1) = bottom-left point of cylinder
//(x2,y2) = bottom-right point
//(x3,y3) = top-right point
//(x4,y4) = top-left point
function cylinder($cx=125, $cy=150, $r=25, $a=50,  
$style='stroke:black;stroke-width=1;fill:lightgrey;') {
$cxa=$cx; $cya=$cy-$a;
$x1=$cx-$r; $y1=$cy;
$x2=$cx+$r; $y2=$cy;
$x3=$x2; $y3=$y2-$a;
$x4=$x1; $y4=$y3;
circle($cx,$cy,$r,$style);
circle($cxa,$cya,$r,$style);
echo "<path d='M $x1,$y1 A $r $r 0 1 0 $x2,$y2
			   V $x3,$y3 A $r $r 0 1 1 $x4,$y4
               V $x1,$y1' style='$style' />";
}

// coneTrunk($cx, $cy, $r, $ra, $a, $style)
//(cx,cy) = center of base circle
//(cxa,cya) = center of top circle
//r = base radius; ra = top radius; a = height of coneTrunk
//(x1,y1) = bottom-left point of cylinder
//(x2,y2) = bottom-right point
//(x3,y3) = top-left point
//(x4,y4) = top-right point
function coneTrunk($cx=125, $cy=150, $r=25, $ra=15, $a=50,  
$style='stroke:black;stroke-width=1;fill:lightgrey;') {
$cxa=$cx; $cya=$cy-$a;
$x1=$cx-$r; $y1=$cy;
$x2=$cx+$r; $y2=$cy;
$x3=$cxa+$ra; $y3=$cya;
$x4=$cxa-$ra; $y4=$cya;
circle($cx,$cy,$r,$style);
circle($cxa,$cya,$ra,$style);
echo "<path d='M $x1,$y1 A $r $r 0 1 0 $x2,$y2
			   L $x3,$y3 A $ra $ra 0 1 1 $x4,$y4
               L $x1,$y1' style='$style' />";
}

// cone($cx, $cy, $r, $a, $style)
//(cx,cy) = center of base circle
//(cxa,cya) = center of top circle
//r = base radius; a = height of cone
//(x1,y1) = bottom-left point of cone
//(x2,y2) = bottom-right point of cone
//(x3,y3) = top point
function cone($cx=125, $cy=150, $r=25, $a=50,  
$style='stroke:black;stroke-width=1;fill:lightgrey;') {
$cxa=$cx; $cya=$cy-$a;
$x1=$cx-$r; $y1=$cy;
$x2=$cx+$r; $y2=$cy;
$x3=$cxa; $y3=$cya;
circle($cx,$cy,$r,$style);
echo "<path d='M $x1,$y1 A $r $r 0 1 0 $x2,$y2
			   L $x3,$y3 
               L $x1,$y1' style='$style' />";
}

// crossZ($cx, $cy, $cz, $d, $style)
//d = cross width/height
//(cx,cy) = cross center
//(x1,y1) = left point
//(x2,y2) = right point
//(x3,y3) = top point
//(x4,y4) = bottom point
function crossZ($cx=50, $cy=50, $cz=20, $d=20, 
$style='stroke:black;stroke-width:1') {
$x1=$cx-$d/2; $y1=$cy;
$x1z=$x1; $y1z=$cy-$cz;
$x2=$cx+$d/2; $y2=$cy; 
$x2z=$x2; $y2z=$y2-$cz; 
$x3=$cx; $y3=$cy-$d/2; 
$x3z=$cx; $y3z=$y3-$cz; 
$x4=$cx; $y4=$cy+$d/2;
$x4z=$x4; $y4z=$y4-$cz;
line($x1z, $y1z, $x2z, $y2z, $style);
line($x3z, $y3z, $x4z, $y4z, $style);
}

// houseRotDeg($x1, $y1, $w, $h, $deg, $a, $style)
//(xi,yi) = rotated base rectangle points coords
//(xia,yia) = rotated top rectangle points coords
//(x1b,y1b) = top-left roof point coords
//(x2b,y2b) = top-right roof point coords
function houseRotDeg($x1=100, $y1=100, $w=50, $h=30, $deg=30, 
$a=20, $style='stroke:black;stroke-width=1;fill:lightgrey;') {
$arr=boxRectRotDeg($x1,$y1,$w,$h,$deg,$a,$style);
$x2a=$arr[10]; $y2a=$arr[11];
$x3a=$arr[12]; $y3a=$arr[13];
$x1a=$arr[8]; $y1a=$arr[9];
$x4a=$arr[14]; $y4a=$arr[15];
if ($deg<0) {
$arrm1=lineMidPoint($x4a,$y4a,$x1a,$y1a);
$arrm2=lineMidPoint($x3a,$y3a,$x2a,$y2a);
   }
   else {
$arrm1=lineMidPoint($x1a,$y1a,$x4a,$y4a);
$arrm2=lineMidPoint($x2a,$y2a,$x3a,$y3a);
   }
//point($arrm1[0],$arrm1[1]);
//point($arrm2[0],$arrm2[1]);
$x1b=$arrm1[0]; $y1b=$arrm1[1]-$h/2;
$x2b=$arrm2[0]; $y2b=$arrm2[1]-$h/2;
echo "<polygon points='$x1a,$y1a $x4a,$y4a $x1b,$y1b' style='$style' />";
echo "<polygon points='$x2a,$y2a $x3a,$y3a $x2b,$y2b' style='$style' />";
echo "<polygon points='$x1a,$y1a $x1b,$y1b $x2b,$y2b $x2a,$y2a' style='$style' />";
echo "<polygon points='$x4a,$y4a $x1b,$y1b $x2b,$y2b $x3a,$y3a' style='$style' />";
}

// lineZ($x1, $y1, $z1, $x2, $y2, $z2, $style)
//(xi,yi,zi) = line 2 points 3d coords
//(xiz, yiz) = line 2 points 2d coords
//return array(xiz,yiz)
function lineZ($x1=50, $y1=50, $z1=20, $x2=100, $y2=100, $z2=30, 
$style='stroke:black;stroke-width:1;') {
$x1z=$x1; $y1z=$y1-$z1;
$x2z=$x2; $y2z=$y2-$z2;
echo "<line x1='$x1z' y1='$y1z' x2='$x2z' y2='$y2z' style='$style' />";
return array($x1z,$y1z);
}

// rectZ($x, $y, $z, $w, $h, $style)
//(x,y,z) = 3d top left position of rectangle
//w = rectangle width
//h = rectangle height
//(x1,y1) = 2d top left position of rectangle
function rectZ($x=100, $y=100, $z=0, $w=100, $h=50, 
$style='stroke:black;stroke-width:1;fill:lightgrey') {
$x1=$x; $y1=$y-$z;
echo "<rect x='$x1' y='$y1' width='$w' height='$h' style='$style' />";
}

// rectRotDegZ($x, $y, $z, $w, $h, $deg, $style)
//(x,y,z) = initial top left corner
//w = width; h = height; deg = (+)counter-clokwise rotation in degrees
function rectRotDegZ($x1=100, $y1=100, $z1=20, $w=100, $h=50, $deg=45, 
$style='stroke:black;stroke-width:1;fill:lightgrey') {
$rad=deg2rad($deg);
$x1z=$x1; $y1z=$y1-$z1;
$x2=$x1+$w*cos($rad); $y2=$y1-$w*sin($rad);
$x2z=$x2; $y2z=$y2-$z1; 
$x3=$x2+$h*sin($rad); $y3=$y2+$h*cos($rad);
$x3z=$x3; $y3z=$y3-$z1;
$x4=$x1+$h*sin($rad); $y4=$y1+$h*cos($rad);
$x4z=$x4; $y4z=$y4-$z1;
echo "<polygon points='$x1z,$y1z $x2z,$y2z $x3z,$y3z $x4z,$y4z' style='$style' />";
}

// polygonZ($points, $style) ???

// polylineZ3P($x1,$y1,$z1,$x2,$y2,$z2,$x3,$y3,$z3,$style)
//(xi,yi,zi) = 3 points in 3d coordinates
//(xiz,yiz) = 3 points in 2d coordinates
function polylineZ3P($x1=100,$y1=50,$z1=0,$x2=200,$y2=150,$z2=0,
$x3=300,$y3=100,$z3=0, 
$style='stroke:black;stroke-width:1;fill:none') {
$x1z=$x1; $y1z=$y1-$z1;
$x2z=$x2; $y2z=$y2-$z2;
$x3z=$x3; $y3z=$y3-$z3;
$points=$x1z.','.$y1z.' '.$x2z.','.$y2z.' '.$x3z.','.$y3z;
echo "<polyline points='$points' style='$style' />";
}

// polylineZ4P($x1,$y1,$z1,$x2,$y2,$z2,$x3,$y3,$z3,$x4,$y4,$z4,$style)
//(xi,yi,zi) = 4 points in 3d coordinates
//(xiz,yiz) = 4 points in 2d coordinates
function polylineZ4P($x1=100,$y1=50,$z1=0,$x2=200,$y2=150,$z2=0,
$x3=300,$y3=100,$z3=0,$x4=350,$y4=150,$z4=0,
$style='stroke:black;stroke-width:1;fill:none') {
$x1z=$x1; $y1z=$y1-$z1;
$x2z=$x2; $y2z=$y2-$z2;
$x3z=$x3; $y3z=$y3-$z3;
$x4z=$x4; $y4z=$y4-$z4;
$points=$x1z.','.$y1z.' '.$x2z.','.$y2z.' '.$x3z.','.$y3z.' '.$x4z.','.$y4z;
echo "<polyline points='$points' style='$style' />";
}

// pyramidRotDeg($x1, $y1, $w, $h, $deg, $a, $style);
//(x1,y1) = top-left point of base rectangle, rotation point
//w = base rect width; h = base rect height
//deg = rotation angle in degree (+ counter clockwise)
//(xi,yi) = calculated rotated rect points in clockwise order
//(xca,yca) = pyramid coords in 2d
//return array($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4,$xca,$yca);
function pyramidRotDeg($x1=100, $y1=100, $w=100, $h=50, $deg=45, 
$a=30, $style='stroke:black;stroke-width:1;fill:lightgrey') {
//rect($x1,$y1,$w,$h);
$rad=deg2rad($deg);
$x2=$x1+$w*cos($rad); $y2=$y1-$w*sin($rad);
//point($x1,$y1); point($x2,$y2);
$x3=$x2+$h*sin($rad); $y3=$y2+$h*cos($rad);
$x4=$x1+$h*sin($rad); $y4=$y1+$h*cos($rad);
//point($x3,$y3); point($x4,$y4);
$xc=$x1+$w/2; $yc=$y1+$h/2;
//point($xc,$yc); line($x1,$y1,$x3,$y3); line($x2,$y2,$x4,$y4);
$arrc=lineMidPoint($x1,$y1,$x3,$y3);
$xcr=$arrc[0]; $ycr=$arrc[1];
point($xcr,$ycr);
$xca=$xcr; $yca=$ycr-$a;
echo "<polygon points='$x1,$y1 $x2,$y2 $xca,$yca' style='$style' />";
echo "<polygon points='$x2,$y2 $x3,$y3 $xca,$yca' style='$style' />";
echo "<polygon points='$x3,$y3 $x4,$y4 $xca,$yca' style='$style' />";
echo "<polygon points='$x4,$y4 $x1,$y1 $xca,$yca' style='$style' />";
return array($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4,$xca,$yca);
}

// sofaRotDeg($x1, $y1, $w, $h, $deg, $a, $style)
//1+----------------+2   sofa top view parts
//4+--+5--------6+--+3         1
//-|  |          |  |      4   3   2
//9+--+7--------8+--+10
//
//a = sofa height part 3 (sitting)
//b = sofa height part 2 and 4 (armrests)
//c = sofa height part 1 (back)             
//(xi,yi) = rotated base rectangle points coords
//(xia,yia) = rotated top rectangle points coords
//(x1b,y1b) = top-left roof point coords
//(x2b,y2b) = top-right roof point coords
function sofaRotDeg($x1=100, $y1=200, $w=100, $h=50, $deg=30, 
$a=20, $b=30, $c=40, $style='stroke:black;stroke-width=1;fill:lightgrey;') {
if ($a<=0 or $b<=0 or $c<=0) {exit();}
else {
$w12=$w; $w45=$w/4; $w56=$w/2; $w63=$w45; $w46=$w-$w45;
$h14=$h/4; $h49=3*$h/4; 
$arrb1=rectRotDeg($x1,$y1,$w12,$h14,$deg,$style);
$x2=$arrb1[2]; $y2=$arrb1[3];
$x3=$arrb1[4]; $y3=$arrb1[5];
$x4=$arrb1[6]; $y4=$arrb1[7];
$arr12=rectRotDegArray($x1,$y1,$w45,$h14,$deg);
$x5=$arr12[4]; $y5=$arr12[5];
//point($x5,$y5);
$arr13=rectRotDegArray($x1,$y1,$w46,$h14,$deg);
$x6=$arr13[4]; $y6=$arr13[5];
//point($x6,$y6);
$arrb2=rectRotDeg($x6,$y6,$w63,$h49,$deg,$style);
$x10=$arrb2[4]; $y10=$arrb2[5];
$x8=$arr3[6]; $y8=$arr3[7];
$arrb3=rectRotDeg($x5,$y5,$w56,$h49,$deg,$style);
$x7=$arrb2[6]; $y7=$arrb2[7];
$arrb4=rectRotDeg($x4,$y4,$w45,$h49,$deg,$style);
$x9=$arrb4[6]; $y9=$arrb4[7];
if ($deg>0 and $deg<=90) {
boxRectRotDeg($x1,$y1,$w12,$h14,$deg,$c,$style); //part 1
boxRectRotDeg($x6,$y6,$w45,$h49,$deg,$b,$style); //part 2
boxRectRotDeg($x5,$y5,$w56,$h49,$deg,$a,$style); //part 3
boxRectRotDeg($x4,$y4,$w45,$h49,$deg,$b,$style); //part 4
	}
    elseif ($deg>90 and $deg<=180) {
    boxRectRotDeg($x6,$y6,$w45,$h49,$deg,$b,$style); //2
    boxRectRotDeg($x5,$y5,$w56,$h49,$deg,$a,$style); //3
    boxRectRotDeg($x4,$y4,$w45,$h49,$deg,$b,$style); //4
    boxRectRotDeg($x1,$y1,$w12,$h14,$deg,$c,$style); //1 	
	}
    elseif ($deg<0 and $deg>=-90) {
    boxRectRotDeg($x1,$y1,$w12,$h14,$deg,$c,$style); //1
    boxRectRotDeg($x4,$y4,$w45,$h49,$deg,$b,$style); //4
	boxRectRotDeg($x5,$y5,$w56,$h49,$deg,$a,$style); //3
    boxRectRotDeg($x6,$y6,$w45,$h49,$deg,$b,$style); //2	
	}
    elseif ($deg<-90 and $deg>=-180) {
    boxRectRotDeg($x4,$y4,$w45,$h49,$deg,$b,$style); //4
    boxRectRotDeg($x5,$y5,$w56,$h49,$deg,$a,$style); //3
    boxRectRotDeg($x6,$y6,$w45,$h49,$deg,$b,$style); //2
    boxRectRotDeg($x1,$y1,$w12,$h14,$deg,$c,$style); //1	
	}
    
} }


// surface3P($x1,$y1,$z1,$x2,$y2,$z2,$x3,$y3,$z3,$style)
//(xi,yi,zi) = 3 points coordinates in 3d
//(xiz,yiz) = 3 points coordinates in 2d
function surface3P($x1=200,$y1=200,$z1=0,$x2=250,$y2=200,$z2=0,$x3=225,$y3=200,$z3=50,
$style='stroke:black;stroke-width:1;fill:lightgrey') {
$x1z=$x1; $y1z=$y1-$z1;
$x2z=$x2; $y2z=$y2-$z2;
$x3z=$x3; $y3z=$y3-$z3;
echo "<polygon points='$x1z,$y1z $x2z,$y2z $x3z,$y3z' style='$style' />";
}

// surface4P($x1,$y1,$z1,$x2,$y2,$z2,$x3,$y3,$z3,$x4,$y4,$z4,$style)
//(xi,yi,zi) = 4 points coordinates in 3d
//(xiz,yiz) = 4 points coordinates in 2d
function surface4P($x1=200,$y1=200,$z1=10,$x2=300,$y2=200,$z2=20,$x3=250,$y3=150,$z3=30,
$x4=210,$y4=200,$z4=40,$style='stroke:black;stroke-width:1;fill:lightgrey') {
$x1z=$x1; $y1z=$y1-$z1;
$x2z=$x2; $y2z=$y2-$z2;
$x3z=$x3; $y3z=$y3-$z3;
$x4z=$x4; $y4z=$y4-$z4;
echo "<polygon points='$x1z,$y1z $x2z,$y2z $x3z,$y3z $x4z,$y4z' style='$style' />";
}


// tree1($x,$y,$a,$r)
//(x,y) = tree roots coordinates
//a = total height of tree
//r = max radius of tree branches
function tree1($x=100,$y=300,$a=50,$r=10)  {
$dz=$a/5; $z1=$y-$dz; $r1=$r/2; $r2=$r;
$x5=$x; $y5=$y-$a;
lineZ($x,$y,$z,$x5,$y5,$z5,'stroke:brown;stroke-width:3;');
$x1=$x; $y1=$y-$dz;
//circle($x1,$y1,$r1,'fill:green;');
$x2=$x; $y2=$y-2*$dz;
circle($x2,$y2,$r2,'fill:green;');
$x3=$x; $y3=$y-3*$dz;
circle($x3,$y3,$r2,'fill:green;');
$x4=$x; $y4=$y-4*$dz;
circle($x4,$y4,$r2,'fill:green;');
$x5=$x; $y5=$y-5*$dz;
circle($x5,$y5,$r1,'fill:green;');
}

//(x1,y1) = first point of wall
//(x2,y2) = second point of wall
//a = height of wall
// wall($x1, $y1, $x2, $y2, $a, $style)
function wall($x1=100, $y1=100, $x2=150, $y2=150, $a=30, 
$style='stroke:black;stroke-width:1;fill:none;') {
$x1a=$x1; $y1a=$y1-$a;
$x2a=$x2; $y2a=$y2-$a;
echo "<polygon points='$x1,$y1 $x2,$y2 $x2a,$y2a $x1a,$y1a' 
style='$style' />";
}

?>