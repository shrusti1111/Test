<?php
$a = 100;
$b = 200;
$c = 300;
if ($a > $b && $a > $c) {
    echo $a, " is maximum!";
} else if ($b > $a && $b > $c) {
    echo $b, " is maximum!";
} else {
    echo $c, " is maximum!";
}
