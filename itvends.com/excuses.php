<?php
require('common.php');
$excuses = file("excuses.txt");

$format = arg('format', 'text');
echo format($excuses[array_rand($excuses)], $format);
?>
