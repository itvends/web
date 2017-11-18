<?php

require('common.php');
$bag = file("bag.txt");

$format = arg('format', 'text');
echo format($bag[array_rand($bag)], $format);

?>
