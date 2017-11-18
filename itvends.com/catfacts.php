<?php
require('common.php');
$catfacts = file("catfacts.txt");

$format = arg('format', 'text');
echo format($catfacts[array_rand($catfacts)], $format);
?>
