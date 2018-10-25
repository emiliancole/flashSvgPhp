<?php

// gMTransform($a,$b,$c,$d,$e,$f)
//$a=scaleX; $b=rotateX; $c=rotateY; $d=scaleY; 
//$e=translateH; $f=translateV
function gMTransform($a=1, $b=2, $c=3, $d=4, $e=5, $f=6) {
echo "<g transform='matrix($a,$b,$c,$d,$e,$f)' >";
}

// gMTranslateV($f)
//$f=vertical translation
function gMTranslateV($f=10) {
echo "<g transform='matrix(1,0,0,1,0,$f)' >";
}

function gTranslateH($x=10) {
echo "<g transform='translate($x)' >";
}

function gTranslateV($y=10) {
echo "<g transform='translate(0,$y)' >";
}

function gTranslate($x=10, $y=10) {
echo "<g transform='translate($x,$y)' >";
}

function gMTranslate($e=10,$f=10) {
echo "<g transform='matrix(1,0,0,1,$e,$f)' >";
}

// matrix(1 0 0 1 e 0)
function gMTranslateH($e=10) {
echo "<g transform='matrix(1,0,0,1,$e,0)' >";
}

// matrix(a 0 0 d 0 0)
function gMScale($a=1, $d=1) { 
echo "<g transform='matrix($a,0,0,$d,0,0)' >";
}

function gScale($x=2, $y=2) { 
echo "<g transform='scale($x,$y)' >";
}

function gRotate($alpha=45, $cx=0, $cy=0) {
echo "<g transform='rotate($alpha, $cx, $cy)' >";
}

function textRotate($x=100, $y=100, $alpha=45, $cx=0, $cy=0, $text='aaa', $fill='black') {
echo "<text x=$x y=$y transform='rotate($alpha $cx,$cy)' fill=$fill >$text</text>";
}

?>
