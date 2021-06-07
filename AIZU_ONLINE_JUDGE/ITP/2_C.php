<?php
    fscanf(STDIN, "%d %d %d", $a, $b, $c);
    $array = [$a, $b, $c];
    sort($array);
    echo $array[0], ' ', $array[1], ' ', $array[2];
?>
