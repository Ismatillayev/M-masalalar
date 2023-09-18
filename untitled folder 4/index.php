<?php
$a = 50;
$c = 45;
$b = floor(sqrt(pow($a,2) - pow($c,2)));
$r = ($a + $b + $c)/ $a * $b;
echo "$b <br>";
echo $r;