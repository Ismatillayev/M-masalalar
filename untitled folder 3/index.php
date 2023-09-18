<?php
$a = 13;
$b = 24;
$c = 56;
$p = floor(($a + $b + $c)/2);
$s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
echo $s;