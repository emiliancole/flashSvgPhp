<?php
include("flashSvg.inc.04.php");

// *** TESTING FUNCTIONS ***

svgOpen(500, 500);
title('flashSVG circle');
rect(0,0,500,500);
grid(0,0,500,500,10,10,50,50);
circle(200,200,25,'blue',2,'red');
svgClose();

?>
