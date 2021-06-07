<?php
$sec=trim(fgets(STDIN));

$hours = floor($sec / 3600);
$minutes = floor(($sec / 60) % 60);
$seconds = floor($sec % 60);


echo $hours.":".$minutes.":".$seconds.PHP_EOL;