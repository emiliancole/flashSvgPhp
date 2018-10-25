<?php

// markerOpen($id, $viewbox, $refx, $refy, $mw, $mh, $orient)
function markerOpen($id='marker01', $refx=0, $refy=5, 
$mw=5, $mh=5, $orient='auto') {
echo "<marker id='$id' refX=$refx refY=$refy 
markerWidth=$mw markerHeight=$mh orient='$orient' >";
}

// markerArrow($id, $refx, $refy, $mw, $mh, $orient)
function markerArrow($id='arrow01', $refx=5, $refy=5, 
$mw=10, $mh=10, $orient='auto') {
echo "<marker id='$id' refX=$refx refY=$refy 
markerWidth=$mw markerHeight=$mh orient='$orient' >";
path('M1,1 L9,5 L1,9 z','red',1,'black');
markerClose();
}

// markerX($id, $refx, $refy, $mw, $mh, $orient) 
function markerX($id='x01', $refx=5, $refy=5, 
$mw=10, $mh=10, $orient='auto') {
echo "<marker id='$id' refX=$refx refY=$refy 
markerWidth=$mw markerHeight=$mh orient='$orient' >";
line(1,1,9,9,'black',1);
line(1,9,9,1,'black',1);
markerClose();
}

// markerCircle($id, $refx, $refy, $mw, $mh, $orient)
function markerCircle($id='circle01', $refx=5, $refy=5, 
$mw=10, $mh=10, $orient='auto') {
echo "<marker id='$id' refX=$refx refY=$refy 
markerWidth=$mw markerHeight=$mh orient='$orient' >";
circle(5,5,4,'red',1,'black');
markerClose();
}

// markerBox($id, $refx, $refy, $mw, $mh, $orient)
function markerBox($id='box01', $refx=5, $refy=5, 
$mw=10, $mh=10, $orient='auto') {
echo "<marker id='$id' refX=$refx refY=$refy 
markerWidth=$mw markerHeight=$mh orient='$orient' >";
rect(1,1,8,8,'red',1,'black');
markerClose();
}

function markerClose() {
echo "</marker>";
}

?>
